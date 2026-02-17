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
                <label for="categories" class="form-label fw-semibold">
                    Categories
                </label>

                <select name="categories[]"
                        id="categories"
                        class="form-select @error('categories') is-invalid @enderror"
                        multiple
                        required>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach

                </select>
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

            {{-- <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" required>
            </div> --}}

            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">
                    Product Image
                </label>
                <input type="file"
                    name="image"
                    id="image"
                    class="form-control"
                    accept="image/*"
                    required>
            </div>


            <button type="submit" class="btn btn-dark">
                Save Product
            </button>

            <a href="{{ route('admin.products.home') }}" class="btn btn-primary">
                Product Table
            </a>
        </form>

    </div>
</section>

</x-layout>
