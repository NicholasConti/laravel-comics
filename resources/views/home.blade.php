@extends('layouts.app')

@section('page.title')
Home
@endsection
@section('page.main')
    <section>
        <div>
                @foreach ($comics as $comic)
                <div class="product">
                   @include('partials.card')
                </div>
                @endforeach
        </div>
        <div class="load">
            <button>LOAD MORE</button>
        </div>
        <div class="merch-bar">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        Digital Comics
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                        DC Merchandise
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                        Subscription
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                        Comic Shop Location
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="small-img" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                        DC Power Visa
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection