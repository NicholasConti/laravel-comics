@extends('layouts.app')

@section('page.title')
{{ $comic['title'] }}
@endsection

@section('page.main')
<div class="poster">
    <div class="cnt-detail">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
</div>
<div class="cnt-detail">
   
</div>
@endsection