    <div class="jumbotron">
        
    </div>
    <div class="bgDark">
        <div class="series">
            CURRENT SERIES
        </div>
        <div class="container">
            <div class="cardContainer">
                @foreach ( $comics as $key => $comic )
                    <div class="box">
                        <a href="{{route('prodotto', ['id' => $key])}}">
                            <img src="{{$comic['thumb']}}" alt="">
                            <div class="description">{{$comic['title']}}</div>
                        </a>
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
    @include('partials.mainNav')