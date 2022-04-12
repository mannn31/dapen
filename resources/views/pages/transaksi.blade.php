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
                  <th>Tanggal Transaksi</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Terjual</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($transaksi as $transaksi)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaksi->tanggal_transaksi }}</td>
                    <td>{{ $transaksi->dbarangs->nama_barang }}</td>
                    <td>{{ $transaksi->jumlah_terjual }}</td>
                    <td>
                      <form method="post" class="d-inline" action="/dbarang/{{ $transaksi->id }}">
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
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="/transaksi">
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <label>Tanggal Transaksi <span style="color:red">*</span></label>
                <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" required value="{{ old('tanggal_transaksi') }}">
            </div>
            <div class="form-group">
                <label>Nama Barang <span style="color:red">*</span></label>
                <select class="custom-select rounded-0" name="dbarangs_id" id="dbarangs_id" required value="{{ old('dbarangs_id') }}">
                  @foreach ($dbarangs as $dbarangs)
                    <option value="{{ $dbarangs->id }}">{{ $dbarangs->nama_barang }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah Terjual <span style="color:red">*</span></label>
                <input type="number" class="form-control" placeholder="Masukkan jumlah terjual barang" name="jumlah_terjual" id="jumlah_terjual" required value="{{ old('jumlah_terjual') }}">
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