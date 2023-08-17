@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/ic_home.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h4>Selamat Datang di Aplikasi Abc</h4>
                <br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt facilis quidem nisi repudiandae.
                    Laborum, mollitia distinctio eligendi eos quia quisquam quaerat nostrum aut. Accusantium repellendus
                    similique id aliquam voluptas, vitae nihil ratione maiores doloribus ipsum dolor nam! Reiciendis,
                    expedita iste. Porro, veritatis a perferendis nesciunt sequi molestias maxime? Quaerat cupiditate vero
                    consequatur provident suscipit hic totam natus fuga possimus illo repellendus harum rerum placeat, rem
                    ducimus tenetur, atque perspiciatis laudantium. Eius non doloremque labore vel iure aut commodi, itaque
                    sapiente eos hic dolorum quibusdam alias quis eaque tempora nihil cum totam quasi minima unde enim!
                    Dolor a odit corrupti alias.</p>
                <br>
                <div class="row mt-5">
                    <div class="col-6">
                        <a class="btn btn-primary btn-block" href="{{ route('login') }}">Login</a>

                    </div>
                    <div class="col-6"><a class="btn btn-info btn-block" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
