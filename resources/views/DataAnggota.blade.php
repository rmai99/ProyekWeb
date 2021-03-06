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
                  <a class="btn btn-primary" href="{{route('DataAnggota.create')}}" role="button">Tambah</a>
                </ul>
              </div>
            </div>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Anggota</th>
                  <th>NIM</th>
                  <th>Fakultas</th>
                  <th>Program Studi</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telepon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($datas as $d)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $d->nama_anggota }}</td>
                  <td>{{ $d->nim }}</td>
                  <td>{{ $d->fakultas }}</td>
                  <td>{{ $d->prodi }}</td>
                  <td>{{ $d->alamat }}</td>
                  <td>{{ $d->jk }}</td>
                  <td>{{ $d->no_telp }}</td>
                  <td>
                    <form action="{{ route('DataAnggota.destroy', $d->id) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <a href="{{ route('DataAnggota.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                      <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

</section>
@endsection
