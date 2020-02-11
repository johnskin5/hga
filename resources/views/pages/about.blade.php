@extends('layouts.master')

@section('title')
    About Us
@endsection

@include('partials.header')

<section id="header1">
    <div class="container">   
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 headmain text-center">
            <h2>About Us</h2>
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
            <div class="col-md-8">
                <h2 class="about-head">About HolyGhost Ambassadors</h2>
                <p class="about-text">Holy Ghost Ambassadors is an international ministry with cooperate headquarters at No. 8 Ekpanya Street in Uyo, Akwa Ibom State. Her world-class Church worship facility and workers provide an unrivalled Christian Community.</p>
                    <p class="about-text">Since her foundation, the ministry has been regarded as an international Centre of Christian excellence and Innovation.  Through an apostolic anointing of the Holy Spirit and the Word of God, the leadership of the ministry has in the past few years designed and carved a path for many to reach their destiny by teaching time-tested principles from the Word of God, hence, changing the lives and perspectives of many.</p>
                    <p class="about-text">The name of the Church is HOLY GHOST AMBASSADORS MINISTRY INTERNATIONAL AKA The City of God and is gotten from Acts 13: 2 – 4 and 2 Cor. 5: 20. It was founded in MARCH 2004 and is located at No. 8 Ekpanya Str. Uyo, Akwa Ibom State.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ URL::to('img/pa3.png') }}" class="d-block gap20 aha-img" alt="PHOTO">                
            </div>            
        </div>
    </div> 
</section>

<section id="vmp">
    <div class="container gap70">
        <div class="row"> 
            <div class="col-md-4 text-center vmp-box">
                <div class="vmp-inside">
                    <h3 class="vmp-title">VISION</h3>
                    <p>Soaring men to greater heights through excellence and the teaching of the gospel of our Lord Jesus with the demonstration of the power of the Holy Ghost.</p>
                </div>                
            </div>      
            <div class="col-md-4 text-center vmp-box">
                <div class="vmp-inside">
                    <h3 class="vmp-title">MISSION</h3>
                    <p>To reach out to the unreached in obedience to the great commission and to bring them to the place of discipleship.</p>
                </div>                
            </div>  
            <div class="col-md-4 text-center vmp-box">
                <div class="vmp-inside">
                    <h3 class="vmp-title">PURPOSE</h3>
                    <p>To bring people to Jesus and membership in His family, develop them to Christ-like maturity and equip them for their ministry in the Church and their mission in the world in order to magnify God’s name. </p>
                </div>                
            </div>                    
        </div>
    </div> 
</section>

<section class="creed">
    <div class="container">
        <div class="row gap70">
            <div class="col-md-5 creed-inner gap70 text-center creed-box"> 
                <h3 class="creed-title">BREAKDOWN OF OUR PURPOSE</h3>                
                <p class="creed-p"> - We bring them in as members</p>
                <p class="creed-p"> - We build them up to maturity</p>
                <p class="creed-p"> - We train them for ministry</p>
                <p class="creed-p"> - We send them out for missions</p>
                    
            </div>   
            <div class="col-md-5 creed-inner gap70 text-center creed-box"> 
                <h3 class="creed-title">CHURCH CREED</h3>                
                <p class="creed-p"> I am an ambassador, created to be the head and not the tail, above and not beneath.</p>
                <p class="creed-p"> As a champion,i am positioned to serve God in humility, honesty and loyalty.</p>
                <p class="creed-p"> Soul winning is my top priority,i am an ambassador, soaring to greater heights.</p>                                   
            </div>        
        </div>
    </div> 
</section>

<section class="leadhero">
    <div class="container padding">
        <div class="container">
            <div class="row"> 
                <div class="leadhero-h">
                    <h2 class="about-head">leadhero</h2>
                    <p>LEADHERO is the acronym of our core values which stands for:</p>
                </div>                           
            </div>
        </div> 
        <div class="row">
            <div class="col-md-3 leadhero-inner gap20 text-center leadhero-box"> 
                    <h3 class="leadhero-title">LEAD</h3>                
                   <p class="leadhero-p"> leadership</p>
                   <p class="leadhero-i">DEVELOPMENT: we are comitted to identify, equip and release people to exercise godly influence in life for the glory of God and the advancement of His kingdom. we focus on leadership character, qualities, virtues, tenets and ethical principles.</p>
                   <p class="leadhero-p"> -2Tim 2:2</p>                   
            </div>   
            <div class="col-md-3 leadhero-inner gap20 text-center leadhero-box"> 
                    <h3 class="leadhero-title">H</h3>                
                   <p class="leadhero-p">  holiness </p>
                   <p class="leadhero-i">this is the focus of each member. we strive to obey all of God's commandments and applied principles of Jesus and follow the teaching of the Holy Ghost in our daily lives.</p>
                   <p class="leadhero-p"> 1 Peter 1:13 - 16</p>                                  
            </div>  
            <div class="col-md-3 leadhero-inner gap20 text-center leadhero-box"> 
                    <h3 class="leadhero-title">E</h3>                
                   <p class="leadhero-p"> excellence </p>
                   <p class="leadhero-i">we are committed to pursuing excellence in our administration through skillful steawardship of our talent, time, facilities, finances and all our resources entrusted to us by God and His people by every level of the church.</p>
                   <p class="leadhero-p">Dan. 6:3</p>                  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 leadhero-inner gap20 text-center leadhero-box"> 
                    <h3 class="leadhero-title">R</h3>                
                   <p class="leadhero-p">  relationship </p>
                   <p class="leadhero-i">we are committed to build a relation of worshipppers who are led by the holy spirit to glorify God, where people are celebrated. we enjoy love, care in a warm atmosphere of family relationship.</p>
                   <p class="leadhero-p"> Heb 10:24-25</p>                   
            </div> 
            <div class="col-md-3 leadhero-inner gap20 text-center leadhero-box"> 
                    <h3 class="leadhero-title">O</h3>                
                   <p class="leadhero-p">   outreach </p>
                   <p class="leadhero-i">we are commanded to reach every nation of the world with the gospel of christ through envagelism that is conducted with a compassionate people and equip our members to be withness for christ, and the church planting.</p>
                   <p class="leadhero-p"> matt 28:18-20 </p>                   
            </div>                  
        </div>
    </div> 
</section>







 
