@if(Route::currentRouteName() == "homepage")
<div class="bg-black mt-5 shadow-custom pb-5">
    <div class="container bg-design" data-aos="fade-up"
        data-aos-offset="500"
        data-aos-easing="ease-in-sine">
        <div class="row justify-content-center text-center bg-stars" data-aos="fade-left"
            data-aos-offset="500"
            data-aos-easing="ease-in-sine">
            <h1 class="text-center" data-aos="fade-down"
                data-aos-offset="500"
                data-aos-easing="ease-in-sine">Sushi Craving</h1>
            <div class="col-6">
                <p class="lead">
                    Craving for some traditional food? How about a Sushi? Sushi Craving produces authentic and fresh Sushi that will certainly entice your tastebuds and satiate your hunger! We always strive to satisfy, order yours now!
                </p>
            </div>
            <div class="row second-row align-items-center" data-aos="fade-right"
                data-aos-offset="500"
                data-aos-easing="ease-in-sine">
                <div class="col-6 pt-4">
                    <a class="btn btn-pink" role="button">Order Now</a>
                </div>
                <div class="col-6 p-5">
                    <p class="text-end">
                        <span class="fw-bold">FOOD TO ENTICE THE TASTEBUDS </span><br>
                        GET YOURSELF SOME AUTHENTHIC SUSHI
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(Route::currentRouteName() == "menu")
<div class=" mt-5 pb-5 menu">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-6 bg-header-menu p-custom" data-aos="fade-down"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <div class="relative-custom">
                    <h1 class="text-center menu pt-5 mt-5">🥢Menù</h1>
                    <p class="small p-5 text-white">
                        Craving for some traditional food? How about a Sushi? Sushi Craving produces authentic and fresh Sushi that will certainly entice your tastebuds and satiate your hunger! We always strive to satisfy, order yours now!<br>

                        <a href="{{ route('all') }}" class="btn btn-pink w-50 mt-5">All Menù</a>

                    </p>
                </div>
            </div>
            <div class="col-6" data-aos="fade-up"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <img src="/images/menuheader.png" class="img-fluid" width="500px">
            </div>
        </div>
    </div>
</div>
@elseif(Route::currentRouteName() == "contact_us")
<div class="container-fluid bg-contact">
    <div class="row">
        <div class="col-12">
            <h1 class="contact">Contact Us</h1>
        </div>
    </div>
</div>
@endif