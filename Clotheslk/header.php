<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="col-12 mt-1">
        <div class="row mb-2">
            <div class="col-12 offset-lg-1 col-lg-1 d-flex justify-content-center ">
                <a href="home.php"> <img src="resources/logo.png" style="width: 100px;" alt=""></a>
            </div>
            <div class="col-10 ms-3 ms-lg-0 col-lg-8 mt-3 ">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 ">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control " placeholder="Search Anything" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2" onclick="signUp();"><i class="bi bi-search"></i></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-1  col-lg-2">
                <div class="row">
                    <div class="col-2 my-3 d-none d-lg-block">
                        <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="resources/cart.png" style="width: 30px;" alt="">
                            
                        </a>
                    </div>
                    <div class="col-2 ms-2 d-none my-3 d-lg-block">
                        <img src="resources/wishlist.png" onclick="window.location='watchlist.php'" style="width: 30px;" alt="">
                        
                    </div>
                    <div class="col-4 offset-2">
                        <div class="row">
                            <div class="dropdown">
                                <label class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="resources/sp.jpg" class="round rounded-circle" style="width: 50px; height: 50px;" alt="">
                                </label>
                                <ul class="dropdown-menu">

                                    <li>
                                        <p class="dropdown-item fw-bold curserpoint">Hello Salindu!</p>
                                    </li>
                                    <li><a class="dropdown-item" href="userProfile.php">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#">My Sellings</a></li>
                                    <li><a class="dropdown-item" href="addProduct.php">Add Products</a></li>
                                    <li><a class="dropdown-item" href="updateProduct.php">Update Products</a></li>
                                    <li><a class="dropdown-item" href="watchlist.php">Wishlist</a></li>
                                    <li><a class="dropdown-item" href="#">Purchase History</a></li>
                                    <li><a class="dropdown-item" href="singleProductView.php">Single Product View</a></li>
                                    <li><a class="dropdown-item" href="#">Saved</a></li>
                                    <li><a class="dropdown-item d-block d-lg-none" href="#">Wishlist</a></li>

                                    <li><a class="dropdown-item d-block d-lg-none" href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            Cart
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title fs-2" id="offcanvasRightLabel">Cart <span class="fs-5">(1)</span></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="card mb-3 shadow ">
                                            <div class="row g-0">
                                                <div class="col-4 p-2">
                                                    <img src="resources/gf1.jpg" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title fw-bold text-decoration-underline">Deedat Longsleeves p43a2 </h5>
                                                        <span class="fs-6 fw-bold text-black-50"> Rs. 4100 .00</span><br>
                                                        <div class="row">
                                                            <div class="col-12 mt-3">
                                                                <span class="fs-6 mt-3 text-black-50">Colour : </span>
                                                                <span class="fs-6 text-black-50"> Navy Blue</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <span class="fs-6 mt-3 text-black-50">Size : </span>
                                                                <span class="fs-6 text-black-50"> M</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <span class="fs-6 mt-3 text-black-50">Quantity : </span>
                                                                <span class="fs-6 text-black-50"> 1</span>
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <span class="fs-6 mt-3 text-decoration-underline fw-bold text-danger">Remove</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12 d-none  d-flex justify-content-center">
                                        <div class="row ">
                                            <div class="col-6 offset-3 d-flex justify-content-center mt-5">
                                                <img src="resources/emptyCart.png" style="height: 300px;" alt="">
                                            </div>

                                            <div class="col-12 text-center" style="margin-bottom: 140px;">
                                                <h3 class="fw-bold fs-5 ">Ooops... You don't have anything in the cart at the moment.</h3>
                                               
                                                <div class="row">
                                                    <div class="col-6 d-grid offset-3 mt-4">
                                                        <button class="btn btn-outline-primary  fs-5 rounded rounded-5">Let's find something</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="offcanvas-bottom ">
                                <div class="row px-3 ">
                                    <div class="col-6">
                                        <p class="fs-6">Total (2 items)</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p class="fs-6 fw-bold">Rs. 5000.00</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fs-6">Shipping</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p class="fs-6 fw-bold">Rs. 600.00</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fs-5 fw-bold">Subtotal</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p class="fs-5 fw-bold">Rs. 5600.00</p>
                                    </div>
                                    <div class="col-6 mb-3 d-grid">
                                        <button class="btn btn-primary rounded rounded-5">Checkout</button>
                                    </div>
                                    <div class="col-6 mb-3 d-grid">
                                        <button class="btn btn-outline-primary rounded rounded-5">More Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </div>

    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>