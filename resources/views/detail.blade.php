@extends('layouts.app')

@section('page.title')
{{ $comic['title'] }}
@endsection

@section('page.main')

@include('partials.detail-top')

@include('partials.detail-bot')
@include('partials.cards-link')

@endsection