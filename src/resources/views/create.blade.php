@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<main>
  <div class="weight_create_form">
    <div>
      <h1 class="weight_create_header">Weight Logを追加</h1>
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
              <input class="form_group-text_date" type="date" name="date" value="{{ old('date') }}">
            </div>
            <div class="form_error">
              @error('date')
                {{ $message }} 
              @enderror
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
              <input class="form_group-text_weight" type="text" name="weight" placeholder="50.0" value="{{ old('weight') }}">
              <p class="form_group-text--label">kg</p>
            </div>
            <div class="form_error">
              @error('weight')
                {{ $message }} 
              @enderror
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
              <input class="form_group-text_calories" type="text" name="calories" placeholder="1200" value="{{ old('calories') }}">
              <p class="form_group-text--label">cal</p>
            </div>
            <div class="form_error">
              @error('calories')
                {{ $message }} 
              @enderror
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
              <input class="form_group-text_time" type="time" name="exercise_time" placeholder="00:00" value="{{ old('exercise_time') }}">
            </div>
            <div class="form_error">
              @error('exercise_time')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form_group">
          <div class="form_group-title">
            <span class="form_label--item">運動内容</span>
          </div>
          <div class="form_group-content">
            <div class="form_group-text">
              <textarea class="form_group-text_content" name="exercise_content" placeholder="運動内容を追加" rows="12" cols="100" value="{{ old('exercise_content') }}"></textarea>
            </div>
            <div class="form_error">
              @error('exercise_content')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div>
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        </div>
      </div>
      <div class="form_button">
        <button class="form_button-back" type="button" onClick="history.back()">戻る</button>
        <button class="form_button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</main>
@endsection
