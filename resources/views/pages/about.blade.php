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
                <p>...</p>
            </div>
        </div>
    </div>
</div>

@stop