<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a84d1f4990.js" crossorigin="anonymous"></script>
    <title>PeduliBersama</title>
</head>

<style>
    :root {
        --main-color: #fa0557;
        --black: #244361;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        font-family: Verdana, Tahoma, sans-serif;
    }

    .heading {
        text-align: center;
        padding: 0 15px;
        padding-bottom: 5px;
        color: var(--black);
        font-size: 30px;
    }

    .heading span {
        color: var(--main-color);
    }

    .link-btn {
        display: inline-block;
        background: var(--main-color);
        color: #fff;
        border-radius: 50px;
        padding: 5px 25px;
        font-size: 17px;
        cursor: pointer;
    }

    .link-btn:hover {
        color: #fff;
        background: var(--black);
    }

    header {
        background: #fff;
    }

    header .logo {
        font-size: 20px;
        color: var(--black);
    }

    header .logo span {
        color: var(--main-color);
    }

    header .nav a {
        margin-left: 3px;
        border-radius: 50px;
        color: var(--black);
        padding: 5px 15px;
    }

    header .nav a.active,
    header .nav a:hover {
        background: var(--main-color);
        color: #fff;
    }

    .home {
        min-height: 100vh;
        background: url("./img/virus.png") no-repeat;
        background-position: center;
        background-size: cover;
    }

    .home .content span {
        color: var(--main-color);
        font-size: 20px;
    }

    .home .content h1 {
        color: var(--black);
        font-size: 40px;
        position: center
    }

    .about {
        min-height: 65vh;
        background-image: url("./img/about.png");
        background-position: center;
        background-size: cover;
    }

    .about .content h3 {
        color: var(--black);
        font-size: 33px;
    }

    .about .content p {
        color: #777;
        font-size: 14px;
    }

    .prevent .box {
        flex: 1 1 400px;
        background: #f8f8fe;
        border-radius: 5px;
        text-align: center;
    }

    .prevent .box h3 {
        color: var(--black);
        font-size: 20px;
    }

    .prevent .box p {
        color: var(--black);
        font-size: 14px;
    }

    @media (min-width: 768px) {
        .header {
            padding: 50vh;
        }
    }
</style>

<body>
    <header class="fixed-top py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ route('index') }}" class="logo">PeduliBersama</a>

            <nav class="nav">
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#prevent">prevent</a>
                <a href="{{ route('create.form') }}">Get Vaksin</a>
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </nav>
        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center pt-10">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 content text-center ">
                    <span>stay home, stay safe</span>
                    <h1>protect yourself</h1>
                    <a href="{{ route('create.form') }}" class="link-btn"><i class="fa fa-get-pocket"
                            aria-hidden="true"></i> Vaksin Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="col-md-6 content  my-5">
                    <h3>What is Covid-19?</h3>
                    <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang
                        menyerang sistem pernapasan.
                        Penyakit karena infeksi virus ini disebut COVID-19.
                        Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang
                        berat, hingga kematian.</p>
                    <a href="https://covid19.go.id/" class="link-btn">learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="prevent my-5" id="prevent">
        <h1 class="heading"> how to <span>prevent</span>? </h1>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-head-side-mask"></i>wear a mask</h3>
                    <p>Always wear a mask when you leave the house and meet strangers.</p>
                </div>

                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-hands-wash"></i>wash your hand</h3>
                    <p>always wash your hands when you come from outside and meet strangers.</p>
                </div>

                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-user-md"></i>consult doctor</h3>
                    <p>check with the doctor if you feel uncomfortable.</p>
                </div>

                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-handshake-slash"></i>avoid touching</h3>
                    <p>Avoid touching strangers when outside the house and anywhere.</p>
                </div>

                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-people-arrows"></i>avoid contact</h3>
                    <p>Avoid crowds to keep them away from being in contact with sick people.</p>
                </div>

                <div class="box p-4 m-2 my-2">
                    <h3><i class="fas fa-pump-medical"></i>clean everyday</h3>
                    <p>always clean the body and house at all times so that all bacteria die.</p>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer text-center card">
        <div class="card-header">
            smktiairlangga<i class="fa fa-copyright" aria-hidden="true">DhioAnugrah</i>
        </div>
    </footer>
</body>

</html>