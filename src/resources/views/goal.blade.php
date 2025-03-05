@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goal.css') }}">
@endsection

@section('content')
<header class="header">
    <a class="header__logo" href="/weight_logs">
        PiGly
    </a>
    <div class="header__button">
      <button class="header__button-setting">
        <a class="header__button-setting_logo" href="/wight_logs/goal_setting/form">
          体重目標設定
        </a>
      </button>
      <form action="/logout" method="post">
        @csrf
        <button class="header__button-logout">
          <a class="header__button-logout_logo">
            ログアウト
          </a>
        </button>
      </form>
    </div>
</header>

<main>
  <div class="weight">
    <div class="weight_inner">
      <h1 class="weight_heading">目標体重設定</h1>
      <form class="form" action="/wight_logs/goal_setting" method="post">
        @csrf
        <div class="form_frame">
          <div class="form_group-text">
            <input class="form_group-text_weight" type="text" name="target_weight" value="{{ old('target_weight') }}">
            <p class="form_group-text--label">kg</p>
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          </div>
          <div class="form_error">
            <!-- エラーメッセージ -->
          </div>
        </div>
        <div class="form_button">
          <button class="form_button-back" type="button" onClick="history.back()">戻る</button>
          <button class="form_button-submit" type="submit" name="update" value="update">更新</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection