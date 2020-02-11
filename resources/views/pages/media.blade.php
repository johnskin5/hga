@extends('layouts.master')

@section('title')
    Media
@endsection

@include('partials.header')
<section id="header1">
    <div class="container">   
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 headmain text-center">
            <h2>media</h2>
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
            <div class="col-md-9">
                <h2 class="media-head">HOLYGHOST AMBASSADORS MEDIA</h2>
                <p class="media-text">Media department is composed of Audio, visuals, social media and more. If you have a strong love for the Lord and would like to help out in any of these areas please talk to the media coordinator.</p>
                <p class="media-text">Media Unit is one of the major units of the church. In pursuance of the vision of the church. The unit was formed with the sole aim of taking the undiluted word of God preached on the alter to the outside world through the various forms of media publicity with excellence as it watch word.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ URL::to('img/media/media (1).jpg') }}" class="d-block gap20 media-img" alt="PHOTO">                
            </div>            
        </div>
    </div> 
</section>

<section class="media-back">
    <div class="padding gap70">
        <div class="container">
            <h2 class="media-head">MINISTRY DESCRIPTION</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="media-text">The purpose of the media unit here at HolyGhost Ambassadors ministry is to carry the Gospel of Jesus Christ to our visually-driven, ever changing world through the use of technology and media, and to equip other ministries of the church to use digital and electronic media as a worship and outreach tool.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 andy-pad">
                    <p class="media-text">By this we are aiming to enhance the worship experience, communicating with the congregation, extending the congregation beyond the walls of the church, and proliferating the message.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="media-text">This ministry not only provides the technical support required for our worship services, but also records various events, teachings and sermons, which are made available on DVD and for viewing or podcasting on our website and other social media handles.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 andy-pad">
                    <p class="media-text">As a clarion call, any media-related work is taken on with an absolute commitment to quality. Packaging the gospel message in the age of aesthetics requires Christian communicators to be creative, intentional, and to give great attention to details. After all, the message of Jesus Christ is worth our energy and creativity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row gap70"> 
            <div class="col-md-9 text-center media123">
                <h2 class="media-mission gap10">MINISTRY MISSION</h2>
                <p>The ministry’s mission is to glorify God by ensuring that His Word, our praises and songs to Him is seen and heard clearly and without distraction or interference within our local church and throughout the world as it’s broadcasted or distributed on our media platforms with the highest video, audio, graphics and other production quality available.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ URL::to('img/IMG_36151.jpg') }}" class="d-block w-100 rounded-circle media-circle-img" alt="PHOTO">
            </div>
                       
        </div>
    </div> 
</section>

<section class="media-back1 padding">
    <div class="container">
        <div class="row gap70 text-white"> 
            <h3>MINISTRY OUTLINE</h3>
            <p class="media-text">Although this ministry covers the local church’s needs that have to do with audio and visual technology, the most requested and needed functions of the ministry include:</p>                       
            <ul>
                <li>Broadcasting live audio and video to the church and the internet.</li>
                <li>Recording audio and video during regular church services and special events.</li>
                <li>Sales of audio and video tapes to the church members and to the world at large.</li>
                <li>Audio and video editing or recorded services and other special events for archive, broadcast, and production.</li>
                <li>Production, duplication, and distribution of recorded audio and video files to fulfill order requests, sermon messages and other special events.</li>
                <li>Providing audio, video and lighting support for evangelistic outreach and other special events outside of the church building.</li>
                <li>Managing the stage lighting for more excellent production.</li>
                <li>Converting messages into text for our website and social media platform.</li>
                <li>Etc</li>
            </ul>
        </div>
    </div> 
</section>

<section class="media-back">
    <div class="container">          
        <div class="row gap40">  
            <div class="col-md-12 text-center media-crew">
                <h2 class="media-head1">MEDIA CREWS</h2>
                <p class="text-center">The unit, in achieving these Goal is further subdivided into five units;</p>
            </div>                       
        </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="row gap20"> 
            <div>
                <h3 class="media-head">THE TECHNICAL CREW</h3>
                <p>The Technical crew exists for this purpose: to invest ourselves in a ministry that will directly support and reinforce the presentation of Biblical truths that requires the support of lighting, audio, video, sound or any other form of technical support during church services, events as well as stage support. We will strive to do this in a manner that is honouring to our God.</p>     
                <p>The Technical crew strive for technical excellence within the church. We endeavour to understand not only the technical aspects of the equipment but also the environment in which it is used. We will do so in a Christ-like manner.</p> 
                <p>The Technical Team members come from all walks of life and have a very diverse skill set. Our common bond is the desire to create an atmosphere where the church can worship the one true God. We're always looking for members to help serve!</p>                   
            </div>
            <div class="row gap22 media-row"> 
                <div class="col-md-3 unit-icon">
                    <i class="fas fa-video media-icon text-center"></i>
                </div>
                <div class="col-md-9 media123 units">
                    <h6 class="unit-title">1) The Cinematography unit;</h6>
                    <p>Members of this unit comprise of skilled and trained media personnel who are responsible for our graphics, outreach programs, video coverage/editing and all forms of electronic and print media. Read more.</p>
                </div>                
            </div>
            <div class="row gap22 media-row1 media-row-margin"> 
                <div class="col-md-3 unit-icon">
                    <i class="fas fa-bolt media-icon"></i>
                </div>
                <div class="col-md-9 media123 units">
                    <h6 class="unit-title">2) The Lighting unit;</h6>
                    <p>A team of highly skilled professionals that takes care of effective lighting of the church auditorium to give it a highly colorful feel with an excellent touch. </p>
                </div>                
            </div>
        </div>
    </div>
</session>

<section class="media-back gap20">
    <div class="container">
        <div class="row">
            <h3 class="media-head">THE MULTIMEDIA CREW</h3>
            <p>The purpose of the multimedia crew here at HolyGhost Ambassadors is to carry the Gospel of Jesus Christ to our visually-driven, ever-changing world through the use of technology and social media.</p>
            <p>This crew not only provides the technical support required for our worship services, but also records various events, teachings and sermons, which are made available for viewing or podcasting at our website.</p>
            <div class="row gap22 media-row1"> 
                <div class="col-md-3 unit-icon">
                    <i class="fas fa-compact-disc media-icon"></i>
                </div>
                <div class="col-md-9 media123 units">
                    <h6 class="unit-title">3) The Marketing and Print unit;</h6>
                    </p>It is in charge of production of hard copies of messages preached in various formats to both the immediate congregation and the online viewers. They are also in charge of the print media.</p>
                </div>                
            </div>
            <div class="row gap22 media-row media-row-margin"> 
                <div class="col-md-3 unit-icon">
                    <i class="fas fa-desktop media-icon"></i>
                </div>
                <div class="col-md-9 media123 units">
                    <h6 class="unit-title">4) The Graphic unit;</h6>
                    <p>With unique skills in display, the unit sends out graphics both static and motion for various upcoming event and sends daily nuggets of the senior pastor.</p>
                </div>                
            </div>
            <div class="row gap22 media-row1 media-row-margin">
                <div class="col-md-3 unit-icon">
                    <i class="fas fa-laptop-code media-icon"></i>
                </div>
                <div class="col-md-9 media123 units">
                    <h6 class="unit-title">5) The ICT unit;</h6>
                    <p>With high level of Technology skills, these team takes care of the online church, it manages the official social media handles of the church and sends out every effort put together by the other units to the outside world through the social media platforms in view. Read more.</p>
                 </div>
            </div>
        </div>
    </div> 
</section>

<section class="gap20">
    <div class="container">
        <p>These units make up the Media unit and each being headed by the Head of unit with an assistant. The entire Media unit is headed by a Supervisor. </p>
        <p>The units joined together makes a team that comprises of people of different gender focused on achieving the set goal and functions before, during and after services hours. </p>
    </div> 
</section>

<section class="media-back1">
    <div class="padding gap70">
        <div class="container text-white">
            <h2>How Do I Get Involved?</h2>
            <div class="row">
                <p>Do you have a natural gift for electronics, sound or video equipment? Or maybe you just have a strong desire to learn, along with a passion to serve the body of Christ?</p>
                <p>There are many opportunities for you to serve in the Media department. We have well skilled members here to help you learn what you’ll need to know and have fun in the process.</p>
                <p>We are looking for those who desire to continue to learn, who are team players and most of all are committed to do their ministry. It does not mean you have to start out knowing anything about A/V, just have a learning attitude and a willingness to be lead. Intended members will be trained for any specific technological skill or knowledge required for the ministry responsibilities, so the only prerequisite to volunteering is the willingness to learn handling and using technological devices and equipment.</p>
                <p>Roles needed include:</p>
            </div>
                <div class="row gap20"> 
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"> <h4>Video Camera Operators</h4></a>              
                    </div>      
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>Directors</h4></a>      
                    </div>  
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>Audio Engineers</h4></a>          
                    </div>    
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>IMAG (Easy Worship)</h4></a>          
                    </div>                
                </div>
                <div class="row gap20"> 
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"> <h4>Content manager</h4></a>              
                    </div>      
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>Photographer</h4></a>      
                    </div>  
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>Graphic Designers</h4></a>          
                    </div>    
                    <div class="col-md-3 text-center">
                        <a class="btn btn-primary mid" href="#" role="button"><h4>camera persons/ vidoe editor</h4></a>          
                    </div>                
                </div>                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container gap40">
        <p>The Media unit is a family of genuine agape love in practice and it is a pleased to receive any member of the church join in the family.</p>
        <p>We are HolyGhost Ambassadors media team and we are here to amplifier the undiluted word of God through the Media Platform.</p>
        <div>
            <p>There are many opportunities for you to serve in Media unit. Our media team are here to help you learn what you’ll need to know and have fun in the process!  If you would like more information about our media ministry or want to join as a team member, please feel free to contact any of the media team members or contact the Church Secretary.</p>
        </div>
    </div>
</section>