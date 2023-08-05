<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexbook</title>
    <!--    CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php
if(isset($_GET['addSuccess'])){
    echo "<h4 class='text-success text-center'>Bạn đã thêm thành công</h4>";
}
if(isset($_GET['editSuccess'])){
    echo "<h4 class='text-success text-center'>Bạn đã sửa thành công</h4>";
}
?>
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h3>LIST OF EMPLOYEES</h3>
            <div class="text-end">
                <a href="#" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#createModal">+ Add New Employee</a>
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- head -->
                            <div class="modal-header">
                                <div>
                                    <h2 class="modal-title" id="exampleModalLabel">Add New Employee</h2>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <div class="modal-body">
                                <form action="index.php?c=employer&a=add" method="post">
                                    <!-- names -->
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name" name="txtAddName"/>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control my-3" placeholder="Address" name="txtAddAddress"/>
                                    <input type="number" class="form-control my-3" placeholder="Salary" name="txtAddSalary"/>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-success btn-lg" data-bs-dismiss="modal">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <table class="table table-striped table-bordered mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col" colspan="3" class="text-center">Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($employees as $employer) {  ?>
            <tr>
                <th scope="row"><?php echo $employer->getId();?></th>
                <td><?php echo $employer->getName();?></td>
                <td><?php echo $employer->getAddress();?></td>
                <td><?php echo $employer->getSalary();?></td>
                <td>
                    <a href="index.php/?c=employer&a=detail&id=<?php echo $employer->getId();?>">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </td>
                <td>
                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal_<?php echo $employer->getId(); ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <div class="modal fade" id="editModal_<?php echo $employer->getId(); ?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header">
                                    <div>
                                        <h2 class="modal-title" id="exampleModalLabel">Edit Employee</h2>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <div class="modal-body">
                                    <form action="index.php/?c=employer&a=edit&id=<?php echo $employer->getId();?>" method="post">
                                        <!-- names -->
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Name" name="txtEditName" value="<?php echo $employer->getName(); ?>"/>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control my-3" placeholder="Address" name="txtEditAddress" value="<?php echo $employer->getAddress(); ?>"/>
                                        <input type="number" class="form-control my-3" placeholder="Salary" name="txtEditSalary" value="<?php echo $employer->getSalary(); ?>"/>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-success btn-lg" data-bs-dismiss="modal">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal_<?php echo $employer->getId(); ?>">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                    <div class="modal fade" id="deleteModal_<?php echo $employer->getId(); ?>" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header">
                                    <div>
                                        <h2 class="modal-title" id="exampleModalLabel">Delete</h2>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <div class="modal-body">
                                    <p>Are you sure you want to delete it?</p>
                                </div>
                                <div class="model-footer d-flex justify-content-between p-3">
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form action="index.php/?c=employer&a=delete&id=<?php echo $employer->getId();?>" method="post">
                                        <input type="hidden" name="employee_id" value="<?php echo $employer->getId(); ?>">
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>

            </tbody>
        </table>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>