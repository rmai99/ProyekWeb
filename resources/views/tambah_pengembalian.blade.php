@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Pengembalian</h1>
            <hr>
            @foreach($peminjaman as $d)
            <form action="{{ route('DataPengembalian.index', $d->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nim">Tanggal Pinjam:</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $d->tgl_kembali }}">
                </div>
                <div class="form-group">
                    <label for="fakultas">Judul Buku:</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $d->buku->judul_buku }}">
                </div>
				        <div class="form-group">
                    <label for="prodi">Nama Anggota:</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $d->anggota->nama_anggota }}">
                </div>
                <div class="form-group">
                    <label for="prodi">Tanggal Terima:</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="">
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
