<x-layout>

    <!-- PAGE HEADER -->
    <section class="bg-dark text-light py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Products</h1>
                <p class="mb-0 text-muted">
                    Manage barber equipment and supplies
                </p>
            </div>

            <a href="{{ route('admin.product.create.view') }}"
               class="btn btn-light">
                + Add Product
            </a>
        </div>
    </section>

    <!-- PRODUCTS TABLE -->
    <section class="py-5">
        <div class="container">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body">

                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price ($)</th>
                                <th>Stock</th>
                                <th>Added</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- @forelse ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-semibold">
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->category ?? '-' }}
                                    </td>
                                    <td>
                                        {{ number_format($product->price, 2) }}
                                    </td>
                                    <td>
                                        <span class="badge
                                            {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">
                                            {{ $product->stock }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ $product->created_at->format('d M Y') }}
                                    </td>
                                    <td class="text-center">
                                        <a href="#"
                                           class="btn btn-sm btn-outline-primary">
                                            Edit
                                        </a>

                                        <button class="btn btn-sm btn-outline-danger"
                                                disabled>
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="text-center text-muted">
                                        No products found.
                                    </td>
                                </tr>
                            @endforelse --}}
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </section>

</x-layout>
