<main>
    
    <div class="jumbotron">
        
    </div>
    <div class="bgDark">
        <div class="series">
            CURRENT SERIES
        </div>
        <div class="container">
            <div class="cardContainer">
                @foreach ( $comics as $comic )
                    <div class="box">
                        <img src="{{$comic['thumb']}}" alt="">
                        <div class="description">{{$comic['title']}}</div>
                    </div>            
                @endforeach
            </div>
            <div class="loadMore">
                
                <div class="loadMoreContent">
                    LOAD MORE
                </div>
            </div>
        </div>
    </div>
</main>