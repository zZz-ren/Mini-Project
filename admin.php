<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/admin-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Package</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Name</label>
                                    <input type="text" name='place' class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Description</label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                    <input type="file" name='image' class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">status</label>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name='add_package_btn'>Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>