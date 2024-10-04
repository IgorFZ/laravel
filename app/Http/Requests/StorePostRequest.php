<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:draft,published',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => 'category',
            'user_id' => 'user',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A title is required.',
            'body.required' => 'A body is required.',
            'user_id.required' => 'A user is required.',
            'status.required' => 'A status is required.',
            'category_id.required' => 'A category is required.',
        ];
    }
}
