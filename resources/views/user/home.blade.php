<x-layout>

    <!-- USER HEADER -->
    <section class="bg-light py-4 border-bottom">
        <div class="container">
            <h1 class="fw-bold mb-1">
                Welcome, {{ auth()->user()->name ?? 'User' }}
            </h1>
            <p class="text-muted mb-0">
                Manage your profile and upcoming visits.
            </p>
        </div>
    </section>

    <!-- QUICK ACTIONS -->
    <section class="py-5">
        <div class="container">

            <h3 class="fw-bold mb-4">Your Actions</h3>

            <div class="row">

                <!-- Book Appointment -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Book Appointment</h5>
                            <p class="text-muted small">
                                Choose a service and book your next visit.
                            </p>
                            <a href="#" class="btn btn-sm btn-dark">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- View Services -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Our Services</h5>
                            <p class="text-muted small">
                                Explore haircut and grooming services.
                            </p>
                            <a href="/services" class="btn btn-sm btn-outline-dark">
                                View Services
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold">Products</h5>
                            <p class="text-muted small">
                                Browse our hair and beard care products.
                            </p>
                            <a href="/products" class="btn btn-sm btn-outline-dark">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- USER INFO -->
    <section class="bg-light py-4">
        <div class="container">
            <h4 class="fw-bold mb-3">Your Information</h4>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <strong>Name:</strong>
                    {{ auth()->user()->name ?? '-' }}
                </div>

                <div class="col-md-6 mb-2">
                    <strong>Email:</strong>
                    {{ auth()->user()->email ?? '-' }}
                </div>

                <div class="col-md-6 mb-2">
                    <strong>Phone:</strong>
                    {{ auth()->user()->phone_number ?? '-' }}
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING FEATURES -->
    <section class="py-5 text-center">
        <div class="container">
            <h4 class="fw-bold">Coming Soon</h4>
            <p class="text-muted">
                Appointment history • Online payments • Notifications
            </p>
        </div>
    </section>

</x-layout>
