<x-layout>

<div class="container mt-5" style="max-width:600px;">

    <h2 class="mb-4">Add New Category</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Create Form --}}
    <form method="POST" action="{{ route('admin.category.add') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">
                Category Name
            </label>

            <input type="text"
                   name="name"
                   id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}"
                   required>

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark">
            Save Category
        </button>

    </form>

</div>


<section class="py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">

                <h4 class="mb-3">Existing Categories</h4>

                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th width="120">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form action="{{ route('admin.category.delete', $category->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this category?')">
                                        @csrf
                                        {{-- @method('DELETE') --}}

                                        <button class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">
                                    No categories added yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</section>

</x-layout>
