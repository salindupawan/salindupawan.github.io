<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/c.png" />
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12  mt-4 col-lg-6 offset-lg-3 rounded rounded-3 mb-3 bg-body shadow " >
                <div class="row p-3">
                    <div class="col-12">
                        <h2 class="fw-bold text-black-50">My Profile</h2>
                        <hr>
                    </div>
                    <div class="col-12 d-flex justify-content-center px-2">
                        <input type="file" class="d-none" id="imageuploader">
                        <label for="imageuploader">
                            <img src="resources/sp.jpg" class="border rounded rounded-circle" style="height: 120px;  width: 120px;" alt="">
                        </label>

                    </div>
                    <div class="col-12 mt-3 mb-3">
                        <div class="row">
                            <div class="col-4 col-lg-4 offset-4 offset-lg-4 d-grid">

                            </div>
                        </div>
                    </div>
                    <div class="col-6  mt-3">
                        <label class="form-label fw-bold">First Name</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="col-6  mt-3">
                        <label class="form-label fw-bold">Last Name</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="col-6  mt-3">
                        <label class="form-label fw-bold">Mobile</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="col-6 mt-3">
                        <label class="form-label fw-bold">Regestered Date</label>
                        <input type="text" readonly class="form-control form-control-sm">

                    </div>
                    <div class="col-12  mt-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="text" readonly class="form-control form-control-sm">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row">





                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">Address Line 1</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">Address Line 2</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">Province</label>
                                        <select name="" id="" class="form-select form-select-sm">
                                            <option value="">Select Province</option>
                                        </select>
                                    </div>
                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">District</label>
                                        <select name="" id="" class="form-select form-select-sm">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">City</label>
                                        <select name="" id="" class="form-select form-select-sm">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div class="col-6  mt-3">
                                        <label class="form-label fw-bold">Postal Code</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    

                    <div class="col-12 mb-3 mt-5">
                        <div class="row">
                            
                            <div class="col-4 offset-4 mt-3 d-grid">
                                <a href="#" class="btn btn-outline-dark rounded rounded-5">Update Profile</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>