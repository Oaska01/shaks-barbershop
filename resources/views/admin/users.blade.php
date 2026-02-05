<x-layout>

    @if (session('success'))
        <p style="color: green">{{session('success')}}</p>
    @endif

    <div class="m-4">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Delete</th>
                    <th>Add</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->role}}
                        </td>
                        {{-- Delete --}}
                        <td>
                            <form action="{{ route('admin.delete', $user->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        {{-- Soft Delete --}}
                        <td>
                            <form action="{{ route('admin.delete', $user->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Soft Delete</button>
                            </form>
                        </td>
                        {{-- restore --}}
                        <td>
                            <form action="{{ route ('admin.restore', $user->id)}}" method="POST">
                                <button class="btn btn-primary">Restore</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                    <tr>

                    </tr>
            </tbody>
        </table>
    </div>

</x-layout>
