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
        <div class="contact-admin__ttl">
            <div>お名前</div>
        </div>
        <div class="contact-admin__txt">
            <input type="text" >
        </div>
        <div class="contact-admin__ttl">
            <div>性別</div>
        </div>
        <div class="contact-admin__txt">
            <input type="radio" value="全て" style="transform:scale(2.0);" checked >
            <label for="all">全て</label>
            <input type="radio" value="男性">男性
            <input type="radio" value="女性">女性
        </div>
        <div class="contact-admin__ttl">
            <div>登録日</div>
            <input type="text" >
        </div>
        <div class="contact-admin__ttl">
            <div>メールアドレス</div>
            <input type="text" >
        </div>
        <div class="admin__button">
            <button class="admin__button-submit" type="submit">検索</button><br>
            <a href="/admin">リセット</a>
        </div>
    </div>
</div>
@endsection