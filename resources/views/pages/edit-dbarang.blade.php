@extends('layout.main')
@section('main')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                @foreach ($dbarangs as $dbarangs)
                <form method="post" action="/dbarang/{{ $dbarangs->id }}">
                  <div class="modal-body">
                      @method('put')
                      @csrf
                      <div class="form-group">
                          <label>Nama Barang <span style="color:red">*</span></label>
                          <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" id="nama_barang" required value="{{ old('nama_barang', $dbarangs->nama_barang) }}">
                      </div>
                      <div class="form-group">
                          <label>Jenis Barang <span style="color:red">*</span></label>
                          <select class="custom-select rounded-0" name="jbarangs_id" id="jbarangs_id" required>
                            @foreach ($jbarangs as $jbarang)
                            @if (old('jbarangs_id', $dbarangs->jbarangs_id) == $jbarang->id)
                            <option value="{{ $jbarang->id }}" selected>{{ $jbarang->nama_jenis }}</option>
                            @endif
                              <option value="{{ $jbarang->id }}">{{ $jbarang->nama_jenis }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Stok Barang <span style="color:red">*</span></label>
                          <input type="number" class="form-control" placeholder="Masukkan stok barang" name="stok" id="stok" required value="{{ old('stok', $dbarangs->stok) }}">
                      </div>
                  </div>
                  <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Changes</button>
                  </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection