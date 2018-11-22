@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Buku</h1>
            <hr>
            <form action="{{ route('DataPeminjaman.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                   <label for="nama">Tgl PInjam</label>
                   <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
               </div>
               <div class="form-group">
                    <label for="nama">Tgl Kembali</label>
                    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                </div>
                <div class="form-group">
                    <label for="nama">Judul Buku</label>
                    <select class="form-control" name="id_buku">
                        @foreach($buku as $b)
                         <option value="{{ $b->id}}">{{ $b->judul_buku}}</option>
                        @endforeach
                    </select
                </div>
                <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <select class="form-control" name="id_anggota">
                    @foreach($anggota as $a)
                         <option value="{{ $a->id}}">{{ $a->nama_anggota}}</option>
                    @endforeach
                    </select>
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
