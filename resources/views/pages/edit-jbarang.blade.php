@extends('layout.main')
@section('main')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                @foreach ($jbarangs as $jbarangs)
                <form method="post" action="/jbarang/{{ $jbarangs->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>Nama Jenis Barang <span style="color:red">*</span></label>
                        <input type="text" class="form-control" placeholder="Masukkan nama jenis barang" name="nama_jenis" id="nama_jenis" required value="{{ old('nama_jenis', $jbarangs->nama_jenis) }}">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Changes</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection