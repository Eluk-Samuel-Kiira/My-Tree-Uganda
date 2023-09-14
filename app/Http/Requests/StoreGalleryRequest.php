<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'title' => 'required|string|max:100|unique:galleries',
            'description' => 'required|string|max:20000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The user ID field is required.',
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than :max characters.',
            'title.unique' => 'The title has already been taken.',
            'descriptions.required' => 'The description field is required.',
            'descriptions.string' => 'The description must be a string.',
            'descriptions.max' => 'The description may not be greater than :max characters.',
            'image.required' => 'An image is required.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: :values.',
            'image.max' => 'The image may not be greater than :max kilobytes in size.',
        ];
    }
}
