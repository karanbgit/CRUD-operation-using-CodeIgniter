<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!--  font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-4">
        <div class="clear-fix ">
            <h1 style="float: left">All Products</h1>
            <button style="float: right" class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#modal">
                <i class="fa-solid fa-plus mx-2"></i>Add New Student
            </button>
        </div>


        <div class="modal fade" id="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="model-header">
                        <p class="fs-3 text-center mt-2 fw-bold">Add Products </p>
                    </div>

                    <div class="modal-body ">
                        <form action="<?php echo base_url() . 'index.php/Crud/AddProduct/' ?>" method="post">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control"
                                            autocomplete="off">
                                        <label>Product Name:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" name="price" placeholder="Enter price" class="form-control"
                                            autocomplete="off">
                                        <label>Product Price: </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <div class="form-floating">
                                        <input type="quantity" name="quantity" placeholder="Enter quantity"
                                            class="form-control" autocomplete="off">
                                        <label>Product Quantity:</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <button type="submit" class="btn btn-success" name="insert"
                                value="Add Product">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped text-center mt-5">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product_details as $products): ?>
                    <tr>
                        <td><?php echo $products->name ?></td>
                        <td><?php echo $products->price ?></td>
                        <td><?php echo $products->quantity ?></td>
                        <td>
                            <a class="btn btn-primary me-3"
                                href="<?php echo base_url() . 'index.php/Crud/EditProduct/' ?><?php echo $products->id ?>">Edit</a>

                            <a class="btn btn-danger"
                                href="<?php echo base_url() . 'index.php/Crud/DeleteProduct/' ?><?php echo $products->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


    <!-- When Error show   -->
    <?php if ($this->session->flashdata('error')): ?>
        <div class="text-center bg-danger container w-25" style="color: #fff">
            <?php echo $this->session->flashdata('error') ?>

        </div>

    <?php endif; ?>

    <!-- When data inserted -->
    <?php if ($this->session->flashdata('inserted')): ?>
        <div class="text-center bg-success container w-25" style="color: #fff">
            <?php echo $this->session->flashdata('inserted') ?>

        </div>

    <?php endif; ?>

    <!-- When data Updated -->

    <?php if ($this->session->flashdata('updated')): ?>
        <div class="text-center bg-success container w-25" style="color: #fff">
            <?php echo $this->session->flashdata('updated') ?>

        </div>

    <?php endif; ?>

    <!-- When data Deleted -->

    <?php if ($this->session->flashdata('deleted')): ?>
        <div class="text-center bg-success container w-25" style="color: #fff">
            <?php echo $this->session->flashdata('deleted') ?>

        </div>

    <?php endif; ?>



</body>

</html>