@extends('layouts.master')

@section('title')
    Users Index
@endsection

@section('content')

    <div class="row">
        <div class="col-6 offset-4">
            <h1 class="text-center">Users</h1>
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name='name' value="{{ $user->name }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameInput">
                    <div id="nameInput" class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name='email' value="{{ $user->email }}" type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailInput">
                    <div id="emailInput" class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="password">Password</label>
                    <input name='password' value="{{$user->password}}" type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="passwordInput">
                    <div id="passwordInput" class="invalid-feedback">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="password">Confirm Password</label>
                    <input name='password_confirmation' value="{{$user->password}}" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="passwordConfirm" aria-describedby="passwordConfirmInput">
                    <div id="passwordConfirmInput" class="invalid-feedback">
                        @error('password_confirmation')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="date">Date</label>
                    <input name='date' type="date" class="form-control  @error('date') is-invalid @enderror" id="date" aria-describedby="dateInput">
                    <div id="dateInput" class="invalid-feedback">
                        @error('date')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection


@section('scripts')
    <script>
        console.log('users view');
    </script>
@endsection
