<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('comics')->ignore($this->comic->id),
                'min:5',
                'max:100'
            ],
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:25',
            'type' => 'nullable|max:25'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Non puoi cancellare questo campo, il titolo é obbligatorio',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'thumb.max' => "L'immagine deve avere massimo :max caratteri",
            'price.max' => 'Il prezzo deve avere massimo :max caratteri',
            'series.max' => 'La serie deve avere massimo :max caratteri',
            'sale_date.max' => 'La data deve avere massimo :max caratteri',
            'type.max' => 'Il tipo deve avere massimo :max caratteri'

        ];
    }
}
