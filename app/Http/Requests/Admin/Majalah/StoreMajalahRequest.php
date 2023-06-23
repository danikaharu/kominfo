<?php

namespace App\Http\Requests\Admin\Majalah;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreMajalahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->input('name')),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:10',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'slug' => 'required|min:10',
            'file' => 'required|mimes:pdf|max:20000'
        ];
    }
}
