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
                    <tr>
                        <td>1</td>
                        <td>Taylor Swift</td>
                        <td>1333</td>
                        <td>KKMK</td>
                        <td>Pendidikan Dokter</td>
                        <td>Nashville</td>
                        <td>P</td>
                        <td>08923676182</td>
                        <td>
                            <form action="" method="post">
                                <a href="#" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>

</section>
@endsection
