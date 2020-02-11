@extends('layouts.master')

@section('title')
    Pastors
@endsection

@include('partials.header')

<section id="header1">
    <div class="container">   
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 headmain text-center">
            <h2>apostle nyeneime andy</h2>
        </div>
        <div class="col-md-4">
           <p><a href="/"></a></p>
        </div>
    </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="row gap70"> 
            <div class="col-md-4">
                <img src="{{ URL::to('img/IMG_36151.jpg') }}" class="d-block w-100 rounded-circle andy-circle" alt="PHOTO">
            </div> 
            <div class="col-md-8 text-center gap40 apostle123">
                <h2 class="about-ana gap20">About Apostle Nyeneime Andy</h2>
                <p>APOSTLE NYENEIME ANDY is the senior pastor of HolyGhost Ambassadors Ministry, a fast growing church in the city of Uyo.
                    He is a Prophet, an international evangelist, a mentor, caring leader and a great teacher of the Word and most importantly, a team player with a strong passion for reaching the lost.</p>
            </div>
                       
        </div>
    </div> 
</section>



<section class="andy2">
    <div class="padding gap70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>

                    </h4>
                    <p>
                        He is a dynamic apostle with a strong prophetic gift. He has traveled extensively to preach the gospel in many country like the USA, South Africa, India, Ethiopia, Ghana etc.
                        He is happily married to His beautiful wife and a gospel singer Pastor Peace Andy.  He is a father to a son Minister Testimony.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 andy-pad">
                    <img class="andy-img"src="{{ URL::to('img/P/A2.jpg') }}">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p>
                        He has a heart for the people that can only be explained by the presence of the Holy Spirit in his life. He earnestly desires to share that power with you to see the transformation of your home, your community, and your world. He earnestly desires to inspire you to arrive at those new heights with him.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 andy-pad">
                    <img class="andy-img"src="{{ URL::to('img/P/A1.jpg') }}">
                </div>
            </div>
        </div>
    </div>

</section>

<div id="fixed">
</div>

<section>
    <div class="padding gap70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>
                    An author, a conference speaker and a motivator; Apostle Nyeneime Andy is one of the most respected and sought after ministers of the gospel in Nigeria. He is well-known for his clear messages of hope, deliverance and empowerment.
                    </p>
                    <p>
                    Apostle Andy is the founder and Senior pastor of HolyGhost Ambassadors Ministry International, with headquarters in Uyo, Akwa Ibom State. He leads a vibrant, multi-ethnic congregation. He is the National President of Youth Wing Christian Association of Nigeria (YOWICAN).
                    </p>
                    <p>
                    He is the current national PFN youth secretary, immediate past state PFN youth president, past South south director of women and youth CAN
                    </p>
                    <p>
                    postle Andy lives in Uyo with his wife, Pastor Mrs. Peace Andy and their son, Testimony.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img class="andy1-img  mb-3"src="{{ URL::to('img/IMG_29071.jpg') }}">
                </div>
            </div>
        </div>
    </div>

</section>






