@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Buku</h1>
            <hr>
            @foreach($data as $d)
            <form action="{{ route('DataBuku.update', $d->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
		            <div class="form-group">
                    <label for="nama_anggota">ISBN:</label>
                    <input type="number" class="form-control" id="isbn" name="isbn" value="{{ $d->isbn }}">
                </div>
                <div class="form-group">
                    <label for="nim">Nama Anggota:</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $d->judul_buku }}">
                </div>
                <div class="form-group">
                    <label for="fakultas">Tahun Terbit:</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $d->tahun_terbit }}">
                </div>
				            <div class="form-group">
                    <label for="prodi">pengarang:</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $d->pengarang }}">
				            <div class="form-group">
                    <label for="alamat">Penerbit:</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $d->penerbit }}">
                </div>
				            <div class="form-group">
                    <label for="jk">Satuan:</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $d->satuan }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
              </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
