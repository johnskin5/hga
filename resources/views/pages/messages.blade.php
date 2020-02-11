@extends('layouts.master')

@section('title')
    Messages
@endsection

@include('partials.header')

<section id="header1">
    <div class="container">   
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 headmain text-center">
            <h2>Messages</h2>
        </div>
        <div class="col-md-4">
           <p><a href="/"></a></p>
        </div>
    </div>
    </div> 
</section>

<section>
    <div class="container padding">
        <div class="message-table-heading text-center gap70">
            messages from apostle nyeneime andy
        </div>
        <div class="table-responsive-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="message-table-head">#</th>
                        <th scope="col" class="message-table-head">message title</th>
                        <th scope="col" class="message-table-head">date</th>
                        <th scope="col" class="message-table-head">text</th>
                        <th scope="col" class="message-table-head">audio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Destiny Helper</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/1">available</a></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>It is my turn to laugh</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/2">available</a></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Dig Your Own Well</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/3">available</a></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Answer me oh Lord</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/4">available</a></td>
                        <td>N/A</td>
                    </tr>
                     <tr>
                        <th scope="row">5</th>
                        <td>Connecting to the Supernatural</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/5">available</a></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Faith in the Future</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/4">available</a></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Covenant keeping God</td>
                        <td>Jan 1st, 2019</td>
                        <td><a href="/4">available</a></td>
                        <td>N/A</td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</section>