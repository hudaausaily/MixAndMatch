<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Http\Controllers\DateBetween;



class ReservationStoreRequest extends FormRequest
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
             'first_name' => ['required'],
             'last_name' => ['required'],
             'phoneNumber' => ['required'],
             'number_of_guest' => ['required'],
             'res_date' => ['required','date', new DateBetween],
             'email' => ['required', 'string', 'email'],
             'password' => ['required', 'string'],

        ];
    }
}
