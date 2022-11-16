<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/c.png" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "header.php" ?>
            <div class="row ">
                <div class="col-12">
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#" class="text-decoration-none text-black fw-bold">Home</a></li>
                            <li class="breadcrumb-item "><a href="#" class="text-decoration-none text-black fw-bold">Mens</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12 col-lg-5 mb-3 offset-lg-1">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="resources/gf2.jpg" class="w-100" alt="">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3 col-lg-2  mt-2">
                                    <img src="resources/gf1.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-3 col-lg-2  mt-2">
                                    <img src="resources/gf1.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-3 col-lg-2 mt-2">
                                    <img src="resources/gf1.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5 mt-4 mt-lg-0 offset-lg-1">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold">DEEDAT Travelling Bag</h2>
                            <h4 class="fw-bold text-black-50">Rs. 4300.00 + <small class="fs-6">Rs. 600.00 (Shipping)</small></h4>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-2 col-lg-1">
                                    <img src="payment_method/visa_img.png" class="w-100" alt="">
                                </div>
                                <div class="col-2 col-lg-1">
                                    <img src="payment_method/mastercard_img.png" class="w-100" alt="">
                                </div>
                                <div class="col-2 col-lg-1">
                                    <img src="payment_method/american_express_img.png" class="w-100" alt="">
                                </div>

                                <div class="col-2 col-lg-1">
                                    <img src="payment_method/paypal_img.png" class="w-100" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fs-5 fw-bold text-black-50">Colour</p>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control text-center border border-dark" disabled value="Navy Blue">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <p class="fs-5 fw-bold text-black-50">Size</p>
                                </div>
                                <div class="col-3">
                                    <select name="" id="" class="form-select border border-dark">
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <p class="fs-5 fw-bold text-black-50">Quantity</p>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control text-center border border-dark" min="1" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12  mt-3">
                                    <p class="text-success fw-bold fs-6"><i class="bi bi-info-circle-fill"></i> You have selected the maximum quantity availble at the moment.</p>
                                </div>
                                <div class="col-12 d-none mt-3">
                                    <p class="text-danger fw-bold fs-6"><i class="bi bi-info-circle-fill"></i> Hmm...Sorry, requested amount for this item is not availble at the moment.</p>
                                </div>
                                <div class="col-6 mt-4 d-grid">
                                    <button class="btn btn-primary rounded rounded-5">Buy Now</button>
                                </div>
                                <div class="col-6 mt-4 d-grid">
                                    <button class="btn btn-outline-primary rounded rounded-5"><i class="bi bi-cart4 fs-5"></i> &nbsp; &nbsp; Add to Cart</button>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 ">
                                    <p class="fs-5 fw-bold text-black-50">Description</p>
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label">Brand - MBRK
                                        Product - T-Shirt
                                        Material - Pique Lycra
                                        Collar – Polo
                                        Sleeve - Short Sleeve
                                        Texture – Stripe
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fs-3">Similar Products</h2>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-2 p-2">
                                    <a class="text-decoration-none text-black" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">

                                        <div class="card shadow p-3">
                                            <img src="resources/gf1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-decoration-underline">Deedat Longsleeves p43a2 </h5>
                                                <span class="card-text text-primary">Rs. 4100 .00</span> <br />

                                                <a class="col-12 btn btn-primary rounded rounded-5 mt-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Buy Now</a>
                                                <button class="col-12 btn btn-info text-white rounded rounded-5 mt-2"> Add to Cart</button>
                                                <button class="col-12 btn btn-outline-primary rounded rounded-5 mt-2">
                                                    <i class="bi bi-heart  fs-5"></i> &nbsp; Add to Watchlist
                                                </button>

                                            </div>
                                        </div>
                                    </a>



                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header d-flex justify-content-end">


                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>

                                        <div class="offcanvas-body">
                                            <div class="row ">

                                                <div class="col-12   rounded rounded-2 p-3">
                                                    <img src="resources/gf2.jpg" style="width: 360px; " alt="">
                                                </div>
                                                <div class="col-2  rounded rounded-2  mt-2">
                                                    <img src="resources/gf1.jpg" style="width: 50px;" alt="">
                                                </div>
                                                <div class="col-2  rounded rounded-2  mt-2">
                                                    <img src="resources/gf1.jpg" style="width: 50px;" alt="">
                                                </div>
                                                <div class="col-2    rounded rounded-2  mt-2">
                                                    <img src="resources/gf1.jpg" style="width: 50px;" alt="">
                                                </div>
                                            </div>
                                            <div class="row ">

                                                <div class="col-12 d-none fs-5 border-bottom mt-3 pb-3">
                                                    <h6><span class="badge bg-white border-success text-success fs-6"><i class="bi bi-check2-square  fs-6"></i> &nbsp; In Stock</span></h6>
                                                </div>
                                                <div class="col-12 fs-5 border-bottom mt-3 pb-3">
                                                    <h6><span class="badge bg-white border-danger text-danger fs-6"><i class="bi bi-x-square"></i> &nbsp; Out of Stock</span></h6>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Deedat Longsleeves p34f3</h5>
                                                    <p class="fw-bold text-black-50">Rs. 3450.00</p>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label class="form-label">Brand - MBRK
                                                        Product - T-Shirt
                                                        Material - Pique Lycra
                                                        Collar – Polo
                                                        Sleeve - Short Sleeve
                                                        Texture – Stripe
                                                    </label>
                                                </div>

                                                <div class="col-4 mt-4">
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <h5>Colour</h5>
                                                        </div>
                                                        <div class="col-12 ">
                                                            <input type="text" class="form-control text-center" disabled value="Navy Blue">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-8 mt-4">
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <h5>Size</h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <select name="" id="" class="form-select">
                                                                <option value="">Xs</option>
                                                                <option value="">Xs</option>
                                                                <option value="">Xs</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>




                                                <div class="col-12 mt-3 ">
                                                    <div class="row ">
                                                        <div class="col-4 mt-4 d-grid">
                                                            <input type="number" class="form-control border-primary text-primary form-control-sm rounded rounded-5 fs-5 text-center" value="1" min="1">

                                                        </div>
                                                        <div class="col-8 d-grid mt-4">
                                                            <button class="btn btn-primary btn-lg rounded rounded-5 text-center">Buy it Now</button>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
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