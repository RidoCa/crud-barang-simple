@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
        </div>

        <div class="col-md-6">
            <img src="images/ic_login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-4">
                        <h3>Log In</h3>
                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam beatae modi a
                            recusandae eaque libero facere doloremque odio ea voluptatem!
                        </p>
                    </div>


                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf

                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />

                        </div>
                        <div class="form-group last mb-4">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" />

                        </div>


                        <input type="submit" value="Log In" class="btn btn-block btn-info">

                        <a class="d-block text-left my-4" href="{{ route('register') }}">Registrasi</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
