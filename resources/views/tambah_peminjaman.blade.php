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
                    <label for="nama">ID Buku  :</label>
                    <input type="integer" class="form-control" id="id_buku" name="id_buku">
                </div>
                <div class="form-group">
                    <label for="nama">ID Anggota  :</label>
                    <input type="integer" class="form-control" id="id_anggota" name="id_anggota">
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
