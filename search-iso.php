<?php

  if(isset($_POST['search']))
  {
    $s_no=$_POST['s_no'];

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM isolation_wards
              WHERE SNO='$s_no'";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>data extractor</title>
</head>
<body>
 <table>
  <tr>
   <th>SNO</th>
   <th>District</th>
   <th>Province</th>
   <th>Hospital</th>
   <th>Ventilators</th>
   <th>Beds</th>
  </tr>

 <?php

 while($data=mysqli_fetch_assoc($records))
 {

  echo "<tr>";

  echo "<td>".$data['SNO']."</td>";
  echo "<td>".$data['district']."</td>";
  echo "<td>".$data['province']."</td>";
  echo "<td>".$data['hospital']."</td>";
  echo "<td>".$data['ventilators']."</td>";
  echo "<td>".$data['beds']."</td>";

  echo "</tr>";


   }
 }
?>   
 </table>

</body>
</html>

