<div class="wrap">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="circle-container">
                <div class="circle">
                    <div class="logo"></div>
                    <div class="text">
                        <p>
                            OH SUSHI! - GET INTO THE FUSHION
                        </p>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active {{Route::currentRouteName() == 'homepage' ? 'fw-bold' : ''}}" href="{{route('homepage')}}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link  {{Route::currentRouteName() == 'menu.delivery' ? 'fw-bold' : ''}}" href="{{route('menu.delivery')}}">MENU</a></li>
                    <li class="nav-item"><a class="nav-link {{Route::currentRouteName() == 'contact_us' ? 'fw-bold' : ''}}" href="{{route('contact_us')}}">CONTACT US</a></li>
                </ul>
                <button class="btn btn-outline-dark me-3">Log In</button>
                <button class="btn btn-custom">Sign Up</button>
            </div>

        </div>
    </nav>
</div>

<script>

</script>