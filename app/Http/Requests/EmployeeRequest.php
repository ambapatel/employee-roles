<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'dob' => 'required|date',
            'current_address' => 'required|string',
            'permanent_address' => 'required|string',
            'roles' => 'required',
            'profile_image' => 'required|image|mimes:jpg,png,jpeg|max:2048,except,id',
            'email' => ['required','string','min:3','max:50',Rule::unique('employees')->ignore($this->id)],
            // 'status' => 'required|integer',
        ];
    }
}
