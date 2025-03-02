@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<main>
    <div class="login">
        <div class="login_form">
            <div class="login_header">
                <h1 class="login_header-logo">PiGLy</h1>
                <h2 class="login_header-head">ログイン</h2>
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
                            <div   class="form_group-text">
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
                </div> 
                <div class="register_form"></div>
                    <a class="register_form-button" href="/register">アカウント作成はこちら</a>   
            </form>
        </div>
    </div>
</main>
@endsection