@extends('layouts.app')

@section('hide-auth-links')
<!-- This section is intentionally left empty -->
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/contact/index.css') }}" />
@endsection
</head>

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="{{ route('contact.confirm') }}" method="post" novalidate>
        @csrf
        <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--name">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例:山田" value="{{ $old_input['last_name'] ?? old('last_name') }}" />
              </div>
              <div class="form__input--text">
                <input type="text" name="first_name" placeholder="例:太郎" value="{{ $old_input['first_name'] ?? old('first_name') }}" />
            </div>
            </div>
              <div class="form__error">
              @error('last_name')
                {{ $message }} 
              @enderror
              @error('first_name')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label>
                <input class="radio-button"type="radio" name="gender" value="1" {{ old('gender','1') == '1' ? 'checked' : '' }}>
                <span class="radio-label">男性</span>
              </label>
              <label>
                <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                <span class="radio-label">女性</span>
              </label>
              <label>
                <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
                <span class="radio-label">その他</span>
              </label>
            </div>
            <div class="form__error">
              @error('gender')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>           
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ $old_input['email'] ?? old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="例:08012345678" value="{{ $old_input['tel'] ?? old('tel') }}">
            </div>
            <div class="form__error">
              @error('tel')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ $old_input['address'] ?? old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>        
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required"></span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ $old_input['building'] ?? old('building') }}" />
            </div>
          <div class="form__error">
            @error('building')
              {{ $message }} 
            @enderror
          </div>
          </div>
        </div> 
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select name="category_id" required>
                <option value="" disabled {{ ($old_input['category_id'] ?? old('category_id')) ? '' : 'selected' }}>選択してください</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}" {{ ($old_input['category_id'] ?? old('category_id')) == $category->id ? 'selected' : ''}}>{{ $category->content }}</option>
                @endforeach  
              </select>
            </div>
            <div class="form__error">
              @error('category_id')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>       
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせの内容をご記入ください" >{{ $old_input['detail'] ?? old('detail') }}</textarea>
            </div>
            <div class="form__error">
              @error('detail')
                {{ $message }}
              @enderror
            </div>            
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection
