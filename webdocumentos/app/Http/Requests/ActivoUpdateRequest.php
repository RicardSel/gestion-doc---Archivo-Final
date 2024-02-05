<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivoUpdateRequest extends FormRequest
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
            'rfid' => 'unique:activo_fijos,id,'.$this->activo->id,
        ];
    }

    public function messages()
    {
        return [
            'rfid.unique' => 'Ya hay un activo registrado con ese código RFID.',
        ];
    }
}
