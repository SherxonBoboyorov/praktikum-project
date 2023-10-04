<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title_de' => 'required|string|max:255',
            'title_em' => 'required|string|max:255',
            'job_de' => 'required|string|max:255',
            'job_en' => 'required|string|max:255',
            'content_de' => 'required',
            'content_en' => 'required',
            'email' => 'required|string|max:255',
            'number' => 'required|string|max:55',
        ];
    }
}
