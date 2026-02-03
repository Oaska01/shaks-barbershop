<x-layout>

<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Add New Product</h2>

            @if (session('success'))
                <p style = "color:green">{{session('success')}}</p>
            @else
                <p></p>
            @endif

        <form method="POST" action="{{route('admin.product.create')}}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" placeholder="Blade, Wax, Gel">
            </div>

            <div class="mb-3">
                <label class="form-label">Price ($)</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-dark">
                Save Product
            </button>

            <a href="{{ route('admin.products.home') }}" class="btn btn-primary">
                Add Product
            </a>
        </form>
        @if ($errors->any())
                <div class="mt-3 alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
</section>

</x-layout>
