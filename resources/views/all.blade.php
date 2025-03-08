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

            <div class="col-12 text-center pt-5">
                <a href="{{route('menu')}}" class="btn btn-pink w-50">Go Back</a>
            </div>
        </div>
    </div>
</x-layout>