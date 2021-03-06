<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'pharmacien' => 'required',
            'cin' => 'required',
            'contact' => 'required',
            'nom' => 'required',
            'patente' => 'nullable|unique:Clients,patente,'.$this->client->id,
            'ice' => 'nullable|unique:Clients,ice,'.$this->client->id,
            'i_f' => 'nullable|unique:Clients,i_f,'.$this->client->id,
            'rc' => 'nullable|unique:Clients,rc,null,'.$this->client->id,
            'autorisation' => 'nullable|unique:Clients,autorisation,'.$this->client->id,
            'ville' => 'required',
            'adress' => 'required|min:4',
        ];
    }
}
