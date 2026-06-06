<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>"string|required||min:3|max:50",
           
        ];

    }

        public function messages():array
        
    { 

        return [
            
            'name.string'=>'El nombre solo permite caracteres',
            'requerid.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 50'
            ];
            
    }
}