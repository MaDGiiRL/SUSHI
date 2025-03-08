<x-layout title="Menù">

    <x-header />

    <div class="container mt-4">
        <div class="row justify-content-center">
            @foreach($menus->take(3) as $menu)
            <div class="col-12 col-md-4 mb-3" data-aos="fade-left"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <!-- card componenets -->
                <x-card name="{{$menu['name']}}"
                    price="{{$menu['price']}}"
                    ingredients="{{$menu['ingredients']}}"
                    image="{{$menu['image']}}" />
            </div>
            @endforeach

            <div class="col-12 mt-5 text-center" data-aos="fade-down"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <a href="{{route('menu.delivery')}}"  class="mt-5 btn-pink btn fs-1 p-3">
                Get Your Sushi Bowl 🍚
                </a>
            </div>
        </div>

    </div>

    <x-promo />
    
    <x-newsletter />

</x-layout>