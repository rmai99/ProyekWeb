@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Mahasiswa</h1>
            <hr>
            <form action="{{ route('DataAnggota.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama_anggota">
                </div>
				        <div class="form-group">
                    <label for="nama">NIM:</label>
                    <input type="text" class="form-control" id="usr" name="nim">
                </div>
				        <div class="form-group">
                    <label for="nama">Fakultas</label>
                    <input type="text" class="form-control" id="usr" name="fakultas">
                </div>
				         <div class="form-group">
                    <label for="nama">Program Studi</label>
                    <input type="text" class="form-control" id="usr" name="prodi">
                </div>
                <div class="form-group">
                   <label for="nama">Alamat</label>
                   <input type="text" class="form-control" id="usr" name="alamat">
               </div>
               <div class="form-group">
                  <label for="nama">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="usr" name="jk">
              </div>
              <div class="form-group">
                 <label for="nama">No Telp</label>
                 <input type="text" class="form-control" id="usr" name="no_telp">
             </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
