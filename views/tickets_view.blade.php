@extends ("layouts.app_orange")


@section ('content')


    <?php

        $conn = mysqli_connect("localhost","root","","phpcrud") or die ("Could not connect to database!");


        $sql = "SELECT fname FROM people WHERE id='25'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "First name: " . $row["fname"]. "<br>";
        }
        }
        $conn->close();
    ?>

@endsection