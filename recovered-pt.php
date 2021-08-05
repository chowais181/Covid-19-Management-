<?php
  if(isset($_POST['recovered-patients']))
  {

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM recovered_patients";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Recovered Patients</title>
</head>
<body>
 <table>
  <tr>
   <th>Patient ID</th>
   <th>Patient Name</th>
   <th>Patient Age</th>
   <th>Patient Address</th>
  </tr>

 <?php

    while($data=mysqli_fetch_assoc($records))
    {

    echo "<tr>";
    echo "<td>".$data['pt_id']."</td>";
    echo "<td>".$data['pt_name']."</td>";
    echo "<td>".$data['pt_age']."</td>";
    echo "<td>".$data['pt_address']."</td>";

    echo "</tr>";
    }
 }
?>   
 </table>

</body>
</html>
