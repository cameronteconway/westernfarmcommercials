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
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>

    <!-- Success -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <!-- Robot Failure -->
    @if(Session::has('robotError'))
        <div class="alert alert-danger">
            {{Session::get('robotError')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('contact.store') }}" class="pb-5">

                @csrf

                <!-- Name field -->
                <div class="form-group">
                    <label for="full-name">Full Name *</label>
                    <input type="text" name="name" class="form-control" id="full-name"  placeholder="Enter full name" value="{{ old('name') }}">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif

                <!-- Email field -->
                <div class="form-group">
                    <label for="email-address">Email address *</label>
                    <input type="email" name="email" class="form-control" id="email-address" placeholder="Enter email" value="{{ old('email') }}">
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                <!-- Phone number field -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
                </div>
                @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif

                <!-- Subject field -->
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="subject" name="subject" class="form-control" id="subject" placeholder="Enter subject of message" value="{{ old('subject') }}">
                </div>
                @if ($errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif

                <!-- Message field -->
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter message" value="{{ old('message') }}"></textarea>
                </div>
                @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif

                <!-- Robot validation field -->
                <div class="form-group">
                    <label for="robotQuestion">What is 3+4 *</label>
                    <input type="text" name="robotQuestion" class="form-control" aria-describedby="robotHelp" id="robotQuestion" placeholder="Enter answer" >
                    <small id="robotHelp" class="form-text text-muted">To reduce spam please enter the correct answer above.</small>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    <div class="row d-block d-lg-none">
        <div class="col-md-12">
            <div class="find-us">
                <h2>Where to find us?</h2>
                <p>Western Farm Commercials, Plantation Road, Aslacton, Norfolk, NR15 2ER</p>
                <p><a href="mailto:devlin@westonfc.co.uk">devlin@westonfc.co.uk</a></p>
                <p><a href="tel:07818509257">078185 09257</a></p>
            </div>
        </div>
    </div>
</div>

@stop