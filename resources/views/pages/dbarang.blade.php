@extends('layout.main')
@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah">
                Tambah
              </button>
            </div>
            <div class="card-body">
              <table id="eks" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($dbarangs as $dbarangs)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dbarangs->nama_barang }}</td>
                    <td>{{ $dbarangs->jbarangs->nama_jenis }}</td>
                    <td>{{ $dbarangs->stok }}</td>
                    <td>
                      <a href="dbarang/{{ $dbarangs->id }}}/edit" class="btn btn-info">Edit</a>
                      <form method="post" class="d-inline" action="/dbarang/{{ $dbarangs->id }}">
                        @method('delete')
                        @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
                            Hapus
                          </button> 
                      </form>
                    </td>
                  </tr>
                  @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Barang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/dbarang">
          <div class="modal-body">
              @csrf
              <div class="form-group">
                  <label>Nama Barang <span style="color:red">*</span></label>
                  <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" id="nama_barang" required value="{{ old('nama_barang') }}">
              </div>
              <div class="form-group">
                  <label>Jenis Barang <span style="color:red">*</span></label>
                  <select class="custom-select rounded-0" name="jbarangs_id" id="jbarangs_id" required value="{{ old('jbarangs_id') }}">
                    @foreach ($jbarangs as $jbarangs)
                      <option value="{{ $jbarangs->id }}">{{ $jbarangs->nama_jenis }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Stok Barang <span style="color:red">*</span></label>
                  <input type="number" class="form-control" placeholder="Masukkan stok barang" name="stok" id="stok" required value="{{ old('stok') }}">
              </div>
          </div>
          <div class="modal-footer justify-content-end">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection