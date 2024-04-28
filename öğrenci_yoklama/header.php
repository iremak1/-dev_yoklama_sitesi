<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Icons Navbar</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .navbar {
            background-color: rgba(0, 123, 255, 0.8); /* Mavi tonlu transparan arka plan */
        }

        .navbar-nav .nav-link {
            color: #333;
        }
        
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .social-icons .nav-link {
            color: #555;
        }
        
        .social-icons .nav-link:hover {
            color: #007bff;
        }

        /* Iconları sağ üst köşeye yerleştir */
        .navbar-nav.social-icons {
            position: absolute;
            right: 0;
        }

        /* Style for university name */
        .university-name {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff; /* Beyaz renk */
        }
    </style>
</head>
<body>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <span class="university-name">KAYSERİ ÜNİVERSİTESİ</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <!-- Profile Dropdown -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <!-- Social Icons -->
        <ul class="navbar-nav social-icons">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>
