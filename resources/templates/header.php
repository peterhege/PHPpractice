<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="<?=PATH;?>/src/css/style.css" rel="stylesheet">

    <link rel="icon" href="<?=PATH;?>/src/img/layout/php.ico" type="image/x-icon" />

    <title>PHP Practice</title>
</head>

<body>
<div id="header">
    <nav class="navbar navbar-inverse" style="border-radius: 0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=PATH;?>/home">PHP Practice</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="<?=PATH;?>/home">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Factorial
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=PATH;?>/code/factorial_loop">Loop</a></li>
                        <li><a href="<?=PATH;?>/code/factorial_recursion">Recursion</a></li>
                        <li><a href="<?=PATH;?>/code/factorial_closure">Closure</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Binary Tree
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=PATH;?>/code/binary_tree">Binary Tree</a></li>
                        <li><a href="<?=PATH;?>/code/binary_tree_get_leaf_count">Get Leaf Count</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=PATH;?>/code/quick_sort">Quick Sort</a></li>
                        <li><a href="<?=PATH;?>/code/bubble_sort">Bubble Sort</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=PATH;?>/code/is_prime">Prime</a></li>
                        <li><a href="<?=PATH;?>/code/is_repeat">Is Repeat</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>