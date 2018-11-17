@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Anggota</h1>
            <hr>
            @foreach($data as $data)
            <form action="{{ route('DataAnggota.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
		            <div class="form-group">
                    <label for="nama_anggota">nama_anggota:</label>
                    <input type="email" class="form-control" id="nama_anggota" name="nama_anggota" value="{{ $datas->nama_anggota }}">
                </div>
                <div class="form-group">
                    <label for="nim">nim:</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $datas->nim }}">
                </div>
                <div class="form-group">
                    <label for="fakultas">fakultas:</label>
                    <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $datas->fakultas }}">
                </div>
				<div class="form-group">
                    <label for="prodi">prodi:</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $datas->prodi }}">
                </div>
				<div class="form-group">
                    <label for="alamat">alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datas->alamat }}">
                </div>
				<div class="form-group">
                    <label for="jk">jk:</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="{{ $datas->jk }}">
                </div>
				<div class="form-group">
                    <label for="no_telp">no_telp:</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $datas->no_telp}}">
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
