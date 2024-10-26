<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'title_one' => 'required|string|max:255',
            'title_two' => 'required|string|max:255',
            'title_three' => 'required|string|max:255',
            'description_one' => 'required|string|max:5000',
            'description_two' => 'required|string|max:5000',
            'description_three' => 'required|string|max:5000',
            'image_one' => 'nullable|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:5048',
            'image_two' => 'nullable|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:5048',
            'image_three' => 'nullable|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:5048',
            'image_four' => 'nullable|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:5048',
        ];
    }
}
