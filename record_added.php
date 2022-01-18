<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Added</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyles.css"/>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","phpcrud")
        or die ("Sorry, can't connect.");

        $fname = strip_tags($_POST['fname']);
        $sname = strip_tags($_POST['sname']);
        $age = strip_tags($_POST['age']);
    

        $query = "INSERT INTO people (fname, sname, age) VALUES ('".$fname."','".$sname."','".$age."'  )";

        mysqli_query($conn, $query);
        
    ?>
  
    <div style="width:50%; margin:auto;">
        <h1 style="padding-top :50px;">You have added a record.</h1>
    </br>
    <button class="btn btn-primary" onclick = "location.href = 'add_row.php'" >Return</button>
    </div>
</body>
</html>