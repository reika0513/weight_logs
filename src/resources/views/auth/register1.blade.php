@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
@endsection

@section('content')
<main>
    <div class="weight_register_form">
        <div class="weight_register_header">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            <p>STEP1 アカウント情報の登録</p>
        </div>
        <form action="/register/step1" class="form" method="post">
            @csrf
            <div class="form_frame">
                <div class="form_group">
                    <div class="form_group-title">
                        <p class="form_label--item">お名前</p>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_name" type="text" name="name">
                        </div>
                        <div class="form_error">
                            <!-- エラーメッセージ -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <p class="form_label--item">メールアドレス</p>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_email" type="email" name="email">
                        </div>
                        <div class="form_error">
                            <!-- エラーメッセージ -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <p class="form_label--item">パスワード</p>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_password" type="password" name="password">
                        </div>
                        <div class="form_error">
                            <!-- エラーメッセージ -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_button">
                <button class="form__button-submit" type="submit">次に進む</button>
                <a class="login_form" href="/login/form">ログインはこちら</a>
            </div>
        </div>
    </form>
</main>
@endsection