<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class MemberRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'group_id' => 'required|integer|exists:groups,id',
            'role' => 'required|string|in:admin,member',
        ];
    }
    protected function prepareForValidation() : void
    {
        $this->merge([
            'user_id' => $this->route('user_id'),
            'group_id' => $this->route('group_id'),
            'role' => Str::slug($this->input('role')),
        ]);
    }
    protected $stopOnFirstFilure = true;
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422));
    }
    public function messages()
    {
        return [
            'user_id.required' => 'The user ID is required.',
            'user_id.integer' => 'The user ID must be an integer.',
            'user_id.exists' => 'The selected user ID does not exist.',
            'group_id.required' => 'The group ID is required.',
            'group_id.integer' => 'The group ID must be an integer.',
            'group_id.exists' => 'The selected group ID does not exist.',
            'role.required' => 'The role is required.',
            'role.string' => 'The role must be a string.',
            'role.in' => 'The selected role is invalid.',
        ];
    }
}
