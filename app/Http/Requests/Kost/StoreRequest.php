<?php

namespace App\Http\Requests\Kost;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dont' forget to set this as true
        return true;
    }

    public function rules(): array
    {
        // make all of the fields required, set featured image to accept only images
        return [
            'kost_title' => 'required|string|min:1|max:250',
            'kost_type' => 'required|string|min:1|max:250',
            'kost_address' => 'required|string|min:1|max:250',
            'kost_city' => 'required|string|min:1|max:250',
            'kost_price' => 'required|integer',
            'kost_facilities' => 'required|string|min:1|max:60000',
            'virtual_embed' => 'required|string|min:1|max:60000',
            'gmaps_location' => 'required|string|min:1|max:60000',
            'others' => 'string|min:1|max:60000',
            'thumbnail_image' => 'required|image|max:2048|mimes:jpg,jpeg,png',
        ];
    }


}
