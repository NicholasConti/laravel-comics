<div class="talent">
    <div class="cnt-talent">
        <div> 
            <div>
                <h4>Talent</h4>
            </div>
            <div class="lists">
               <div>Art by</div>
               <div>
                {{-- CYCLED ARTISTS IN comics.php  --}}
                @foreach ($comic['artists'] as $artist)
                    <a href="#">{{ $artist }},</a>
                @endforeach
               </div>
            </div>
            <div class="lists">
                <div>Written by</div>
                <div>
                {{-- CYCLED WRITERS IN comics.php  --}}
                 @foreach ($comic['writers'] as $writer)
                     <a href="#">{{ $writer }},</a>
                 @endforeach
                </div>
             </div>
        </div>
        <div>
            <div>
                <h4>Specs</h4>
            </div>
            <div class="lists">
               <div>Series</div>
               <div>
               {{ $comic['series']}}
               </div>
            </div>
            <div class="lists">
                <div>U.S. Price</div>
                <div>
                    {{ $comic['price']}}
                </div>
             </div>
             <div class="lists">
                <div>On Sale Date</div>
                <div>
                    {{ $comic['sale_date']}}
                </div>
             </div>
        </div>
    </div>
</div>