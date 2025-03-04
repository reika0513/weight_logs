@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
    <div class="weight_heading">
      <div class="weight_heading-target">
        <p class="weight_heading-target--label">目標体重</p>
        <input class="weight_table_description-date" type="target_weight" name="target_weight" value="{{ $target('target_weight') }}" readonly /><!-- 目標体重の変数 -->
        <span class="weight_heading-target--span">kg</span>
      </div>
      <div class="weight_heading-target">
         <p class="weight_heading-target--label">目標まで</p>
        <input class="weight_heading-target--text" type="text" name="target_weight_now" value="" readonly /><!--目標までの変数 -->
        <span class="weight_heading-target--span">kg</span>
      </div>
      <div class="weight_heading-target">
         <p class="weight_heading-target--label">最新体重</p>
        <input class="weight_heading-target--text" type="text" name="weight" value="" readonly /><!-- 最新体重の変数-->
        <span class="weight_heading-target--span">kg</span>
      </div>
    </div>
    <div class="weight_content">
      <div class="weight_content-head">
         <form class="weight_content_search" action="/weight_logs/search">
          @csrf
          <input class="weight_content_search-text" type="date" name="search" placeholder="年/月/日">
          <span>～</span>
          <input class="weight_content_search-text" type="date" name="search" placeholder="年/月/日">
          <button class="weight_content_search-button" type="submit" name="submit">検索</button>
         </form>
         <button class="weight_content_create">
          <a class="weight_content_create-link" href="/weight_logs/store">データ追加</a>
         </button>
      </div>
      <div class="weight_table">
        <table class="weight_table_inner">
          <tr class="weigh_table__row-head">
            <th class="weight_table_date">日付</th>
            <th class="weight_table_weight">体重</th>
            <th class="weight_table_calories">食事摂取カロリー</th>
            <th class="weight_table_time">運動時間</th>
            <th class="weight_table_detail"></th>
          </tr>
          @foreach ($weights as $weight)
          <tr class="weigh_table__row">
            <div class="weigh_table__row-form">
              <form action="/weight_logs/{:weightLogId}" method="post">
                @csrf
                <div class="weigh_table_description">
                  <td class="weight_table_date">
                    <input class="weight_table_description-date" type="date" name="date" value="{{ $weight['date'] }}" readonly /></td>
                  <td class="weight_table_weight">
                    <input class="weight_table_description-weight" type="text" name="weight" value="{{ $weight['weight'] }}" readonly />
                    <span>kg</span>
                  </td>
                  <td class="weight_table_calories">
                    <input class="weight_table_description-calories" type="text" name="calories" value="{{ $weight['calories'] }}" readonly />
                    <span>cal</span>
                  </td>
                  <td class="weight_table_time">
                    <input class="weight_table_description-time" type="time" name="exercise_time" value="{{ $weight['exercise_time'] }}" readonly /></td>
                  <td class="weight_table_detail">
                    <input input type="hidden" name="id" value="{{ $weight['id'] }}">
                    <button class="weigh_table_detail-button" type="submit">詳細</button>
                  </td>
                </div>
              </form>
            </div>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- ページネーション -->
  </div>
</main>
@endsection