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
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h3>LIST OF EMPLOYEES</h3>
            <div class="text-end">
                <a href="#" class="btn btn-primary">+ AD New Employee</a>
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
                <th scope="row"><?php echo $employer->getId();  ?></th>
                <td><?php echo $employer->getName();  ?></td>
                <td><?php echo $employer->getAddress();  ?></td>
                <td><?php echo $employer->getSalary();  ?></td>
                <td>
                    <a href="index.php/?c=employer&a=detail&id=<?= $employer->getId();?>">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </td>
                <td>
                    <a href="">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="delete-button" data-id="<?php echo $employer->getId(); ?>">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>

            </tbody>
        </table>
    </main>
</div>
</body>
</html>