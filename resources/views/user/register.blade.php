@extends('app')
@section('content')
    <div class="row">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif

        <div class="col-md-6">
            <img src="images/ic_register.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-4">
                        <h3>Registrasi</h3>
                    </div>
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                        </div>

                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />

                        </div>
                        <div class="form-group last mb-4">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" />

                        </div>

                        <div class="form-group last mb-4">
                            <label for="con password">Password Confirmation</label>
                            <input class="form-control" type="password" name="password_confirm" />
                        </div>

                        <input type="submit" value="Register" class="btn btn-block btn-info">

                        <a class="d-block text-left my-4" href="{{ route('login') }}">Login</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
