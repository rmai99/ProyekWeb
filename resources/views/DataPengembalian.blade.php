@extends('base')
@section('content')
<section class="content">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Pengembalian</h3>

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
                    <th>Nama Peminjam</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Terima</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach($pengembalian as $d)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->anggota->nama_anggota }}</td>
                        <td>{{ $d->buku->judul_buku }}</td>
                        <td>{{ $d->anggota->nama_anggota }}</td>
                          <td>
                            <a href="{{ route('DataPeminjaman.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              <div class="form-group">
                  <a class="btn btn-primary" href="{{route('DataPeminjaman.create')}}" role="button">Tambah</a>
              </div>

  </section>
  @endsection
