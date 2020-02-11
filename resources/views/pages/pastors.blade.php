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
            <h2>ABOUT OUR PASTORS</h2>
        </div>
        <div class="col-md-4">
           <p><a href="/"></a></p>
        </div>
    </div>
    </div> 
</section>



<section class="pst">
    <div class="container">
        <div class="row gap70 pst-padding">
            <div class="col-md-5 pst-inner gap70 text-center pst-box"> 
                <img class="home" src="{{ URL::to('img/pa6.png') }}">
                <h3 class="pst-title">Apostle nyeneime andy</h3>                
                <p class="pst-p"> He is the senior pastor of HolyGhost Ambassadors Ministry, a fast growing church in the city of Uyo.
                He is a Prophet, an international evangelist, a mentor, a caring leader and a great teacher of the Word and most importantly, a team player with a strong passion for reaching the lost.
                He is a dynamic apostle with a strong prophetic gift. </p>
                <p class="pst-p">He has traveled extensively to preach the gospel in many country like the USA, South Africa, India, Ethiopia, Ghana etc. He is happily married to His beautiful wife and a gospel singer Pastor Peace Andy. He is a father to a son Minister Testimony.<br><a class="btn btn-primary" href="/apostle" role="button">Read More</a></p>
                    
            </div>   
            <div class="col-md-5 pst-inner gap70 text-center pst-box"> 
                <img class="home" src="{{ URL::to('img/ma3.png') }}">
                <h3 class="pst-title">pst. mrs. peace andy</h3>                
                <p class="pst-p"> Pst(Mrs). Peace Andy, Co senior pastor of HGA , is so passionate and enthusiastic about the things of God, taking the gospel to the unreached and drawing people into a closer walk with God. She shares in her husbands passion for National Transformation and loving Gods people unconditionally. She has a burning desire to see women rise up to be who they are designed to be, and many women who have been privileged to sit under her counsel have been transformed in all areas of their lives. 
Pst Peace is a model and a mentor to various women (both nationally and internationally) who is passionate about fulfilling purpose in life and as well keep their families intact. She believes in the importance of a well balanced life and models same by being the humble, God fearing, peaceful, affectionate, supportive wife and a loving mother to all. She is blessed in all ramification and is indeed a blessing to the body of Christ.</p>                                  
            </div>        
        </div>
    </div> 
</section>

<section id="pst-others">
    <div class="container gap70">
        <div class="pst-other-main text-center gap20">
            <h2>OTHER PASTORS</h2>
        </div>
        <div class="row gap20"> 
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P7.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. itanka ndefreke</h3>
                    
                    <hr>
                    <P class="office">Resident Pastor</P>
                    <hr>
                    <P>Whatsoever seed you sow in life is what you will reap </p>
                    </div>                
            </div>      
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P2.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. edidiong akpan</h3>
                    
                    <hr>
                    <P class="office1">Pastor in charge of</p>
                    <p class="office">Foundation Class</P>
                    <hr>
                    <P>there is a supernatural hand that controls the affairs of men</p>
                    </div>                
            </div>  
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P6.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. richard eyo-udo</h3>
                    
                    <hr>
                    <P class="office">Service Manager</P>
                    <hr>
                    <P>do unto others what you want them to do to you </p>
                    </div>                
            </div>  
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P4.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. ndomson otobong joseph</h3>
                    
                    <hr>
                    <P class="office1">pastor in charge of</p>
                    <p class="office">media</P>
                    <hr>
                    <P>association in life is not about socialization. rather it is about destination </p>
                    </div>                
            </div>                  
        </div>
        <div class="row gap20"> 
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P1.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. sylvia ekong</h3>
                    
                    <hr>
                    <P class="office1">Pastor in charge of</p>
                    <p class="office">welfare unit</P>
                    <hr>
                    <P>be sincere and purposeful</p>
                    </div>                
            </div>      
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P5.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. samuel issachar</h3>
                    
                    <hr>
                    <P class="office1">Pastor in charge of</p>
                    <p class="office">instruments & protocol</P>
                    <hr>
                    <P>loyalty pays</p>
                    </div>                
            </div>  
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P9.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. patricia umondia</h3>
                    
                    <hr>
                    <P class="office1">head of department</P>
                    <p class="office">women's department</p>
                    <hr>
                    <P>care for the needy with God's ?? </p>
                    </div>                
            </div>  
            <div class="col-md-3 text-center pst-box-1">
                <div class="pst-inside">
                    <img class="pst-img mb-3" src="{{ URL::to('img/P/P10.jpg') }}" alt="photo">
                    <h3 class="pastor-title">pst. debora akpan</h3>
                    
                    <hr>
                    <P class="office1"></p>
                    <p class="office"></P>
                    <hr>
                    <P>I've got something more than gold </p>
                    </div>                
            </div>                  
        </div>
    </div> 
</section>


