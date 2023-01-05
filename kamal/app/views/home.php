<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Pestana CR7</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">Pestana CR7</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link  active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/booking">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reservations">Reservations</a>
                        </li>
                        <?php
                        if (isset($_SESSION['user']) && isset($_SESSION['user']) === true) { ?>
                        <li class="nav-item">
                            <a href="/userlogout" class="nav-link logout">Logout</a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <?php }
                        ; ?>



                    </ul>
                </div>
            </div>
        </nav>



        <div class="rel">
            <img class="hotel" src="/assets/img/Beige Minimal Furniture Store Website Desktop Prototype.png">
            <div class="title">
                <h1>Pestana CR7<span class="badge bg-warning">VIP</span></h1>
            </div>
        </div>
    </header>

    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>ABOUT US</h5>
                            <h3>Welcome To Pestana CR7 Hotel In Street Abreuvoir</h3>
                        </div>
                        <p class="first-para">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="last-para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-about-pic">
                        <img id="shad"
                            src="https://img.freepik.com/photos-gratuite/croissant-oeuf-coque-jus-orange-petit-dejeuner-au-yaourt-plateau-au-lit-dans-chambre-hotel_176474-2601.jpg?w=740&t=st=1671365196~exp=1671365796~hmac=e1a9dee837ec88bf5ef8051adc59b72012c35ad0a81f77084342542b7886705f"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-1.png" alt="">
                        <h4>Free Wi-Fi</h4>
                        <p>The massive investment in a hotel or resort requires constant reviews and control in order to
                            make it a successful investment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-2.png" alt="">
                        <h4>Premium Pool</h4>
                        <p>Choose from 4 unique ready made concepts, let us help you create the concept perfect for you
                            or let HCA.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-3.png" alt="">
                        <h4>Coffee Maker</h4>
                        <p>HCA's Owner's Representation is taking care of just these important factors, may it be
                            through regular site visits and spot checks.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-4.png" alt="">
                        <h4>Party Time</h4>
                        <p>For properties with third party management companies, HCA Consultants will as well administer
                            the terms and conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-5.png" alt="">
                        <h4>TV HD</h4>
                        <p>We provide a critical analysis of a hotel's marketing strategy, bench-marking it against
                            industry and competitive practices.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="/assets/img/services-6.png" alt="">
                        <h4>Restaurant</h4>
                        <p>A hotel and restaurant investment deserves careful and market oriented financial planning and
                            projections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rooms">
        <h4>Our Rooms</h4>
    </div>
    <section class="cards">
        <div class="card" style="width: 18rem;">
            <img src="https://as1.ftcdn.net/v2/jpg/02/71/08/28/1000_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://as1.ftcdn.net/v2/jpg/02/71/08/28/1000_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://as1.ftcdn.net/v2/jpg/02/71/08/28/1000_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://as1.ftcdn.net/v2/jpg/02/71/08/28/1000_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section>
    <a href="/booking"><span id="more">
            <h5>Booking</h5>
        </span></a>

    <footer id="ftr" class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Pestana CR7</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i
                                    class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>






</body>

</html>