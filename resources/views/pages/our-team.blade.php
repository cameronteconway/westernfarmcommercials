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
                <h1>Our Team</h1>
                <p>All our team are highly qualified and extremely capable, boasting over 100 years’ experience they are passionate about their work.</p>
            </div>
        </div>
    </div>

    <div class='row mt-4 our-team-cards'>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/devlin_opt.jpg') }}" alt="Workshop interior.">
                <div class="card-body">
                    <span class="card-title">Devlin</span>
                    <p class="card-text">Workshop Manager</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/kieffer_opt.jpg') }}" alt="Three employees infront of company van.">
                <div class="card-body">
                    <span class="card-title">Kieffer</span>
                    <p class="card-text">Workshop Technician</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/ashley_opt.jpg') }}" alt="Workshop interior.">
                <div class="card-body">
                    <span class="card-title">Ashley</span>
                    <p class="card-text">Workshop Technician</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/daniel_opt.jpg') }}" alt="Workshop interior.">
                <div class="card-body">
                    <span class="card-title">Daniel</span>
                    <p class="card-text">Workshop Technician</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/marc_opt.jpg') }}" alt="Workshop interior.">
                <div class="card-body">
                    <span class="card-title">Marc</span>
                    <p class="card-text">Workshop Technician</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('images/team/gary_opt.jpg') }}" alt="Workshop interior.">
                <div class="card-body">
                    <span class="card-title">Gary</span>
                    <p class="card-text">Workshop Technician</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop