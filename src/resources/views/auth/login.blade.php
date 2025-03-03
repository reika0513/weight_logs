@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main>
    <div class="weight_register_form">
        <div class="weight_register_header">
            <h1>PiGLy</h1>
            <h2>ログイン</h2>
        </div>
        <form action="/login" class="form" method="post">
            @csrf
            <div class="form_frame">
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
                <button class="form__button-submit" type="submit">ログイン</button>
                <a class="register_form" href="/register/step1/form">アカウント作成はこちら</a>
            </div>
        </div>
    </form>
</main>
@endsection