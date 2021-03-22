@extends('layouts/default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-intro">
                <h1>Contact Us</h1>
                <p></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="pb-5">

                @csrf

                <div class="form-group">
                    <label for="full-name">Full Name *</label>
                    <input type="text" name="fullName" class="form-control" id="full-name"  placeholder="Enter full name" required>
                </div>

                <div class="form-group">
                    <label for="email-address">Email address *</label>
                    <input type="email" name="emailAddress" class="form-control" id="email-address" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="comment">Message *</label>
                    <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Enter message" required></textarea>
                </div>

                <div class="form-group">
                    <label for="robotQuestion">What is 3+4 *</label>
                    <input type="text" name="robotQuestion" class="form-control" aria-describedby="robotHelp" id="robotQuestion" placeholder="Enter answer" required>
                    <small id="robotHelp" class="form-text text-muted">To reduce spam please enter the correct answer above.</small>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop