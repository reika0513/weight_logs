@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/weight_logs">
        PiGly
      </a>
      <div class="header__button">
        <button class="header__button-setting">
          <a href="/wight_logs/goal_setting">
            体重目標設定
          </a>
        </button>
        <button class="header__button-logout">
          <a href="/logout">
            ログアウト
          </a>
        </button>
      </div>
    </div>
</header>

<main>
  <div class="weight">
    <div class="weight_heading">
      <div class="weight_heading-target">
        <p>目標体重</p>
        <input type="text" name="target_weight" value="" readonly /><!-- 目標体重の変数 -->
        <span>kg</span>
      </div>
      <div class="weight_heading-target">
         <p>目標まで</p>
        <input type="text" name="target_weight_now" value="" readonly /><!--目標までの変数 -->
        <span>kg</span>
      </div>
      <div class="weight_heading-target">
         <p>最新体重</p>
        <input type="text" name="weight" value="" readonly /><!-- 最新体重の変数-->
        <span>kg</span>
      </div>
    </div>
    <div class="weight_content">
      <div class="weight_content-head">
         <form class="weight_content_search" action="/weight_logs/search">
          @csrf
          <input type="date" name="search" placeholder="年/月/日">
          <span>～</span>
          <input type="date" name="search" placeholder="年/月/日">
          <button type="submit" name="submit">検索</button>
         </form>
         <button class="weight_content_create">
          <a href="/weight_logs/store">データ追加</a>
         </button>
      </div>
      <div class="weight_table">
        <table class="weight_table_inner">
          <tr class="weigh_table__row">
            <th class="weight_table__header">日付</th>
            <th class="weight_table__header">体重</th>
            <th class="weight_table__header">食事摂取カロリー</th>
            <th class="weight_table__header">運動時間</th>            
          </tr>
          @foreach ($weights as $weight)
          <tr class="weigh_table__row">
            <div class="weigh_table__row-form">
              <form action="/weight_logs/{:weightLogId}" method="post">
                @csrf
                <div class="weigh_table_description">
                  <td><input class="weigh_table_description" type="date" name="date" value="{{ $weight['date'] }}" readonly /></td>
                  <td>
                    <input class="weigh_table_description" type="text" name="weight" value="{{ $weight['weight'] }}" readonly />
                    <span>kg</span>
                  </td>
                  <td>
                    <input class="weigh_table_description" type="text" name="calories" value="{{ $weight['calories'] }}" readonly />
                    <span>cal</span>
                  </td>
                  <td><input class="weigh_table_description" type="time" name="exercise_time" value="{{ $weight['exercise_time'] }}" readonly /></td>
                  <td><input input type="hidden" name="id" value="{{ $weight['id'] }}"></td>
                </div>
                <div class="weigh_table_description-button">
                  <td>
                    <button class="weigh_table_description-detail" type="submit">詳細</button>
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