@extends('base')
@section('content')
<section class="content">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Peminjaman</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <table class="table table-bordered">
                <thead>
                <tr>
                     <th>No</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>ID Buku</th>
                    <th>ID Anggota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->tgl_pinjam }}</td>
                      <td>{{ $d->tgl_kembali }}</td>
                      <td>{{ $d->id_buku }}</td>
                      <td>{{ $d->id_anggota }}</td>
                        <td>
                        <form action="{{ route('DataPeminjaman.destroy', $d->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{ route('DataPeminjaman.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>

</section>
@endsection
