<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Naasky Laundry - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/custom.css')}}">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create An Account!</h1>
                            </div>
                            <form class="user" action="{{route('register')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <input type="text" name="name" class="form-control" id="exampleFirstName" placeholder="Masukan Nama">                                    
                                </div>
                                <div class="form-group row">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Masukan Email">
                                </div>
                                <div class="form-group row">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Masukan Password">
                                </div>
                                <div class="form-group row">
                                    <select name="role" class="form-control">
                                        <option value="" disable selected>- Pilih Role -</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Kasir">Kasir</option>
                                        <option value="Owner">Owner</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('tampil_login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>