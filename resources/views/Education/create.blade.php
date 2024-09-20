@extends('layouts.app')
@section('content')
<!-- ini adalah Formulir biodata -->
    <div class="container"> 
        <h1>Formulir Education</h1>
        <form method="post" action="{{route('education.store')}}">
            @csrf
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="tahun" class="form-control" id="" aria-describedby="" placeholder="Tambahkan Tahun" name="tahun" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="universitas" class="form-label">Universitas</label>
                <input type="universitas" class="form-control" id="" aria-describedby="" placeholder="Tambahkan Universitas" name="universitas" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="jurusan" class="form-control" id="" aria-describedby="" placeholder="Tambahkan Jurusan" name="jurusan" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection