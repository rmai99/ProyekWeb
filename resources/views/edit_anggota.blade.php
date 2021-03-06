@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Anggota</h1>
            <hr>
            @foreach($datas as $data)
            <form action="{{ route('DataAnggota.update', $data->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
		            <div class="form-group">
                    <label for="nama_anggota">nama_anggota:</label>
                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="{{ $data->nama_anggota }}">
                </div>
                <div class="form-group">
                    <label for="nim">nim:</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $data->nim }}">
                </div>
                <div class="form-group">
                    <label for="fakultas">fakultas:</label>
                    <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $data->fakultas }}">
                </div>
				<div class="form-group">
                    <label for="prodi">prodi:</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $data->prodi }}">
                </div>
				<div class="form-group">
                    <label for="alamat">alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
                </div>
				<div class="form-group">
                    <label for="jk">jk:</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="{{ $data->jk }}">
                </div>
				<div class="form-group">
                    <label for="no_telp">no_telp:</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('DataAnggota.index')}}" role="button">Cancel</a>
                </div>
              </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
