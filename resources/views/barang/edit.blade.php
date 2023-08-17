@extends('app')
@section('content')
    <div class="row">

        <div class="col-md-12">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
        </div>

        <div class="col-md-6">
            <img src="../../images/ic_edit.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-4">
                        <h3>Edit Data</h3>
                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam beatae modi a
                            recusandae eaque libero facere doloremque odio ea voluptatem!
                        </p>
                    </div>

                    <form action="{{ route('barang.update', $row) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama User <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_barang"
                                value="{{ old('nama_barang', $row->nama_barang) }}" />
                        </div>
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="kode_barang"
                                value="{{ old('kode_barang', $row->kode_barang) }}" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('barang.index') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
