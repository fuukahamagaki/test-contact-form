<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required',],
            'address' => ['required', 'max:255'],
            'building_name' => ['max:255'],
            'opinion' => ['required', 'max:120']
        ];
    }

    public function messages() {
        return [
            'fullname.required' => '名前を入力してください',
            'fullname.string' => '名前を文字列で入力してください',
            'fullname.max' => '名前255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'building_name.max' => '建物名を255文字以下で入力してください',
            'opinion.required' => '内容を入力してください',
            'opinion.max' => '内容を120文字以下で入力してください',
        ];
    }
}
