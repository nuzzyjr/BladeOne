@extends ("layouts.app")


@section ('content')


<?php

echo "<table class='table'>
<tr><th>First Name</th><th>Surname</th><th>Age</th><th>Edit</th><th>Delete</th></tr>";

$conn = mysqli_connect("localhost","root","","phpcrud") or die ("Could not connect to database!");


$sql = "SELECT * FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".
         $row["fname"]."</td>
         <td>".
         $row["sname"].
        "</td>
        <td>".
        $row["age"]."</td>
        <td ><form method='post' action='edit_script.php'>
        <input type='hidden' name='id' value='".$row['id']."'/>
        <button class='btn btn-primary' type='submit'>Edit</button>
        </form> 
        </td>
        <td><form method='post' action='delete_script.php'>
        <input type='hidden' name='id' value='".$row['id']."'/>
        <button class='btn btn-danger' type='submit'>Delete</button>
        </form> 
        </td></tr>";
}

echo "</table>";

}
$conn->close();
?>

@endsection