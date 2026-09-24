<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Arbi Bimo Jati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            scroll-behavior: smooth;
        }

        .hero{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f8f9fa;
            text-align:center;
        }

        .hero h1{
            font-size:3rem;
            font-weight:bold;
        }

        section{
            padding:80px 0;
        }

        footer{
            background:#212529;
            color:white;
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Arbi Bimo Jati</a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero" id="home">
    <div class="container">
        <h1>Hi, I'm Arbi Bimo Jati</h1>
        <p class="lead">Web Developer | Student | UI Enthusiast</p>

        <a href="#project" class="btn btn-primary mt-3">
            View My Projects
        </a>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>

        <p class="text-center">
            Saya adalah seorang mahasiswa yang sedang belajar
            Web Development menggunakan HTML, CSS, Bootstrap,
            JavaScript, dan Laravel.
        </p>
    </div>
</section>

<!-- Project -->
<section id="project" class="bg-light">
    <div class="container">
        <h2 class="text-center mb-5">My Projects</h2>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">
                            Website CRUD menggunakan Laravel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">
                            Landing Page menggunakan Bootstrap.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">
                            Sistem Login dan Register.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container text-center">
        <h2>Contact</h2>

        <p>Email : arbi@example.com</p>
        <p>Instagram : @arbibimo</p>

        <button class="btn btn-dark">
            Contact Me
        </button>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Arbi Bimo Jati. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
