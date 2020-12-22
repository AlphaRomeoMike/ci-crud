<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>CodeIgniter 4 CRUD Function</title>
<style>
    .jumbotron{
        background-color: #d3d3d3;
    }
</style>
</head>
<body class="container">
    <div class="jumbotron">
        <h4 class="display-2 text-center">CodeIgnitor 4 CRUD Functions</h4>
    </div>
    <div class="col text-right"><a href="<?php echo base_url("/crud/add") ?>" class="btn btn-success">Add Data</a></div>
    <br>
    <div class="display-4 text-center">Sample Data</div>
    <br>
    <?php
        $session = \Config\Services::session();
        if($session->getFlashdata('success')) {
            echo '<div class="alert alert-success">'.$session->getFlashdata("success").'</div>';
        }
    ?>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <td><strong>S#</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Gender</strong></td>
                <td><strong>Action</strong></td>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 1;
            if($user_data) {
                foreach($user_data as $user) {
                    echo    '<tr>
                                <td>'.$counter++.'</td>
                                <td>'.$user["name"].'</td>
                                <td>'.$user["email"].'</td>
                                <td>'.$user["gender"].'</td>
                                <td><a href="'.base_url().'/crud/fetch_single_data/'.$user["id"].'" class="btn btn-outline-dark">Edit</a>
                                <button type="button" class="btn btn-outline-danger" onclick="delete_data('.$user["id"].')">Delete</button></td>

                            </tr>';
                }
            }
        ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php
            if($pagination_link) {
                $pagination_link->setPath('crud');
                echo $pagination_link->links();
            }
        ?>
    </div>
    <script>

    function delete_data(id) {
        if(confirm("Are you sure, you want to delete?")) {
            window.location.href = "<?php echo base_url(); ?>/crud/delete/"+id;
        }
        console.log(id);
        return false;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>
</html>