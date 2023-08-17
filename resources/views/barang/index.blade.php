@extends('app')
@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card card-default" style="height: 100vh">

        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <input class="form-control" type="text" name="q" value="{{ $q }}"
                        placeholder="Pencarian..." />
                </div>
                <div class="form-group mr-1">
                    <button class="btn btn-success">Refresh</button>
                </div>
                <div class="form-group mr-1">
                    <a class="btn btn-info" href="{{ route('barang.create') }}">Tambah</a>
                </div>
                <div class="form-group ml-auto float-end">
                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->kode_barang }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('barang.edit', $row) }}">Ubah</a>
                            <form method="POST" action="{{ route('barang.destroy', $row) }}"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
