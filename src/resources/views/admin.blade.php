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
        <div>お名前</div>
        <div>性別</div>
        <div>登録日</div>
        <div>メールアドレス</div>
        <div class="admin__button">
            <button class="admin__button-submit" type="submit">検索</button><br>
            <a href="/admin">リセット</a>
        </div>
    </div>
</div>
@endsection