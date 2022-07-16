<?php

namespace App\Http\Requests\Meeting;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMeetingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Gate::authorize('admin.meeting.edit');
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
            'title'     => ['required', 'string', 'max:255', 'unique:meetings,title,' . request()->route('meeting')->id],
            'content'   => ['nullable', 'string'],
            'image'     => ['nullable','max:500000'],
        ];
    }
}
