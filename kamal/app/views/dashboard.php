<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
    #dash {
        padding-top: 7%;
    }

    p {
        cursor: pointer;
        color: burlywood;
    }

    h6 {
        color: darkcyan;
    }

    .logout button {
        border-radius: 15px;
    }
    </style>
    <title>dashboard</title>
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
                            <a href="/logout" class="nav-link logout">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section id="dash" class="pb-5 header text-center">
        <h3>Dashboard</h3>
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">

                            <!-- Responsive table -->
                            <div class="table-responsive">
                                <table class="table m-0">

                                    <thead>
                                        <tr>
                                            <th scope="col">Room</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $data) { ?>
                                        <tr>
                                            <td><?php echo $data['name_room'] ?></td>
                                            <td>
                                                <?php echo $data['type_room'] ?>
                                            </td>
                                            <td><?php echo $data['price'] ?>$</td>
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">

                                                        <a href="editroom/index/<?= $data['id_room'] ?>">
                                                            <p>Edit</p>
                                                        </a>

                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="booking/delete/<?= $data['id_room'] ?>">
                                                            <p>Delete</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <?php } ?>
                                </table>

                            </div>
                        </div>
                        <a href="/addroom">
                            <h6>Add Room<h6>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section id="dash" class="pb-5 header text-center">
        <h3>Reservations</h3>
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">

                            <!-- Responsive table -->
                            <div class="table-responsive">
                                <table class="table m-0">

                                    <thead>
                                        <tr>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Room</th>
                                            <th scope="col">Arrival Date</th>
                                            <th scope="col">Departure Date</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Kamal</td>
                                            <td>El Harite</td>
                                            <td>room n°3</td>
                                            <td>01/12/2022</td>
                                            <td>12/12/2022</td>
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">

                                                        <a>
                                                            <p>Edit</p>
                                                        </a>

                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a>
                                                            <p>Delete</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="#" style="text-decoration:none;">Home</a></li>
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