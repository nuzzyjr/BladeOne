@extends ('layouts.app')

@section("content")

<?php

echo "<table class='table'>
<tr><th>First Name</th><th>Surname</th><th>Age</th></tr>";

$conn = mysqli_connect("localhost","root","","phpcrud") or die ("Could not connect to database!");


$sql = "SELECT fname, sname, age FROM people";
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
        $row["age"].
        
        "</td></tr>";
}

echo "</table>";

}
$conn->close();
?>
@endsection