@extends('layouts.master')

@section('title')
    Create user
@endsection

@section('content')

{{--    @if($errors->any())--}}
{{--        @foreach($errors as $error)--}}
{{--            {{ $error }}--}}
{{--        @endforeach--}}
{{--    @endif--}}

    <div class="row">
        <div class="col-6 offset-4">
            <h1 class="text-center">Create User</h1>
            <form method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name='name' value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameInput">
                    <div id="nameInput" class="invalid-feedback">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name='email' value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailInput">
                    <div id="emailInput" class="invalid-feedback">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="password">Password</label>
                    <input name='password' type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="passwordInput">
                    <div id="passwordInput" class="invalid-feedback">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="password">Confirm Password</label>
                    <input name='password_confirmation' type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="passwordConfirm" aria-describedby="passwordConfirmInput">
                    <div id="passwordConfirmInput" class="invalid-feedback">
                        @error('password_confirmation')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>


@endsection


@section('scripts')
    <script>
        console.log('users view');
    </script>
@endsection
