@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Buku</h1>
            <hr>
            <form action="{{ route('DataBuku.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">ISBN :</label>
                    <input type="text" class="form-control" id="isbn" name="isbn">
                </div>
				        <div class="form-group">
                    <label for="nama">Judul Buku:</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                </div>
				        <div class="form-group">
                    <label for="nama">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
				         <div class="form-group">
                    <label for="nama">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang">
                </div>
                <div class="form-group">
                   <label for="nama">Penerbit</label>
                   <input type="text" class="form-control" id="penerbit" name="penerbit">
               </div>
               <div class="form-group">
                  <label for="nama">Satuan</label>
                  <input type="text" class="form-control" id="satuan" name="satuan">
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
