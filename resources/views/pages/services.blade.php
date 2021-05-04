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
                <h1>Services</h1>
                <p>We are qualified to provide a range of services for Class IV and VII Vehicles.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="service-details">
                <ul>
                    <li>Specialists in fleet maintenance contracts.</li>
                    <li>Provide Full Maintenance Programs.</li>
                    <li>MOT Preparation and Presentation.</li>
                    <li>Inspections and Servicing of trailers, commercial vehicles and Tractor Units.</li>
                    <li>Brake Rolling Test Facilities.</li>
                    <li>24/7 Call out and Vehicle Recovery Services.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-sm-6  col-md-3 mb-3">
            <img class="services-images" src="{{ asset('images/services/service_1_opt.jpg') }}" alt="Van suspended above the ground for service to be carried out">
        </div>

        <div class="col-12 col-sm-6  col-md-3 mb-3">
            <img class="services-images" src="{{ asset('images/services/service_2_opt.jpg') }}" alt="Team member servicing a vehicle">
        </div>

        <div class="col-12 col-sm-6  col-md-3 mb-3">
            <img class="services-images" src="{{ asset('images/services/service_3_opt.jpg') }}" alt="Van suspended above the ground with bonnet open and front wheels removed">
        </div>

        <div class="col-12 col-sm-6  col-md-3 mb-3">
            <img class="services-images" src="{{ asset('images/services/service_4_opt.jpg') }}" alt="Team member carrying out service under a lorry">
        </div>
    </div>
</div>



@stop