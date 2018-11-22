@extends('base')
@section('content')
<section class="content">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Pengembalian</h3>

            </div>
          </div>
          <table class="table table-bordered">
                <thead>
                <tr>
                     <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Terima</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach($pengembalian as $d)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->peminjaman->anggota->nama_anggota }}</td>
                        <td>{{ $d->peminjaman->buku->judul_buku }}</td>
                        <td>{{ $d->tgl_terima }}</td>
                        <td>
                         <form action="{{ route('DataPengembalian.destroy', $d->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
            </form>
          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>

  </section>
  @endsection
