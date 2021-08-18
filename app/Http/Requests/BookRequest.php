<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'booking-name' => 'required|string',
            'booking-tel' => 'required|numeric',
            'booking-date' => 'required|date',
            'scheduled-time' => 'required',
        ];
    }
    /**
     * Customization for messages in Japanse
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'booking-name' => '名前',
            'booking-tel' => '電話番号',
            'booking-date' => '日付',
            'scheduled-time' => '時間'
        ];
    }
    /** 
    * Error messages
    *
    * @return array
    */
    public function messages()
    {
        return [
            'booking-name.required' => ':attributeを入力してください。',
            'booking-name.string' => ':attributeを文字で記入してください。',
            'booking-tel.required' => ':attributeを入力してください。',
            'booking-tel.numeric' => ':attributeを数字で記入してください。',
            'booking-date.required' => ':attributeを入力してください。',
            'booking-date.date' => ':attributeを日付を選択してください。',
            'scheduled-time.required' => ':attributeを選択してください。'
        ];
    }
}
