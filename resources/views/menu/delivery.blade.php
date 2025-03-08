<x-layout title="Get Your Bowl">

    <div class="container py-5 mt-5">
        <h2 class="text-center mb-4  mt-5 pb-5" data-aos="fade-down"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine">Get Your Sushi Bowl </h2>
        <div class="row">
            <div class="col-md-6 form p-5" data-aos="fade-right"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <form method="POST" action="{{route('menu.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control  @error('full_name') is-invalid @enderror" id="name" name="full_name" value="{{old('full_name')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Number</label>
                        <input type="tel" class="form-control  @error('number') is-invalid @enderror" id="number" name="number" value="{{old('number')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Delivery Address</label>
                        <textarea class="form-control  @error('address') is-invalid @enderror" id="address" name="address">{{old('address')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Choose Your Base</label>
                        <select class="form-select  @error('base') is-invalid @enderror" id="base" name="base">
                            <option value="white_rice">White Rice</option>
                            <option value="brown_rice">Brown Rice</option>
                            <option value="quinoa">Quinoa</option>
                            <option value="mixed_greens">Mixed Greens</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Choose Your Protein</label>
                        <select class="form-select  @error('protein') is-invalid @enderror" id="protein" name="protein">
                            <option value="salmon">Salmon</option>
                            <option value="tuna">Tuna</option>
                            <option value="shrimp">Shrimp</option>
                            <option value=beans">Beans</option>
                            <option value="tofu">Tofu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Second Choose</label>
                        <select class="form-select  @error('second_choose') is-invalid @enderror" id="second_choose" name="second_choose">
                            <option value="avocado">Avocado</option>
                            <option value="edamame">Edamame</option>
                            <option value="cucumber">Cucumber</option>
                            <option value="mais">Mais</option>
                            <option value="cherry_tomato">Cherry Tomato</option>
                            <option value="seaweed">Seaweed</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Sauce</label>
                        <select class="form-select  @error('sauce') is-invalid @enderror" id="sauce" name="sauce">
                            <option value="siracha">Siracha</option>
                            <option value="soy">Soy Sauce</option>
                            <option value="tiriyaki">Teriyaki Sauce</option>
                            <option value="mayo">Mayo</option>
                            <option value="philadelphia">Philadephia</option>
                            <option value="oil">Olive Oil</option>
                            <option value="spicy_mayo">Spicy Mayo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Drinks</label>
                        <select class="form-select  @error('drinks') is-invalid @enderror" id="drinks" name="drinks">
                            <option value="water">Water</option>
                            <option value="green_tea">Green Tea</option>
                            <option value="soda">Soda</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Payment Method</label>
                        <select class="form-select  @error('payment') is-invalid @enderror" id="payment" name="payment">
                            <option value="paypal">PayPal</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="cash">Cash on Delivery</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-custom w-100">Place Order</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message')}}
                </div>
                @endif
            </div>
            <div class="col-md-6 guide-lines bg-black text-white bg-design" data-aos="fade-left"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <ul class="py-5 fs-5">

                    <h4 class="text-white">🍚 How to Order Your Poke Bowl</h4>
                    <li>
                        Fill in Your Details
                    </li>
                    <li>
                        Enter your full name, number number, email, and delivery address to ensure a smooth ordering process.
                    </li>

                    <h4 class="pt-2 text-white">🍤 Customize Your Bowl</h4>
                    <li>
                        <strong>Choose Your Base</strong>: Select from white rice, brown rice, quinoa, or mixed greens.
                    </li>
                    <li>
                        <strong>Pick Your Protein</strong>: Options include salmon, tuna, shrimp, or tofu.
                    </li>
                    <li>
                        <strong>Select Toppings</strong>: Choose multiple toppings to enhance your bowl’s flavor.
                    </li>
                    <li>
                        <strong>Add a Drink</strong>: Pick from water, green tea, or soda.
                    </li>

                    <h4 class="pt-2 text-white">🍣 Choose a Payment Method</h4>
                    <li>
                        <strong>Available payment methods</strong>: PayPal, Credit Card, or Cash on Delivery.
                    </li>


                    <h4 class="pt-2 text-white">🥑 Submit Your Order</h4>
                    <li>
                        Click the "Place Order" button to finalize your selection.
                    </li>
                    <li>
                        You will receive a confirmation email with your order details.
                    </li>

                </ul>

                <ul class="border-top">

                    <h4 class="pt-5 text-white">
                        Order Rules & Guidelines
                    </h4>
                    <li>
                        <strong>Toppings Limit</strong>: You can select multiple toppings but keep it balanced!
                    </li>

                    <li>
                        <strong>Delivery Address</strong>: Ensure your address is correct to avoid delivery issues.
                    </li>

                    <li>
                        <strong>Payment Policy</strong>: If you choose cash on delivery, please have the exact amount ready.
                    </li>

                    <li>
                        <strong>Allergies Notice</strong>: If you have food allergies, contact us before ordering.
                    </li>

                </ul>
            </div>
        </div>

        <div class="row mt-5 pt-5">
            <h2 class="p-5">🥢 Orders List</h2>
            @foreach ($deliveries as $delivery)
            <div class="col-6">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-6">
                            <h5>Details</h5>
                            <p><strong>Name:</strong> {{$delivery->full_name}}</p>
                            <p><strong>Phone:</strong> {{$delivery->number}}</p>
                            <p><strong>Email:</strong> {{$delivery->email}}</p>
                            <p><strong>Address:</strong> {{$delivery->address}}</p>
                            <p><strong>Payment Method:</strong> {{$delivery->payment}}</p>
                        </div>
                        <div class="col-6">
                            <h5>Order Summary</h5>
                            <p><strong>Base:</strong> {{$delivery->base}}</p>
                            <p><strong>Protein:</strong> {{$delivery->protein}}</p>
                            <p><strong>Second Choice:</strong> {{$delivery->second_choose}}</p>
                            <p><strong>Sauce:</strong> {{$delivery->sauce}}</p>
                            <p><strong>Drink:</strong> {{$delivery->drinks}}</p>
                        </div>

                        <h6 class="text-center p-3 text-p">Check your email!</h6>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center pt-5">
                <a href="{{route('menu')}}" class="btn btn-pink w-50">Go Back</a>
            </div>
        </div>
    </div>
</x-layout>