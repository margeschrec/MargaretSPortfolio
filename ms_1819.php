<!doctype html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSchrecongost, Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/Margaret_Schrecongost.css" /> -->
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div id="side-nav" class="col-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-orientation="vertical" href="#">2020-2021</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ms_1819.php">2018-2019</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">2016-2017</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BFA Senior Show</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <H2>Paintings 2018-2019</H2>
            </div>
        </div>
        <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
            <div class="col-12 col-sm-6 col-lg-3">
                <img class="w-100" src="images/2018_19/throne.jpg" data-target="#carouselExample" data-slide-to="0">
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <img class="w-100" src="images/2018_19/phone.jpg" data-target="#carouselExample" data-slide-to="1">
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <img class="w-100" src="images/2018_19/2nd Life.jpg" data-target="#carouselExample" data-slide-to="2">
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <img class="w-100" src="images/2018_19/Sooth.jpg" data-target="#carouselExample" data-slide-to="3">
            </div>
        </div>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/2018_19/throne.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/2018_19/phone.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/2018_19/2nd Life.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/2018_19/Sooth.jpg">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>