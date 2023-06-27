@extends('layouts.app')
<style>
    svg.w-5.h-5 {
        width: 30px;
        height: 30px;
    }

    
</style>

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
@if(session('message'))
    <div class="todo__alert--success">
        {{ session('message') }}
    </div>
@endif
<div class="contact-admin__content">
    <div class="contact-admin__heading">
        <h2>管理システム</h2>
    </div>
    <form action="/admin/search" method="get">
        @csrf
        <div class="contact-admin__search">
            <div class="contact__name-gender">
                <div class="contact-admin">
                    <div class="contact-admin__ttl">
                        <div>お名前</div>
                    </div>
                    <input class="contact-admin__txt" type="text" name="keyword" value="{{ old('keyword') }}">
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
                </div>
                <input class="contact-admin__txt" type="date" name="keyword2" value="{{ old('keyword2') }}">~
                <input class="contact-admin__txt" type="date" name="keyword2" value="{{ old('keyword2') }}">
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
    </form>
</div>

{{ $contacts->links() }}
<table class="admin__table">
    <tr class="admin__table-tr">
        <th class="admin__table-th">ID</th>
        <th class="admin__table-th">お名前</th>
        <th class="admin__table-th">性別</th>
        <th class="admin__table-th">メールアドレス</th>
        <th class="admin__table-th">ご意見</th>
        <th class="admin__table-th"></th>
    </tr>
    @foreach($contacts as $contact)
    <form class="delete" action="/admin/delete" method="post">
        @method('DELETE')
        @csrf
        <tr class="admin__table-tr">
            <td class="admin__table-td">{{ $contact['id'] }}</td>
            <td class="admin__table-td">{{ $contact['full_name'] }}</td>
            <td class="admin__table-td">{{ $contact['gender'] }}</td>
            <td class="admin__table-td">{{ $contact['email'] }}</td>
            <td class="admin__table-td">{{ Str::limit($contact->opinion, 25, '...') }}</td>
            <td class="admin__table-td">
                <input type="hidden" name="id" value="{{ $contact['id'] }}">
                <button>削除</button>
            </td>
        </tr>
    </form>
    @endforeach
</table>
