<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<x-layout>

    <!-- HERO SECTION -->
    <section class="bg-dark text-light py-5">
        <div class="container text-center">
            <h1 class="fw-bold display-5">Shaks Barbershop</h1>
            <p class="lead mt-3">
                More than a haircut. It's a style.
            </p>

            <a href="{{ route('login.view') }}" class="btn btn-outline-light mt-3">
                Book Your Cut
            </a>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 mb-3">
                    <h2 class="fw-bold">Who We Are</h2>
                    <p class="text-muted">
                        At Shaks Barbershop, we blend classic techniques with modern
                        style. Whether you want a clean fade, a sharp beard, or a
                        full transformation — we’ve got you covered.
                    </p>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="p-4 border rounded bg-light">
                        <ul class="list-unstyled mb-0">
                            <li>✂️ Precision Haircuts</li>
                            <li>🧔 Beard Grooming</li>
                            <li>💈 Modern & Classic Styles</li>
                            <li>🕒 Walk-ins Welcome</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICES PREVIEW -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Our Services</h2>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Classic Haircut</h5>
                            <p class="text-muted small">
                                Clean, sharp, and timeless.
                            </p>
                            <p class="fw-semibold">20$</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Fade & Style</h5>
                            <p class="text-muted small">
                                Modern fades with perfect finishing.
                            </p>
                            <p class="fw-semibold">25$</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Beard Grooming</h5>
                            <p class="text-muted small">
                                Shape, trim, and define your beard.
                            </p>
                            <p class="fw-semibold">15$</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/services" class="btn btn-dark mt-4">
                View Full Price List
            </a>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">Ready for a Fresh Look?</h2>
            <p class="text-muted">
                Create an account and book your next visit.
            </p>

            <a href="{{ route('registration.view') }}" class="btn btn-primary">
                Get Started
            </a>
        </div>
    </section>

</x-layout>


