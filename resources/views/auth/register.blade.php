<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.4.1/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: url('assets/images/ecole.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }

        .banniere {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            /* Ajusté pour rendre le formulaire plus petit */
            width: 100%;
        }

        .card-body {
            text-align: center;
        }

        .card-body p {
            font-weight: bold;
            font-size: 15px;
            /* margin-bottom: 30px; */
        }

        .form-floating label {
            padding-left: 10px;
        }

        .btn-success {
            font-weight: bold;
            width: 100%;
        }

        .logo {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px;
            height: auto;
        }


        /* =======La responsivité ===== */

        @media screen and (max-width: 570px) {
            .search-container {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>

<body>
    <div class="banniere">
        <div class="container">
            {{-- <img src="assets/images/OIG1.jpg" alt="Logo" class="logo">
            <div class="shadow-sm p-3 mb-5 bg-body rounded"> --}}
            <div class="card-body">


                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('POST')

                    <h3 style="font-weight: bold;font-size: 24px; margin-bottom: 30px;">Créer un compte</h3>

                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}



                    @if (session('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error_message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success_message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mb-3 row">
                        <div class="form-floating col-sm-12">
                            <input type="text" class="form-control" id="floatingNom" placeholder="Votre nom"
                                required="required" name="name">
                            <label for="floatingNom">&nbsp&nbspNom</label>
                        </div>
                    </div>

                    @error('name')
                        <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
                    @enderror

                    <div class="mb-3 row">
                        <div class="form-floating col-sm-12">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                                required="required" name="email">
                            <label for="floatingEmail">&nbsp&nbspEmail</label>
                        </div>
                    </div>

                    @error('email')
                        <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
                    @enderror

                    <div class="form-floating col-sm-12">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            required="required" name="password">
                        <label for="floatingPassword">Mot de passe</label>
                    </div><br>

                    @error('password')
                        <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
                    @enderror

                    <div class="form-floating col-sm-12">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            required="required" name="password_confirmation">
                        <label for="floatingPassword">Confirmer</label>
                    </div>

                    @error('password_confirmation')
                        <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary mb-3 mt-3" style="width: 300px;">S'inscrire</button>

                </form>
                <p>Déjà un compte ? <a href="{{ route('login') }}" style="color: blue;">Connectez-vous</a></p>
            </div>
        </div>
    </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
