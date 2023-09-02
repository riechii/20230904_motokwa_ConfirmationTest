<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
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
            'fullname' => 'required|string',
            'gender' => 'required',
            'email' => 'required|string|email',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required|string',
            'opinion' => 'required|string|max:120'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => '名前を入力してください',
            'fullname.string' => '名前を文字列で入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '半角でハイフン入れて郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.string' => 'ご意見を文字列で入力してください',
            'opinion.max' => 'ご意見を120文字以内で入力してください',
        ];
    }
}
