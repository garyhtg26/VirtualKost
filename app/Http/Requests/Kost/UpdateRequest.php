<?php

namespace App\Http\Requests\Kost;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kost_title' => 'required|string|min:1|max:255',
            'kost_type' => 'required|string|min:1|max:255',
            'kost_address' => 'required|string|min:1|max:255',
            'kost_subdistrict' => 'required|string|min:1|max:255',
            'kost_city' => 'required|string|min:1|max:255',
            'kost_province' => 'required|string|min:1|max:255',
            'kost_price' => 'required|integer',
            'kost_facilities' => 'required|string|min:1|max:60000',
            'virtual_embed' => 'max:60000',
            'gmaps_location' => 'required|string|min:1|max:60000',
            'latitude'=> 'required',
            'longitude'=> 'required',
            'others' => 'string|min:1|max:60000',
            'thumbnail_image' => 'image|max:2048|mimes:jpg,jpeg,png',
        ];
    }
}
