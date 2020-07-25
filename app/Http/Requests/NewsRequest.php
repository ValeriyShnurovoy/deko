<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * Class NewsRequest
 * @package App\Http\Requests
 */
class NewsRequest extends FormRequest
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
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'title' => 'required|string',
            'text' => 'required|string',
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                        'id' => 'required|integer|exists:news,id',
                    ] + $rules;
        }
    }
}
