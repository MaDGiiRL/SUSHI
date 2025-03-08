<x-layout title="Menù">
    <div class="container mt-4">
        <div class="row">

            <h2 class="text-black text-center p-5">Menu</h2>
            <div class="row">
                @foreach($menus as $menu)
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