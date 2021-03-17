<!-- Navbar Desktop -->
<nav class="navbar navbar-desktop fixed-top justify-content-center d-none d-lg-block p-0">
    <div class="container">
        <a class="nav-item nav-link" href="#">HOME</a>
        <a class="nav-item nav-link" href="#">ABOUT</a>
        <a class="nav-item nav-link" href="#">SERVICES</a>
        <a class="nav-item nav-link" href="#">OUR TEAM</a>
        <a class="nav-item nav-link" href="#">CONTACT US</a>
    </div>
</nav>

<div class="container d-none d-lg-block contact-logo mt-5 py-3">
    <div class="row">
        <div class="col-md-5">
            <p class="nav-contact-detail email"><span>Email:</span> <a href="#">devlin@westonfc.co.uk</a></p>
        </div>
        <div class="col-md-2">
            <a href="#"><img src="{{ asset('images/westernfc_logo.svg') }}"></a>
        </div>
        <div class="col-md-5">
            <p class="nav-contact-detail call"><span>Telephone:</span> <a href="#">+4478185 09257</a></p>
        </div>
    </div>
</div>

<!-- Navbar Tablet/Mobile -->
<div class="d-block d-lg-none">
    <nav class="navbar fixed-top navbar-light navbar-mobile">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/westernfc_logo.svg') }}"></a>
            <button id="nav-icon" class="navbar-toggler" type="button" onclick="hamburgerEffect(this)" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="#">Services</a>
                    <a class="nav-item nav-link" href="#">Our Team</a>
                    <a class="nav-item nav-link" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</div>