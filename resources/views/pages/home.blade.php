@extends('layouts/default')

@section('content')

<!-- Banner -->
<div class="banner-section">
    <div class="banner-img" style="background-image: linear-gradient(to bottom, rgba(244, 101, 35, 0.5), rgba(244, 101, 35, 0.5)), url('{{ asset('images/wfc_banner_opt.jpg') }}');">
        <div class="container">
            <div class="slogan">
                <h2>Where spanner's fly</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Detail Cards -->
    <div class='row mt-4 homepage-cards'>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/about_opt.jpeg') }}" alt="Workshop interior">
                <div class="card-body">
                    <h4 class="card-title">Who we are</h4>
                    <p class="card-text">Learn more about Western Farm Commercials, a fledgling company with strong aspirations.</p>
                    <a href="{{ url('about') }}" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/our_team_opt.jpeg') }}" alt="Three employees infront of company van">
                <div class="card-body">
                    <h4 class="card-title">Our Team</h4>
                    <p class="card-text">Boasting over 100 years of combined experience no job is too small for our dedicated team of Workshop Technicians.</p>
                    <a href="{{ url('our-team') }}" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/services_opt.jpeg') }}" alt="Workshop interior">
                <div class="card-body">
                    <h4 class="card-title">Services</h4>
                    <p class="card-text">Here at Western Farm we proved a range of services.</p>
                    <a href="{{ url('services') }}" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>
    </div>

</div>

@stop