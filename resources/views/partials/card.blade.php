{{-- CARD ELEMENT --}}

<a href="{{ route('detail', ['index' => $loop->index]) }}">
<div>
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
</div>
<div>
    <h3>{{ $comic['title'] }}</h3>
</div>
</a>