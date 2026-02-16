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
            <div class= "d-flex gap-2">
                <a href="{{ route('admin.product.create.view') }}"
                class="btn btn-light">
                    + Add Product
                </a>

                <a href="{{ route('admin.category.add') }}"
                class="btn btn-light">
                    + Add Category
                </a>
            </div>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price ($)</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th class="text-center">Description</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <form action="{{route('admin.product.delete', $product->id)}}" method="POST">
                                            @csrf
                                            <button>Delete</button>
                                        </form>
                                    </td>
                                    {{-- force delete --}}
                                    <td>
                                        <form action="{{route('admin.product.forceDelete', $product->id)}}" method="POST">
                                            @csrf
                                            <button>Force Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </section>
    {{-- deleted products list --}}
<h2 class="mb-4 deletedProduct">Deleted Products</h2>

<section class="py-5">
    <div class="container">

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($deletedProducts as $deletedProduct)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $deletedProduct->name }}</td>
                        <td class="text-center">
                            <form method="POST"
                                  action="{{ route('admin.product.restore', $deletedProduct->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">
                                    Restore
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">
                            No deleted products found.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</section>


</x-layout>
