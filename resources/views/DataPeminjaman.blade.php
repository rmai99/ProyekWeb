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
                  <a class="btn btn-primary" href="{{route('DataPeminjaman.create')}}" role="button">Tambah</a>
                </ul>
              </div>
            </div>
          </div>
          <table id="example2" class="table table-hover table-bordered">
                <thead>
                <tr>
                     <th>No</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Judul Buku</th>
                    <th>Nama Anggota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($peminjaman as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->tgl_pinjam }}</td>
                      <td>{{ $d->tgl_kembali }}</td>
                      <td>{{ $d->buku->judul_buku }}</td>
                      <td>{{ $d->anggota->nama_anggota }}</td>
                        <td>
                          <a href="{{ route('DataPeminjaman.edit',$d->id) }}" class=" btn btn-sm btn-primary">Pinjam</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</section>

@endsection
