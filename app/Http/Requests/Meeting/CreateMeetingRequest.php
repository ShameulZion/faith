<?php

namespace App\Http\Requests\Meeting;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class CreateMeetingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Gate::authorize('admin.meeting.create');
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
            'title'     => ['required', 'string', 'max:255', 'unique:meetings'],
            'content'   => ['nullable', 'string'],
            'attach'    => ['nullable','max:10240'],
        ];
    }
}
