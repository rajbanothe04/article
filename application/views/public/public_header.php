<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user') ?>">Articles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <?= form_open('user/search', ['class' => 'd-flex', 'role' => 'search']) ?>
                <!-- <form class="d-flex" role="search"> -->
                <input class="form-control me-sm-2" name="query" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                <?= form_close(); ?>
                <?= form_error('query', "<p class='navbar-text text-danger'>", '</p>') ?>
                <!-- </form> -->
            </div>
            <!-- <li>
                <a class="navbar-brand" href="<?= base_url('user') ?>">Home</a>
            </li> -->
            <li>
                <a class="navbar-brand" href="<?= base_url('registration') ?>">Registration</a>
            </li>
            <ul class="nav navbar-nav navbar-right">
                <!-- <?= anchor('login', 'Login') ?> -->
                <li><a class="navbar-brand" href="login">Login</a></li>
            </ul>



        </div>
    </nav>