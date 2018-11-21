@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Pengembalian</h1>
            <hr>
            <form action="{{ route('DataPengembalian.store', $peminjaman->id) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nim">Tanggal Pinjam:</label>
                    <input type="date" class="form-control" id="judul_buku" name="judul_buku" value="{{ $peminjaman->tgl_kembali }}">
                </div>
                <div class="form-group">
                    <label for="fakultas">Judul Buku:</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $peminjaman->buku->judul_buku }}">
                </div>
				        <div class="form-group">
                    <label for="prodi">Nama Anggota:</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $peminjaman->anggota->nama_anggota }}">
                </div>
                <div class="form-group">
                    <label for="prodi">Tanggal Terima:</label>
                    <input type="date" class="form-control" id="pengarang" name="tgl_terima" value="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('DataPeminjaman.index')}}" role="button">Cancel</a>
                </div>
              </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
