<x-layout title="All Menù">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="row">
                @foreach($menus as $menu)
                <div class="col-6 col-md-4 mb-3">

                    <!-- card componenets -->
                    <x-card name="{{$menu['name']}}"
                        price="{{$menu['price']}}"
                        ingredients="{{$menu['ingredients']}}"
                        image="{{$menu['image']}}" />

                </div>
                @endforeach
            </div>

            <a href="{{ route('menu') }}" class="btn btn-custom mt-3 w-50 text-center">Go Back</a>
        </div>
    </div>
</x-layout>