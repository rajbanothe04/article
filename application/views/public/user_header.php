<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body><i class="glyphicon glyphicon-home"></i>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="navbar-brand" href="<?= base_url('user') ?>">Articles</a>
                </li>
            </ul>
            <a class="navbar-brand"></a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <ul class="nav navbar-nav navbar-right">
                <!-- <li>
                    <a class="navbar-brand" href="<?= base_url('user') ?>">Home</a>
                </li> -->
                <!-- <?= anchor('login', 'Login') ?> -->
                <li><a class="navbar-brand" href="<?= base_url('login') ?>">Login</a></li>
            </ul>



        </div>
    </nav>