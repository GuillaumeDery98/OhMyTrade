@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
<div class="text-xl inline-flex items-center">
    <span class="pr-2">{{ ucfirst(__('symbols')) }}</span>
    <symbol-form-modal :labels={{ json_encode([ 'symbols_form_title'=> ucfirst(__('symbols.form.title')),
        'symbols_form_name'=> ucfirst(__('symbols.form.name')),
        'symbols_form_tv_symbol'=> ucfirst(__('symbols.form.tv_symbol')),
        'symbols_form_tv_indicators'=> ucfirst(__('symbols.form.tv_indicators')),
        'symbols_form_twitter'=> ucfirst(__('symbols.form.twitter')),
        'symbols_form_news'=> ucfirst(__('symbols.form.news')),
        ]) }}></symbol-form-modal>
</div>
@endsection