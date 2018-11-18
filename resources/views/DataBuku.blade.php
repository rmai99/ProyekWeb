@extends('base')
@section('content')
<section class="content">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Daftar Anggota</h3>

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
                    <th>No.</th>
                    <th>ISBN</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Jenis Kelamin</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->isbn }}</td>
                      <td>{{ $d->judul_buku }}</td>
                      <td>{{ $d->tahun_terbit }}</td>
                      <td>{{ $d->pengarang }}</td>
                      <td>{{ $d->penerbit }}</td>
                      <td>{{ $d->satuan }}</td>
                      <td>
                        <form action="{{ route('DataBuku.destroy', $d->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{ route('DataBuku.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

</section>
@endsection
