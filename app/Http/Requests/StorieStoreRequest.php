<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorieStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:5048',
            'review' => 'nullable|string',
            'rating' => 'required|string|max:255',
        ];
    }
}
