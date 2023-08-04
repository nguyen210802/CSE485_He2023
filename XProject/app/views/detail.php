<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Thông tin nhân viên<br></h3>
    <p>id: <?php echo $employer->getId();?><br></p>
    <p>Name: <?php echo $employer->getName();?><br></p>
    <p>Genderh: <?php echo $employer->getGender();?><br></p>
    <p>Phone number: <?php echo $employer->getPhone();?><br></p>
    <p>Address: <?php echo $employer->getAddress();?><br></p>
    <p>Date of bỉth: <?php echo $employer->getDob();?><br></p>
    <p>Salary: <?php echo $employer->getSalary();?><br></p>
</body>
</html>