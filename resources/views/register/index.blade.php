<!doctype html>
<html lang="en">
  <head>
    <!-- Favicons -->
    <link href="assets/img/logos.png" rel="icon">
    <link href="assets/img/logos.png" rel="apple-touch-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="css/sidebars.css" rel="stylesheet">
    
    <title>{{ $title }}</title>
  </head>
  <body>

    <div class="container">
      <div class="row justify-content-center py-5">
          <div class="col-md-5">
          <div class="card">
                <div class="card-header  mb-0"><h5 class="text-center">Register</h5></div>
                <div class="card-body">
                <form action="/register" method="post">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    
                    <div class="form-floating row mb-3">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 col-sm-12">Register</button>    

                </form>
            </div>
            <div class="card-footer mb-0 text-center">
                <label for="exampleCheck1">Sudah punya akun? <a href="/login">login</a> sekarang</label>
            </div>
          </div>
          </div>
        </div>
    </div>

    {{-- Dropdown --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebars.js"></script>

  </body>
</html> 