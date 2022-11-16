<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/c.png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php" ?>

            <div class="col-12 justify-content-center">
                <div class="row">
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="category.php" class="text-decoration-none text-black-50 fs-5">Mens</a></p>
                    </div>
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="#" class="text-decoration-none text-black-50 fs-5">Womens</a></p>
                    </div>
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="#" class="text-decoration-none text-black-50 fs-5">Kids</a></p>
                    </div>
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="#" class="text-decoration-none text-black-50 fs-5">Accessories</a></p>
                    </div>
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="#" class="text-decoration-none text-black-50 fs-5">Home & Decor</a></p>
                    </div>
                    <div class="col-4 col-lg-2 ">
                        <p class="text-center  "><a href="#" class="text-decoration-none text-black-50 fs-5">Personal Care</a></p>
                    </div>

                    <hr>
                    <div class="col-12 mb-2">
                        <div class="row">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item ">
                                        <img src="resources/carosal i11.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/carosal i2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="resources/carosal i3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "footer.php" ?>
        </div>
    </div>







</body>

</html>