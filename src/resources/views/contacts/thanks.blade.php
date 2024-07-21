<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact/thanks.css') }}">
    <title>Thank You</title>
</head>
<body>
    <div class="thanks__container">
        <div class="thanks__background">Thank you</div>
            <div class="thanks__content">
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございました</h2>
            </div>
            <div class="form__button">
                <a href="{{ route('contact.index') }}" class="form__button-submit">HOME</a>
            </div>
        </div>
    </div>
</body>
</html>