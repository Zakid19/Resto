<?php

namespace App\Http\Requests;

use App\Rules\DateResto;
use App\Rules\TimeResto;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'table_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
            'guest_number' => 'required',
            'res_date' => ['required', 'date', new DateResto, new TimeResto]
        ];
    }
}
