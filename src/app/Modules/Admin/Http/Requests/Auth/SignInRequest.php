<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ];
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    private function username()
    {
        return 'email';
    }
}
