<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Operation</title>

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
    <div class="container my-5 w-75">
        <div class="clear-fix ">
            <h1 class="text-center">Edit Products</h1>
        </div>
        <br><br>
        <div class="container ">

            <form action="<?php echo base_url() . 'index.php/Crud/Update/'?><?php echo $singleProduct->id; ?>"
                method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="name" placeholder="Enter Name" class="form-control"
                                autocomplete="off" value="<?php echo $singleProduct->name; ?>">
                            <label>Product Name:</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="price" placeholder="Enter price" class="form-control"
                                autocomplete="off" value="<?php echo $singleProduct->price; ?>">
                            <label>Product Price: </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="quantity" name="quantity" placeholder="Enter quantity" class="form-control"
                                autocomplete="off" value="<?php echo $singleProduct->quantity; ?>">
                            <label>Product Quantity:</label>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <button type="submit" class="btn btn-success" name="update" value="Update">Update</button>
            </form>
        </div>
    </div>

</body>

</html>