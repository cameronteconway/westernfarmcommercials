@extends('layouts/default')

@section('content')

<div class="container d-none d-lg-block contact-logo py-3">
    <div class="row">
        <div class="col-md-5">
            <p class="nav-contact-detail email"><span>Email:</span> <a href="#">devlin@westonfc.co.uk</a></p>
        </div>
        <div class="col-md-2">
            <a href="{{ url('/') }}"><img src="{{ asset('images/westernfc_logo.svg') }}" alt="Western Farm Commercials Logo"></a>
        </div>
        <div class="col-md-5">
            <p class="nav-contact-detail call"><span>Telephone:</span> <a href="#">078185 09257</a></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-intro">
                <h1>About</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="about-us-detail">
                <p>Founded in October 2020, Western Farm Commercials was constructed to service a range of vehicles from cars through to HGV. The workshops are new and built to the highest specification and include a two bay HGV workshop and 3 bay light vehicle workshop.</p>
                <p>Combining the directors combined 45 years of transport experience, the workshop is located on the western farm site in located 3.5 off the A140 mid way between Diss and Norwich and aims to provide a one stop mechanical service.</p>
                <p>Based at Western Farm we are presently maintaining a fleet of cars, vans, trailers and HGV with our trained mechanics.</p>
                <p>We pride ourselves in our service and welcome the opportunity to look after your fleet.</p>
            </div>
        </div>
    </div>
</div>

@stop