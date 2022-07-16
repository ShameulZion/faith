<?php

namespace App\Http\Requests\Project;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Gate::authorize('admin.project.create');
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
            'title'     => ['required', 'string', 'max:255', 'unique:projects'],
            'content'   => ['nullable', 'string'],
            'attach'    => ['nullable','max:10240'],
        ];
    }
}
