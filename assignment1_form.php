<?php
$name='';
$email='';
$gender='';
$lang='';
$country='';
if (!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $lang=$_POST['lang'];
    $country=$_POST['country'];
}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>form</title>
<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>student info</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" name="name" class="form-control" id="name"></input>
                </div><br>

                <div class="form-group">
                    <label for="name"> Email </label>
                    <input type="text" name="email" class="form-control" id="email"></input>
                </div><br>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <label><input type="radio" name="gender" value="male">Male</label>
                    <label><input type="radio" name="gender" value="female">Female</label>
                </div><br>

                <div class="form-group">
                    <label for="language">Language</label>
                    <label><input type="checkbox" name="lang[]" value="nepali">Nepali</label>
                    <label><input type="checkbox" name="lang[]" value="english">English</label>
                    <label><input type="checkbox" name="lang[]" value="Korean">Korean</label>
                </div><br>

                <div class="form-group">
                    <label for="Country">Country</label>
                    <select name="country" id="country" class="form-control">
                        <option disabled selected>---Select Country---</option>
                        <option value="nepal">Nepal</option>
                        <option value="china">China</option>
                        <option value="korea">Korea</option>
                    </select>
                </div><br>

                <div class="mb-3">
                    <button class="btn btn-success">Add Record</button>
                </div><br>


            </form>
        </div>
        <div class="col-md-8">
            <h1> Name:<?=$name; ?></h1>
            <h1> Email:<?=$email; ?></h1>
            <h1> Gender:<?=$gender; ?></h1>
            <h1> Language:<?=$lang[0]; ?></h1>
            <h1> Country:<?=$country; ?></h1>
        </div>
    </div>
</div>
</body>
</html>