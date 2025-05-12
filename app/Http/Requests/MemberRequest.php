<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        ]);
    }
}
