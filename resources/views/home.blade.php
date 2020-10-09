<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Allan Lab @ Leiden University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text">
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
            </ul>
            </span>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md">
            <h1>Welcome to the Allan Lab</h1>
            <p>We are a dynamic research group at the Leiden Institute of Physics. Our aim is to explore and
                understand quantum materials, including strange metals, high-temperature superconductors, and quantum
                critical electron matter.</p>

            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/slide_1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/slide_2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/slide_3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <p class="mt-3">
                To this end, we develop novel spectroscopic-imaging scanning tunneling microscopy (SI-STM) tools to
                visualize the relevant quantum mechanical degrees of freedom. We want to be able to build the perfect
                instruments to answer the scientific questions we deem most important (see Research).
                <br><br>
                We are located at Leiden University, the birthplace of superconductivity and home to Kamerlingh Onnes,
                Lorentz, Huygens, Einstein, de Sitter, and others (see e.g. the wall of signatures from Ehrenfest
                lecturers). We exchange ideas and work with our neighbors from Quantum Matter & Optics, as well as
                with the colleagues from our world-class theory section.
                <br><br>
                <b>We are looking for passionate new PhD students, Postdocs, and Master students to join the team
                    (more info) !</b>
                <br><br>
                We are grateful for funding from Leiden University, NWO (Vidi talent scheme and the Frontiers in
                Nanoscience program), and from an ERC starting grant.
            </p>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('logo/logo_1.JPG') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('logo/logo_2.JPG') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('logo/logo_3.JPG') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('logo/logo_4.JPG') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">News</h5>

                    <!-- List Group -->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light mt-3">
    <div class="container p-3">
        <div class="row">
            <div class="col-md-4">
                <p>
                    © 2016 Allan Lab. Site made with Jekyll; copy and modify it for your own research group.
                    <br><br>
                    We are part of the Leiden Institute of Physics at Leiden University.
                </p>
            </div>
            <div class="col-md-4">
                Funding:
                <br>- Vidi and Projectruimte grants from NWO
                <br>- Frontier of Nanosciences, a gravity program from NWO - ERC starting grant
            </div>
            <div class="col-md-4">
                Contact:
                <br>Oort building, Leiden University
                <br>Niels Bohrweg 2
                <br>2333 CA Leiden
                <br>Netherlands
                <br>(Maps, Directions)
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
