@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<main>
  <div class="weight_create_form">
    <div class="weight_create_header">
      <h1>Weight Logを追加</h1>
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
              <input class="form_group-text_date" type="date" name="date">
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
              <input class="form_group-text_weight" type="text" name="weight" placeholder="50.0">
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
              <input class="form_group-text_date" type="text" name="calories" placeholder="1200">
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
              <input class="form_group-text_date" type="time" name="exercise_time" placeholder="00:00">
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
              <textarea class="form_group-text_date" name="exercise_content" placeholder="運動内容を追加" rows="10" cols="110"></textarea>
            </div>
            <div class="form_error">
              <!-- エラーメッセージ -->
            </div>
          </div>
        </div>
      </div>
      <div class="form_button">
        <button class="form__button-back" type="button" onClick="history.back()">戻る</button>
        <button class="form__button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</main>
@endsection