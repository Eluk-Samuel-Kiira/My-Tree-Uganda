<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFriendRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'message' => 'required|string|max:20000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,ico|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The user ID field is required.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than :max characters.',
            'name.unique' => 'The name has already been taken.',
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than :max characters.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
            'message.max' => 'The message may not be greater than :max characters.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: :values.',
            'image.max' => 'The image may not be greater than :max kilobytes in size.',
        ];
    }
}
