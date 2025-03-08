<x-layout title="Contact Us">

    <x-header />
    <div class="container mt-5 pt-5 pb-5 mb-5">
        <!-- Form di contatto -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="card p-5">
                <h3 class="text-end pt-1">Contact Us</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="userName" class="form-label text-purple">Name</label>
                            <input type="text" class="form-control custom-search-input" id="userName" name="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label text-purple">Email address</label>
                            <input type="email" class="form-control custom-search-input" id="userEmail" name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="userMessage" class="form-label text-purple">Message</label>
                            <textarea class="form-control custom-textarea" id="userMessage" name="mess" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Mappa -->
            <div class="col-lg-6 align-items-end d-flex justify-content-end flex-column">
                <div class="card p-5 text-white bg-design bg-black">
                    <h3 class="text-purple">Our Location</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24365.81262864251!2d4.902982718047551!3d52.374199089473785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60a8fdab2686f%3A0x81b8a847f6a47c72!2sDam%20Square!5e0!3m2!1sen!2sus!4v1586257016152!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <h3 class="text-end pt-1">Address </h3>

                    <ul class="text-end bg-stars p-3">
                        <li>SMA Editorial Department (Tokyo office)</li>

                        <li>Anime Online Inc.</li>

                        <li>Kichijoji ZIZO bldg. 3F</li>

                        <li>1-9-9 Kichijoji Minami-cho, Musashino city, Tokyo</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-layout>