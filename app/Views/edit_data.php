<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Data</title>
    <style>
        .jumbotron {
            background-color: #d3d3d3;
        }
    </style>
</head>

<body class="container">
    <div class="jumbotron">
        <h4 class="text-center">CodeIgnitor 4 Edit Data</h4>
    </div>

    <?php
    $validation = \Config\Services::validation();
    ?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">Edit Data</div>
                <div class="col text-right">

                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="<?php echo base_url("/crud/edit_validation") ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value=" <?php echo $user_data['name']; ?>" class="form-control" />
                    <?php
                    if ($validation->getError('name')) {
                        echo '<div class="alert alert-danger mt-2">' . $validation->getError('name') . '</div>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user_data['email']; ?>" />
                    <?php
                    if ($validation->getError('email')) {
                        echo '<div class="alert alert-danger mt-2">' . $validation->getError('email') . '</div>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male" <?php if ($user_data['gender'] == "Male") {
                                                    echo "selected";
                                                } ?>>Male</option>
                        <option value="Female" <?php if ($user_data['gender'] == "Female") {
                                                    echo "selected";
                                                } ?>>Female</option>
                    </select>
                    <?php
                    if ($validation->getError('gender')) {
                        echo '<div class="alert alert-danger mt-2">' . $validation->getError('gender') . '</div>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $user_data["id"]; ?>" />
                    <button type="submit" class="btn btn-outline-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>