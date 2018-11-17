@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Mahasiswa</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('mahasiswa.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">ISBN :</label>
                    <input type="text" class="form-control" id="isbn" name="nama" value="{{ $datas->isbn }}">
                </div>
                <div class="form-group">
                    <label for="email">Judul Buku:</label>
                    <input type="email" class="form-control" id="email" name="judul_buku" value="{{ $datas->judul_buku }}">
                </div>
                <div class="form-group">
                    <label for="nohp">Penerbit:</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $datas->penerbit }}">
                </div>
                  <div class="form-group">
                    <label for="nohp">Pengarang:</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $datas->pengarang }}">
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