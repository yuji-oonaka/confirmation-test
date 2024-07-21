@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="form-container">
    <h2 class="form-title">Register</h2>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div class="form__group">
            <label for="name" class="form__label">お名前</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="form__input" placeholder="例:山田&ensp;太郎">
            @error('name')
                <span class="form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form__group">
            <label for="email" class="form__label">メールアドレス</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form__input" placeholder="例:test@example.test" >
            @error('email')
                <span class="form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form__group">
            <label for="password" class="form__label">パスワード</label>
            <input id="password" type="password" name="password" required class="form__input" placeholder="例:coachtec1106">
            @error('password')
                <span class="form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form__group">
            <label for="password_confirmation" class="form__label">パスワード（確認）</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="form__input">
        </div>
        <div class="form__group">
            <button type="submit" class="form__button">登録</button>
        </div>
    </form>
    <a href="{{ route('login') }}" class="form__link">ログイン</a>
</div>
@endsection