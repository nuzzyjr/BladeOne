@extends ("layouts.app")


@section ("content")

<?php

    $conn = mysqli_connect("localhost","root","","phpcrud")
    or die ("Sorry, can't connect.");

    $id = $_POST['id'];

    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM people WHERE id='$id'"));
        

    ?>
    </br>
    
    <div class="third">
    </div>


    <div class="third blackback">
    <form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
    <p>Edit first name: <input class="form-control" type="text" name="fname" value="<?php echo $data['fname'] ?>"/></p>
    <p>Edit surname: <input class="form-control" type="text" name="sname" value="<?php echo $data['sname'] ?>"/></p>
    <p>Edit age: <input class="form-control" type="text" name="age" value="<?php echo $data['age'] ?>"/></p>
    <input class="btn btn-primary" type="submit" value="Update Details" />
    <input class="btn btn-danger" type="button" value="Back" style="display: inline-block; float:right;" onclick="location.href='edit_table.php'"/>
    </form>
   
    </div>
</body>
</html>
@endsection