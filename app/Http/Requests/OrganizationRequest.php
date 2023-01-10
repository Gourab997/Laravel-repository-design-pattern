<?php

namespace App\Http\Requests;

use App\Models\Organization;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:organizations',
            'phone' => 'required|string|unique:organizations',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
        ];
    }
}
