<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learnvest</title>
    <!-- bootstrap_css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;500;600;700&family=Righteous&family=Roboto+Condensed:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="navigation">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="#" height=80px; alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto left-menu">
                    <li class="nav-item active ">
                        <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">
                            
                        </span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="notice">Notice <span class="sr-only">
                        </span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academic Update
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="1stsemester">1st Smester</a>
                            <a class="dropdown-item" href="2ndsemester">2nd Semester</a>
                            <a class="dropdown-item" href="3rdsemester">3rd Semester</a>
                            <a class="dropdown-item" href="4thsemester">4th Semester</a>
                            <a class="dropdown-item" href="5thsemester">5th Semester</a>
                            <a class="dropdown-item" href="6thsemester">6th Semester</a>
                            <a class="dropdown-item" href="7thsemester">7th Semester</a>
                            <a class="dropdown-item" href="8thsemester">8th Semester</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Career Update
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="android">Android</a>
                            <a class="dropdown-item" href="web-developing">Web Development</a>
                            <a class="dropdown-item" href="networking">Networking</a>
                            <a class="dropdown-item" href="hardware">Hardware</a>
                            <a class="dropdown-item" href="ai">Artificial Intelligence</a>
                            <a class="dropdown-item" href="iot">IOT</a>
                            
                            
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto right-menu ">
                    <li><a href="login">Login|</a></li>
                    <li><a href="registration">|Register</a></li>
                    
                        <li><a href="admin_login">||Admin Login|</a></li>
                       <li> <a href="teacher_login">|Teacher Login</a></li>
                   
                </ul>
            </div>
        </nav>
    </div>