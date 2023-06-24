@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="contact-admin__content">
    <div class="contact-admin__heading">
        <h2>管理システム</h2>
    </div>
    <div class="contact-admin__search">
        <div class="contact__name-gender">
            <div class="contact-admin">
                <div class="contact-admin__ttl">
                    <div>お名前</div>
                </div>
                <div class="contact-admin__txt">
                    <input type="text" >
                </div>
            </div>
            <div class="contact-admin">
                <div class="contact-admin__ttl">
                    <div>性別</div>
                </div>
                <div class="contact-admin__txt">
                    <input type="radio" value="全て" style="transform:scale(2.0);" checked >
                    <label for="all">全て</label>
                    <input type="radio" value="男性">男性
                    <input type="radio" value="女性">女性
                </div>
            </div>
        </div>
        <div class="contact-admin">
            <div class="contact-admin__ttl">
                <div>登録日</div>
                <input type="text" >
            </div>
        </div>
        <div class="contact-admin">
            <div class="contact-admin__ttl">
                <div>メールアドレス</div>
                <input type="text" >
            </div>
        </div>
        <div class="admin__button">
            <button class="admin__button-submit" type="submit">検索</button><br>
            <a href="/admin">リセット</a>
        </div>
    </div>
</div>

<div class="admin-number">全何件中　⚪︎ー⚪︎件</div>
<table class="admin__table">
    <tr class="admin__table-tr">
        <th class="admin__table-th">ID</th>
        <th class="admin__table-th">お名前</th>
        <th class="admin__table-th">性別</th>
        <th class="admin__table-th">メールアドレス</th>
        <th class="admin__table-th">ご意見</th>
        <th class="admin__table-th"></th>
    </tr>
    <tr>
        <td class="admin__table-td">ID</td>
        <td class="admin__table-td">名前</td>
        <td class="admin__table-td">性別</td>
        <td class="admin__table-td">メールアドレス</td>
        <td class="admin__table-td">ご意見</td>
        <td class="admin__table-td"><button>削除</button></td>
    </tr>
</table>
@endsection