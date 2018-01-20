<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobsRequest extends Request
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

            'job_title' => 'required',
            'photo_id' => 'required',
            'skill1' => 'required',
            'skill2' => 'required',
            'skill3' => 'required',
            'interests' => 'required',
            'description' => 'required',
            'wage' => 'required'
        ];
    }
}
