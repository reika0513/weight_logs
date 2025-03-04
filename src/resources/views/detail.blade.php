@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
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
      <button class="header__button-logout">
        <a class="header__button-logout_logo" href="/logout">
          ログアウト
        </a>
      </button>
    </div>
</header>

<main>
  <div class="weight">
    <div class="weight_heading">
      <h1>Weight Log</h1>
    </div>
    <form class="form" action="/weight_logs/create" method="post">
      @csrf
      <div class="form_frame">
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">日付</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <input class="form_group-text_date" type="date" name="date" value="{{ $weight['date'] }}">
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">体重</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <input class="form_group-text_weight" type="text" name="weight" placeholder="50.0" value="{{ $weight['weight'] }}">
              <span class="form_group-text--label">kg</span>
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">摂取カロリー</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <input class="form_group-text_date" type="text" name="calories" placeholder="1200" value="{{ $weight['calories'] }}">
              <span class="form_group-text--label">cal</span>
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">運動時間</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <input class="form_group-text_date" type="time" name="exercise_time" placeholder="00:00" value="{{ $weight['exercise_time'] }}">
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">運動内容</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <textarea class="form_group-text_date" name="exercise_content" placeholder="運動内容を追加" value="{{ $weight['exercise_content'] }}" rows="10" cols="110"></textarea>
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
      </div>
      <div class="form_button">
        <button class="form__button-back" type="button" onClick="history.back()">戻る</button>
        <button class="form__button-submit" type="submit" name="update" value="update">更新</button>
      </div>
      <div class="form_delete">
        <button class="form__button-delete" type="delete" name="delete" value="delete">削除</button>
      </div>
    </form>
  </div>
</main>
@endsection