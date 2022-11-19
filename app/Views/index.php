<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url("assets/vendor/fontawesome-free/css/all.min.css"); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" <?= base_url("assets/css/sb-admin-2.min.css") ?>" rel="stylesheet">

</head>

<body id="login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 my-auto">
                <div class="card border-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <img src="<?= base_url("assets/img/assets1.jpg") ?>" class="img-fluid rounded-start shadow" alt="..." />
                            </div>
                        </div>
                        <!-- <form class="form-login" method="post"> -->
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="mb-5 text-center">
                                    <h2 class="h1 mt-2">Login</h2>
                                </div>
                                <form class="form-login" method="POST">
                                    <div class="mb-4">
                                        <h2 class="h6 mt-4">Username</h2>
                                        <input type="text" class="form-control" name="user" />
                                        <div id="emailHelp" class="form-text">
                                            fill in your username
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <h2 class="h6 mt-4">Password</h2>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" />
                                        <div id="emailHelp" class="form-text">
                                            fill in your password
                                        </div>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    </div>
                                    <a class="btn btn-primary w-100 text-white" href="<?= base_url('/Dashboard') ?>">SIGN IN</a>
                                </form>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>