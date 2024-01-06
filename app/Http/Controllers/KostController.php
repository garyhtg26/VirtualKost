<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// Use the Kost Model
use App\Models\Kost;
// We will use Form Request to validate incoming requests from our store and update method
use App\Http\Requests\Kost\StoreRequest;
use App\Http\Requests\Kost\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): Response
    {
        if (Auth::user()->role == 1){
            return response()->view('kosts.index', [
                'kosts' => Kost::orderBy('updated_at', 'desc')->get(),
            ]);
        } else {
            return response()->view('kosts.index', [
                'kosts' => Kost::orderBy('updated_at', 'desc')->where('user_id', '=', Auth::user()->id)->get(),
            ]);
        }

    }

    public function search(): Response
    {
        return response()->view('components.search', [
            'kosts' => Kost::orderBy('updated_at', 'desc')->get(),
        ]);
    }
    public function home(): Response
    {
        return response()->view('home', [
            'kosts' => Kost::orderBy('updated_at', 'desc')->get(),
        ]);
    }
    public function detail(string $id)
    {
        return response()->view('components.detail-kost', [
            // 'kost' => Kost::findOrFail($id),
            'kost' => Kost::with('user')->where('id','=',$id)->first()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('kosts.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $validated = $request->validated();
        $validated[ 'user_id' ] = $user->id;
        if ($request->hasFile('thumbnail_image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/kosts/thumbnail-images', request()->file('thumbnail_image'));
            $validated['thumbnail_image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Kost::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Kost created successfully!');
            return redirect()->route('kosts.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('kosts.show', [
            'kost' => Kost::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('kosts.form', [
            'kost' => Kost::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $kost = Kost::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('thumbnail_image')) {
            // delete image
            Storage::disk('public')->delete($kost->thumbnail_image);

            $filePath = Storage::disk('public')->put('images/kosts/thumbnail-images', request()->file('thumbnail_image'), 'public');
            $validated['thumbnail_image'] = $filePath;
        }

        $update = $kost->update($validated);

        if($update) {
            session()->flash('notif.success', 'Kost updated successfully!');
            return redirect()->route('kosts.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $kost = Kost::findOrFail($id);

        Storage::disk('public')->delete($kost->thumbnail_image);

        $delete = $kost->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Kost deleted successfully!');
            return redirect()->route('kosts.index');
        }

        return abort(500);
    }
}
