@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="form-container">
    <h2 class="form-title">Login</h2>
    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf
        <div class="form__group">
            <label for="email" class="form__label">メールアドレス</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form__input" placeholder="例:test@example.test">
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
            <button type="submit" class="form__button">ログイン</button>
        </div>
    </form>
    <a href="{{ route('register') }}" class="form__link">新規登録</a>
</div>
@endsection