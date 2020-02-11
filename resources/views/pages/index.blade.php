@extends('layouts.master')

@section('title')
    HolyGhost Ambassadors
@endsection

@include('partials.header')
@include('partials.carousel')
@include('partials.giving')
@include('partials.video')



<section id="words">
    <div class="container gap70">
        <div class="text-center">
            <h2 class="word-title-main">FROM OUR SENIOR PASTOR</h2>
        </div>
        <div class="row"> 
            <div class="col-md-4 text-center word-sm">
                <div class="word-inside">
                    <img class="word-img rounded-circle mb-3" src="{{ URL::to('img/bible.jpg') }}" alt="photo">
                    <h3 class="word-title">Today's Word</h3>
                    <p>And hath made us kings and priests unto God and His father to him be glory and Dominion for ever and ever. Amen.</p>
                    <p>Rev. 1:6</p>
                </div>                
            </div>      
            <div class="col-md-4 text-center word-sm">
                <div class="word-inside">
                    <img class="word-img rounded-circle mb-3" src="{{ URL::to('img/bible.jpg') }}" alt="photo">
                    <h3 class="word-title">Today's quote</h3>
                    <p> Take Charge, dont allow the devil to cover your year with darkness </p>
                </div>                
            </div>  
            <div class="col-md-4 text-center word-sm">
                <div class="word-inside">
                    <img class="word-img rounded-circle mb-3" src="{{ URL::to('img/bible.jpg') }}" alt="photo">
                    <h3 class="word-title">Prophecy of the day</h3>
                    <p> As joint heir with Christ, you shall dominate over the enemy in Jesus name. </p>
                </div>                
            </div>                    
        </div>
    </div> 
</section>


<section id="UCE">
    <div class="container gap70">
        <div class="text-center">
            <h2 class="uce-title-main gap20">UP COMING EVENTS</h2>
        </div>
        <div class="row"> 
            <div class="col-md-3 text-center uce-sm">
                <div class="uce-inside">
                    <img class="uce-img mb-3" src="{{ URL::to('img/IMG_04021.jpg') }}" alt="photo">
                    <h3 class="uce-title">BREAK THROUGH SERVICE</h3>
                    <hr>
                    <p>Wed. 18th December, 2019</P>
                    <hr>
                    <P>5:30pm - 8:30pm</P>
                    <hr>
                    <P>Apostle Nyeneime andy </p>
                </div>                
            </div>      
            <div class="col-md-3 text-center uce-sm">
                <div class="uce-inside">
                    <img class="uce-img mb-3" src="{{ URL::to('img/IMG_2951.jpg') }}" alt="photo">
                    <h3 class="uce-title">sunday first service</h3>
                    <hr>
                    <p>Sun. 22nd December, 2019</P>
                    <hr>
                    <P>7:45am - 9:00am</P>
                    <hr>
                    <P>Apostle Nyeneime andy </p>
                </div>                
            </div> 
            <div class="col-md-3 text-center uce-sm">
                <div class="uce-inside">
                    <img class="uce-img mb-3" src="{{ URL::to('img/IMG_9245.jpg') }}" alt="photo">
                    <h3 class="uce-title">dominion SERVICE</h3>
                    <hr>
                    <p>Sun. 22nd December, 2019</P>
                    <hr>
                    <P>9:00am - 12:30pm</P>
                    <hr>
                    <P>Apostle Nyeneime andy </p>
                </div>                
            </div>  
            <div class="col-md-3 text-center uce-sm">
                <div class="uce-inside">
                    <img class="uce-img mb-3" src="{{ URL::to('img/christmas-wishes.jpg') }}" alt="photo">
                    <h3 class="uce-title">CHRISTMAS SERVICE</h3>
                    <hr>
                    <p>Wed. 25th November, 2019</P>
                    <hr>
                    <P>9:00am - 12:30pm</P>
                    <hr>
                    <P>Apostle Nyeneime andy </p>
                </div>                
            </div>               
        </div>
    </div> 
</section>

