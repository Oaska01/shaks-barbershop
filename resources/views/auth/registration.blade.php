<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<x-layout>
<main
      class="d-flex w-100 align-items-center justify-content-center"
      style="min-height: calc(100vh - 140px)">


      <form class="card p-4" action = "{{ route('registration') }}" method="post">
        @csrf
        <h1 class="mb-4 text-center text-primary">Sign Up</h1>
        <div class="mb-3">
          <label for="exampleInputFullName" class="form-label">Full Name</label>
          <input
            type="text"
            name="name"
            class="form-control"
            id="exampleInputFullName"
            {{-- we will add value to maintain the data --}}
            value="{{ old('name') }}"
            aria-describedby="fullNameHelp"/>
          <div id="fullNameHelp" class="form-text">
            We'll never share your full name with anyone else.
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input
            type="email"
            name="email"
            class="form-control"
            id="exampleInputEmail1"
            value="{{ old('email') }}"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone Number</label>
          <input
            type="text"
            name = "phoneNumber"
            class="form-control"
            id="exampleInputPhoneNumber"/>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="exampleInputPassword1"/>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
          <input
            type="password"
            name = "password_confirmation"
            class="form-control"
            id="exampleInputPassword2"/>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="policy" required/>
          <label class="form-check-label" for="exampleCheck1">I agree to
            <a href="#">terms of policy</a></label>
        </div>
        <h6 style="color: gray; font-size: 0.85rem">
          Have an account? <a href="{{ route('login.view') }}"> Sign in</a>
        </h6>
        <button type="submit" class="btn btn-primary">Submit</button>

        @if ($errors->any())
            <div class="mt-3 alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors ->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      </form>
    </main>
</x-layout>
