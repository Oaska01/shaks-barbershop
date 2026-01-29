    <x-layout>

        <!-- ADMIN HEADER -->
        <section class="bg-dark text-light py-4">
            <div class="container">
                <h1 class="fw-bold mb-1">Admin Dashboard</h1>
                <p class="mb-0 text-muted">
                    Manage services, products, and users.
                </p>
            </div>
        </section>

        <!-- QUICK ACTIONS -->
        <section class="py-5">
            <div class="container">

                <h3 class="fw-bold mb-4">Quick Actions</h3>

                <div class="row">

                    <!-- Manage Services -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="fw-bold">Services</h5>
                                <p class="text-muted small">
                                    Add, edit, or remove haircut and grooming services.
                                </p>
                                <a href="/admin/services" class="btn btn-sm btn-dark">
                                    Manage Services
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Manage Products -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="fw-bold">Products</h5>
                                <p class="text-muted small">
                                    Control pricing and availability of products.
                                </p>
                                <a href="/admin/products" class="btn btn-sm btn-dark">
                                    Manage Products
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Manage Users -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="fw-bold">Users</h5>
                                <p class="text-muted small">
                                    View registered users and their activity.
                                </p>
                                <a href="{{ route('admin.users') }}" class="btn btn-sm btn-dark">
                                    Manage Users
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- STATS STRIP (STATIC FOR NOW) -->
        <section class="bg-light py-4 border-top border-bottom">
            <div class="container">
                <div class="row text-center">

                    <div class="col-md-4 mb-2">
                        <h4 class="fw-bold">12</h4>
                        <p class="text-muted small mb-0">Active Services</p>
                    </div>

                    <div class="col-md-4 mb-2">
                        <h4 class="fw-bold">28</h4>
                        <p class="text-muted small mb-0">Products</p>
                    </div>

                    <div class="col-md-4 mb-2">
                        <h4 class="fw-bold">156</h4>
                        <p class="text-muted small mb-0">Registered Users</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- UPCOMING FEATURES -->
        <section class="py-5">
            <div class="container text-center">
                <h4 class="fw-bold">Coming Soon</h4>
                <p class="text-muted">
                    Appointment scheduling • Staff management • Sales reports
                </p>
            </div>
        </section>

    </x-layout>
