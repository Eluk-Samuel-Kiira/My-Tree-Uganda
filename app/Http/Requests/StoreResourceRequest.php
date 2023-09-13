<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResourceRequest extends FormRequest
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
            'file' => 'required|file|mimes:doc,docx,txt,pdf,rtf|max:10240',
            'filename' => 'required|string|max:100|unique:resources',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'The file is required.',
            'file.file' => 'The selected file is not valid.',
            'file.mimes' => 'The file must be in one of the following formats: doc, docx, txt, pdf, rtf.',
            'file.max' => 'The file may not be greater than 10MB in size.',
            'filename.required' => 'The filename is required.',
            'filename.string' => 'The filename must be a string.',
            'filename.max' => 'The filename may not be greater than 100 characters.',
            'filename.unique' => 'The filename has already been taken.',
        ];
    }

}
