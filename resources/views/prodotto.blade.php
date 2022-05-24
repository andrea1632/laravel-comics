@extends ('layout.layout')
@section('content')
<div class="jumbotron">
        
</div>
<div class="blue-line">
    {{-- {{$comics['title']}} --}}
    <div class="comic-thumb">
        <div class="blue-comic-thumb">COMIC BOOK</div>
        <img src="{{$comics['thumb']}}" alt="">
        <div class="blue-comic-thumb">VIEW GALLERY</div>
    </div>
</div>
<div class="single-comic-content">
    <div class="comic-description">
        <h2 class="text-uppercase">
            {{$comics['title']}}
        </h2>
        <div class="green-line">
            <span style="color:white;">U.S Price: {{$comics['price']}}</span>
            <div class="display-flex">
                <div class="available">
                    AVAILABLE
                </div>
                <div>
                    <h4>Check Availability</h4>
                </div>
            </div>
        </div>
        <p class="comic-text">{{$comics['description']}}</p>
    </div>
    <div>
        <h5 class="text-uppercase">advertiment</h5>
        <div class="imgadv">
            <img src="{{asset('images2/adv.jpg')}}" alt="">            
        </div>
    </div>
</div>
<div class="bottom-content">
    <div class="w-60">
        <div class="w-50">
            <h3 class="padding-bottom border-bottom">
                Talent
            </h3>
            <div class="lists border-bottom">
                <div style="white-space:nowrap;">
                    Art by:
                </div>
                <ul class="list-artist">
                    @foreach ( $comics['artists'] as $artist )  
                    <li>
                        <a href="">{{$artist}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="lists">
                <div style="white-space:nowrap;">
                    Written by:
                </div>
                <ul class="list-artist">
                    @foreach ( $comics['writers'] as $artist )  
                    <li>
                        <a href="">{{$artist}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="w-50">
            <h3 class="padding-bottom border-bottom">
                Specs
            </h3>
            <div>
                <div class="border-bottom">
                    <span>Series:</span>
                    <span>{{$comics['series']}}</span>
                </div>
                <div class="border-bottom">
                    <span>US Price:</span>
                    <span>{{$comics['price']}}</span>
                </div>
                <div class="border-bottom">
                    <span>On Sale Date:</span>
                    <span>{{$comics['sale_date']}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="about-dc">
     
            <div>
            <h5>
                DIGITAL COMICS
            </h5>
                <img src="{{asset('images/cta-icons.png')}}" alt="">
            </div>
    </div>
</div>
@endsection