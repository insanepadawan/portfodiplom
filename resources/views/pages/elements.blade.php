@extends('layouts.theme')

@section('content')
    <h1>Index Page</h1>

    <input type="text" rel="phone">
    <input type="text" rel="sms">
    <br><br>
    <br><br>
    <form action="{{ url('/bill') }}" method="post" class="dropzone" id="bill-form"></form>
    <br><br>

    <form action="{{ url('/') }}" id="loginForm" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="login_phone"
                   rel="phone"
                   data-rule-required="true"
                   data-msg-required="Поле обязательно к заполнению"
                   placeholder="Номер телефона">
        </div>
        <div class="form-group">
            <input type="text" name="login_sms"
                data-rule-required="true"
                data-msg-required="Поле обязательно к заполнению">
        </div>
        <div class="form-group">
            <button type="submit" class="disabled" id="loginButton">Submit</button>
        </div>
    </form>

    <br><br>

    <div class="table">
        <div class="thead">
            <div class="th momental selected">{!! __('Моментальные призы') !!}</div>
            <div class="th weekly">{!! __('Еженедельные призы (для таблицы)') !!}</div>
        </div>
        <div class="sub-thead">
            <div class="th">{!! __('Дата') !!}</div>
            <div class="th">{!! __('Телефон') !!}</div>
            <div class="th">{!! __('Приз') !!}</div>
        </div>
        <div class="tbody">
            @include('partials.table')
        </div>

    </div>
@stop

@push('css')
    <style type="text/css">
        .disabled {
            pointer-events: none;
            opacity: .5;
        }
    </style>
@endpush
