<?php
echo ''
?>
 '<!DOCTYPE html>
<html lang="en">

<head>
    <title>Help Me! Class Queue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="# ">Help me! (DEV)</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active "><a href="# ">Home</a></li>
                <li><a href="# ">Page 1</a></li>
                <li><a href="# ">Page 2</a></li>
                <li><a href="# ">Page 3</a></li>
                <?php
                $pages = array("Home", "Student", "Tutor", "Help", "About");
                $n_pages = count(pages);
                for($x = 0; $x < $n_pages; $x++)
                {
                    $page = $pages[$x];
                    $pagel = strtolower($page);
                    $activetext  = '';
                    if ($currpage == $page)
                    {
                        $activetext = 'class="active " ';
                    }
                    echo('<li><a '.$activetext.'href="/'.$pagel.'">'.$page.'</a></li>');
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li><a href="# "><span class="glyphicon glyphicon-user "></span> Sign Up</a></li>
                <li><a href="# "><span class="glyphicon glyphicon-log-in "></span> Login</a></li>
            </ul>
            </div>
        </div>
        </h1>
    </nav>
    <div class="container">