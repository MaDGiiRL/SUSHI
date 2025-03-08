<x-layout title="Menù">
    <div class="container mt-4">
        <div class="row align-items-center">

            <div class="col-8">
                <h2 class="text-black text-center p-5">Menu</h2>
            </div>
            <div class="col-4 pb-5">
                <a href="{{ route('all') }}" class="btn btn-custom mt-3 text-center">View all Menu <i class="bi bi-arrow-right-circle"></i></a>
            </div>


            <div class="row">
                @foreach($menus->take(3) as $menu)
                <div class="col-md-4 mb-3">

                    <!-- card componenets -->
                    <x-card name="{{$menu['name']}}"
                        price="{{$menu['price']}}"
                        ingredients="{{$menu['ingredients']}}"
                        image="{{$menu['image']}}" />
                </div>
                @endforeach
            </div>

        </div>
    </div>
</x-layout>