<x-layout>

    <!-- HERO -->
    <section class="bg-dark text-light text-center py-5">
        <div class="container">
            <h1 class="fw-bold display-4">Shaks Barbershop</h1>
            <p class="lead mt-3">
                Fresh cuts. Clean fades. Real style.
            </p>

            <div class="mt-4">
                <a href="{{ route('registration.view') }}" class="btn btn-primary me-2">
                    Get Started
                </a>
                <a href="{{ route('login.view') }}" class="btn btn-outline-light">
                    Sign In
                </a>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Why Shaks?</h2>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">✂️ Precision</h5>
                    <p class="text-muted small">
                        Every cut is crafted with attention to detail.
                    </p>
                </div>

                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">💈 Experience</h5>
                    <p class="text-muted small">
                        Classic barber skills blended with modern styles.
                    </p>
                </div>

                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">🕒 Convenience</h5>
                    <p class="text-muted small">
                        Walk-ins welcome. Appointments coming soon.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES PREVIEW -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Popular Services</h2>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Classic Haircut</h5>
                            <p class="text-muted small">
                                Clean and timeless.
                            </p>
                            <p class="fw-semibold">$20</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Fade & Style</h5>
                            <p class="text-muted small">
                                Sharp fades with modern finish.
                            </p>
                            <p class="fw-semibold">$25</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Beard Grooming</h5>
                            <p class="text-muted small">
                                Clean lines, perfect shape.
                            </p>
                            <p class="fw-semibold">$15</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/services" class="btn btn-dark mt-4">
                View All Services
            </a>
        </div>
    </section>

    <!-- LOCATION -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">Visit Us</h2>
            <p class="text-muted">
                📍 Beirut, Lebanon<br>
                🕒 Mon - Sat: 10 AM - 9 PM
            </p>
        </div>
    </section>

</x-layout>
