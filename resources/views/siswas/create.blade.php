@extends('siswas.home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>INSERT DATA</title>
</head>
<body>

    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <h5>CRUD | Laravel test</h5>
              </a>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="card" style="margin: 5px">
            <h5 class="card-header">
               <div class="row">
                <div class="col-11" style="padding: 5px">
                    <span>Tambah Data Siswa</span>
                </div>
                <div class="col-1" style="font-size: 18px; padding:5px; font-family:Arial, Helvetica, sans-serif">
                    <a href="{{ route('siswas.index') }}">Kembali</a>
                </div>
               </div>
            </h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oopss!!</strong> Ada kesalahan bray..

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <form action="{{ route('siswas.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-group" style="margin: 5px">
                    <span>Nama</span>
                   <div class="col-4">
                    <input type="text" name="nama" class="form-control">
                   </div>
                </div>
                <div class="form-group" style="margin: 5px">
                    <span>Jenis Kelamin</span>
                   <div class="col-4">
                    <input type="text" name="jenis_kelamin" class="form-control">
                   </div>
                </div>
                <div class="form-group" style="margin: 5px">
                    <span>Jurusan</span>
                    <div class="col-4">
                        <input type="text" name="jurusan" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="margin: 5px">
                    <span>Kelas</span>
                    <div class="col-4">
                        <input type="text" name="kelas" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="margin: 5px">
                    <span>Alamat</span>
                   <div class="col-4">
                    <input type="text" name="alamat" class="form-control">
                   </div>
                </div>
                <div class="input" style="margin: 5px; padding-left: 90px">
                    <button type="submit" class="btn btn-primary" style=" width: 250px">Tambah</button>
                </div>
            </div>
            </form>
          </div>
    </div>
</body>
</html>
@endsection