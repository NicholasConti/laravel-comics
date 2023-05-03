@extends('layouts.app');

@section('page.title')
Home
@endsection
@section('page.main')
    <section>
        <div>
                @foreach ($comics as $comic)
                <div class="product">
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <div>
                        <h3>{{ $comic['title'] }}</h3>
                    </div>
                </div>
                @endforeach
        </div>
        <div class="load">
            <button>LOAD MORE</button>
        </div>
    </section>
@endsection