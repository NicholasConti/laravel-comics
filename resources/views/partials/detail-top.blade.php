<div class="poster">
    <div class="cnt-detail">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
</div>
<div class="cnt-detail card-data">
   <div>
        <h2>
            {{ $comic['title'] }}
        </h2>
        <div class="btn-green">
            <div class="btn-green price">
                <div>U.S. Price: <span>{{ $comic['price'] }}</span></div>
                <div>AVAILABLE</div>
            </div>
            <div class="btn-green">
                <span>Check Availability</span> 
            </div>
        </div>
        <p>{{ $comic['description'] }}</p>
   </div>
   <div>
    <h6>ADVERTISMENT</h6>
    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
   </div>
</div>