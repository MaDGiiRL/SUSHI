<x-layout>

    <div class="container py-5 mt-5">
        <h2 class="text-center mb-4  mt-5 pb-5" data-aos="fade-down"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine">Get Your Sushi Bowl </h2>
        <div class="row">
            <div class="col-md-6 form p-5" data-aos="fade-right"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Delivery Address</label>
                        <textarea class="form-control" id="location" name="location"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="base" class="form-label">Choose Your Base</label>
                        <select class="form-select" id="base" name="base">
                            <option value="white_rice">White Rice</option>
                            <option value="brown_rice">Brown Rice</option>
                            <option value="quinoa">Quinoa</option>
                            <option value="mixed_greens">Mixed Greens</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="protein" class="form-label">Choose Your Protein</label>
                        <select class="form-select" id="protein" name="protein">
                            <option value="salmon">Salmon</option>
                            <option value="tuna">Tuna</option>
                            <option value="shrimp">Shrimp</option>
                            <option value=beans">Beans</option>
                            <option value="tofu">Tofu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="toppings" class="form-label">Select Second Choose (Max: 4)</label>
                        <select class="form-select" id="second-choose" name="second_choose" multiple>
                            <option value="avocado">Avocado</option>
                            <option value="edamame">Edamame</option>
                            <option value="cucumber">Cucumber</option>
                            <option value="mais">Mais</option>
                            <option value="cherry_tomato">Cherry Tomato</option>
                            <option value="seaweed">Seaweed</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="toppings" class="form-label">Select Salsa (Max: 4)</label>
                        <select class="form-select" id="toppings" name="sauce" multiple>
                            <option value="siracha">Siracha</option>
                            <option value="soy">Soy Sauce</option>
                            <option value="tiriyaki">Teriyaki Sause</option>
                            <option value="mayo">Mayo</option>
                            <option value="philadelphia">Philadephia</option>
                            <option value="oil">Olive Oil</option>
                            <option value="spicy_mayo">Spicy Mayo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="drinks" class="form-label">Drinks</label>
                        <select class="form-select" id="drinks" name="drinks">
                            <option value="water">Water</option>
                            <option value="green_tea">Green Tea</option>
                            <option value="soda">Soda</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="payment" class="form-label">Payment Method</label>
                        <select class="form-select" id="payment" name="payment">
                            <option value="paypal">PayPal</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="cash">Cash on Delivery</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-custom w-100">Place Order</button>
                </form>
            </div>
            <div class="col-md-6 guide-lines" data-aos="fade-left"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <ul class="py-5 fs-5">

                    <h4>🍚 How to Order Your Poke Bowl</h4>
                    <li>
                        Fill in Your Details
                    </li>
                    <li>
                        Enter your full name, phone number, email, and delivery address to ensure a smooth ordering process.
                    </li>

                    <h4 class="pt-5">🍤 Customize Your Bowl</h4>
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

                    <h4 class="pt-5">🍣 Choose a Payment Method</h4>
                    <li>
                        <strong>Available payment methods</strong>: PayPal, Credit Card, or Cash on Delivery.
                    </li>


                    <h4 class="pt-5">🥑 Submit Your Order</h4>
                    <li>
                        Click the "Place Order" button to finalize your selection.
                    </li>
                    <li>
                        You will receive a confirmation email with your order details.
                    </li>

                </ul>

                <ul class="border-top">

                    <h4 class="pt-5">
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
    </div>
</x-layout>