@extends('layouts.app')
@section('content')
    <div class="container"> 
        <h1>Formulir Biodata</h1>
        <form method="post" action="{{route('biodata.store')}}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="Tambahkan nama" name="nama" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="usia" class="form-control" id="" aria-describedby="" placeholder="Tambahkan usia" name="usia" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control" id="" aria-describedby="" placeholder="Tambahkan alamat" name="alamat" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="keterangan" class="form-control" id="" aria-describedby="" placeholder="Tambahkan keterangan" name="keterangan" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection