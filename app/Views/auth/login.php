<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Admin Login</title>
    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%)">


    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card col-sm-8 col-md-6 col-lg-4 p-4">

            <div class="mx-auto text-center">
                <a href="<?= HOST_URL ?>/"><img src="<?= IMAGES_URL ?>/kominfo-logo.png" class="w-100" alt="" style="max-width: 20%"></a>
                <h1 class="h2 fw-bold mt-2" style="font-family: 'Nunito Sans'">Admin Login</h1>
            </div>
            <form>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email" style="box-shadow: none">
                    <div id="emailHelp" class="form-text">Harap jaga kerahasiaan informasi login anda dari siapapun</div>
                </div>
                <div class="mb-4">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" style="box-shadow: none">
                </div>
                <div class="col-md-8 d-grid mx-auto">
                    <button type="submit" class="btn text-white" style="background-color: #00458e">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>