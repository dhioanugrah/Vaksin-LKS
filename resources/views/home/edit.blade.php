<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a84d1f4990.js" crossorigin="anonymous"></script>
    <title>PeduliBersama</title>
</head>

<style>
    :root{
    --main-color:#fa0557;
    --black:#244361;
    }

    *{
        margin:0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
        font-family: Verdana, Tahoma, sans-serif;
    }

    .heading{
        text-align: center;
        padding:0 15px;
        padding-bottom: 5px;
        color:var(--black);
        font-size: 30px;
    }

    .heading span{
        color:var(--main-color);
    }

    .link-btn{
        display: inline-block;
        background:var(--main-color);
        color:#fff;
        border-radius: 50px;
        padding:5px 25px;
        font-size: 17px;
        cursor: pointer;
    }

    .link-btn:hover{
        color:#fff;
        background:var(--black);
    }

    header{
        background: #fff;
    }

    header .logo{
        font-size: 20px;
        color:var(--black);
    }

    header .logo span{
        color:var(--main-color);
    }

    header .nav a{
        margin-left: 3px;
        border-radius: 50px;
        color:var(--black);
        padding:5px 15px;
    }

    header .nav a.active,
    header .nav a:hover{
        background: var(--main-color);
        color:#fff;
    }

    .form{
        padding-top: 20%;
        padding: 150px;
        min-height: 100vh;
        background-image: url("../img/about.png");
        background-position: center;
        background-size: cover; 
    }
</style>

<body>
    <header class="fixed-top py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo">PeduliBersama</a>
    
        <nav class="nav">
            <a href="{{ route('home') }}">Data</a>
        </nav>
        </div>
    </header>  
    
    <section class="form">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                Ubah Data
                </div>
                <div class="card-body">
                    <form action="{{ route('update.form', $ubah->id) }}" method="get">
                        @csrf
                        <div class="form-group mx-2">
                            <label>NAMA</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $ubah->nama }}">

                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mx-2">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ $ubah->nik }}">
                            
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mx-2">
                            <label>No Whatsapp</label>
                            <input type="text" name="no" class="form-control @error('no') is-invalid @enderror" value="{{ $ubah->no }}">
                            
                            @error('no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>
                        <button type="submit" class="mx-2 btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>

   
    </section>

   
</body>
</html>