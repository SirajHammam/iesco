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

    <main>
      <div class="container">

        <div class="row justify-content-center py-5">
          <div class="col-md-4">
            <div class="card">
                <div class="card-header  mb-0"><h5 class="text-center">Login</h5></div>
                <div class="card-body">

                @if (session()->has('success'))
                  <div id="success" class="alert alert-success alert-dismissible fade show" role="alert">
                      <div>{{ session('success') }}</div>
                  </div>
                @endif
        
                @if (session()->has('loginerror'))
                    <div class="alert alert-danger" role="alert" id="loginerror">
                        Username or Password Salah
                    </div>
                @endif

                <form action="/login" method="post">
                  @csrf
                  
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <button type="submit" class="btn btn-primary col-sm-12 ms-center">Login</button>

                </form>
                </div>
                <div class="card-footer text-center">
                  <label for="exampleCheck1">Belum punya akun? <a href="/register">daftar</a> sekarang</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    {{-- Dropdown --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebars.js"></script>

    <script>
      setTimeout(() => {
          $('#success').slideUp('fast');
          $('#loginerror').slideUp('fast');
      }, 1500);
    </script>

  </body>
</html> 