

<footer class="bg-dark text-light mt-5">
    <div class="container py-4">
        <div class="row">


            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Shaks Barbershop</h5>
                <p class="small">
                    Professional haircuts, grooming, and styling.
                    Walk-ins and appointments welcome.
                </p>
            </div>


            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ url('/services') }}" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="{{ url('/products') }}" class="text-light text-decoration-none">Products</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>


            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">Contact</h6>
                <p class="small mb-1">📍 Beirut, Lebanon</p>
                <p class="small mb-1">📞 +961 70 000 000</p>
                <p class="small mb-0">🕒 Mon – Sat: 10 AM – 9 PM</p>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center small">
            © {{ date('Y') }} Shaks Barbershop. All rights reserved.
            <h6>Created By Oaska</h6>
        </div>
    </div>
</footer>
