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

    <div class="book">
        <div class="booking">
            <h2>Booking Now</h2>
        </div>

        <div class="all">
            <div class="inputs ">
                <div class="form">
                    <form class="grid">
                        <input type="date" placeholder="Araival Date" />
                        <input type="date" placeholder="Departure Date" />
                        <select name="adults" class="options">
                            <option class="opt" value="Lit single ">Lit Lingle</option>
                            <option class="opt" value="double">Lit Louble</option>
                            <option class="opt" value="suite">Lit suite</option>
                        </select>
                        <div class="dropdowns"></div>
                        <input class="check bg-success" type="submit" value="CHECK" />
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="rooms">
        <h4>Our Rooms</h4>
    </div>

    <div class="cards">
        <?php foreach ($datas as $data) { ?>

        <div class="card" style="width: 18rem;">
            <img src="/assets/uploads/<?= $data['imagee'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $data['name_room'] ?>
                </h5>
                <p class="card-text"><?php echo $data['type_room'] ?></p>
                <p>
                    <?php echo $data['price'] ?>$
                </p>
                <a href="#" class="btn btn-primary">Book it Now</a>
            </div>
        </div>
        <?php } ?>

    </div>






    <footer id="ftr" class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Pestana CR7</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do
                        eiusmod
                        tempor
                        incididunt.</p>
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
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do
                        eiusmod
                        tempor
                        incididunt.</p>
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
    <script src="/assets/js/script.js"></script>
</body>

</html>