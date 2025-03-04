@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register2.css') }}">
@endsection

@section('content')
<main>
    <div class="register">
        <div class="register_form">
            <div class="register_header">
                <h1 class="register_header-logo">PiGLy</h1>
                <h2 class="register_header-head1">新規会員登録</h2>
                <p class="register_header-head2">STEP2 体重データの入力</p>
            </div>
            <form action="/register/step2" class="form" method="post">
                @csrf
                <div class="form_frame">
                    <div class="form_group">
                        <div class="form_group-title">
                            <p class="form_label--item">現在の体重</p>
                        </div>
                        <div class="form_group-content">
                            <div class="form_group-text">
                                <input class="form_group-text_weight" type="text" name="weight">
                                <p class="form_group-text_weight_logo">kg</p>
                            </div>
                            <div class="form_error">
                                <!-- エラーメッセージ -->
                            </div>
                        </div>
                    </div>
                    <div class="form_group">
                        <div class="form_group-title">
                            <p class="form_label--item">目標の体重</p>
                        </div>
                        <div class="form_group-content">
                            <div class="form_group-text">
                                <input class="form_group-text_target-weight" type="text" name="target_weight">
                                <p class="form_group-text_target-weight_logo">kg</p>
                            </div>
                            <div class="form_error">
                                <!-- エラーメッセージ -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form__button-submit" type="submit">アカウント作成</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection