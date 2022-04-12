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
              <table id="noeks" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jenis Barang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($jbarangs as $jbarangs)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jbarangs->nama_jenis }}</td>
                    <td>
                      <a href="jbarang/{{ $jbarangs->id }}}/edit" class="btn btn-info">Edit</a>
                      <form method="post" class="d-inline" action="/jbarang/{{ $jbarangs->id }}">
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
          <h4 class="modal-title">Tambah Jenis Barang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/jbarang">
          <div class="modal-body">
              @csrf
              <div class="form-group">
                  <label>Nama Jenis Barang <span style="color:red">*</span></label>
                  <input type="text" class="form-control" placeholder="Masukkan nama jenis barang" name="nama_jenis" id="nama_jenis" required value="{{ old('nama_jenis') }}">
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