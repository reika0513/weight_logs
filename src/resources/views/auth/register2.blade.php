@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register2.css') }}">
@endsection

@section('content')
<main>
    <div class="weight_register_form">
        <div class="weight_register_header">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            <p>STEP2 体重データの入力</p>
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
                            <span>kg</span>
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
                            <span>kg</span>
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
        </div>
    </form>
</main>
@endsection