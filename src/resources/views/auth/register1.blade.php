@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register1.css') }}">
@endsection

@section('content')
<main>
    <div class="register">
        <div class="register_form">
            <div class="register_header">
                <h1 class="register_header-logo" >PiGLy</h1>
                <h2 class="register_header-head1">新規会員登録</h2>
                <p class="register_header-head2">STEP1 アカウント情報の登録</p>
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
                                <input class="form_group-text_name" type="text" name="name" placeholder="名前を入力">
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
                                <input class="form_group-text_email" type="email" name="email" placeholder="メールアドレスを入力">
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
                                <input class="form_group-text_password" type="password" name="password" placeholder="パスワードを入力">
                            </div>
                            <div class="form_error">
                                <!-- エラーメッセージ -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form__button-submit" type="submit">次に進む</button>
                </div>
                <div class="login_form"></div>
                <a class="login_form-button" href="/login/form">ログインはこちら</a>
            </form>
        </div>
    </div>
</main>
@endsection