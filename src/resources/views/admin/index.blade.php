@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-panel">
    <h1>Admin</h1>
    
    <form action="{{ route('admin.index') }}" method="GET" class="search-form">
        <div class="search-group">
            <input type="text" name="name" placeholder="名前を入力してください">
            <input type="text" name="email" placeholder="メールアドレスを入力してください">
        </div>
        <div class="search-group">
            <select name="gender">
                <option value="">性別</option>
                <option value="all">全て</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="category_id">
                <option value="">お問い合わせ種類</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->content }}</option>
                @endforeach
            </select>
        </div>
        <div class="search-group">
            <input type="date" name="date">
        </div>
        <div class="button-group">
            <button type="submit" class="search-button">検索</button>
            <button type="reset" class="reset-button">リセット</button>
        </div>
    </form>
    <div class="pagination-container">   
        {{ $contacts->links() }}
    </div>
    <table class="contact-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>登録日時</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
                <td>{{ $contact->gender_text }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category->content }}</td>
                <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                <td><button class="detail-button">詳細</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection