<?php 
  include("db.php");


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    Enter key word:
    <input type="text" name="search" id="search"></input>
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>
<?php 

if(isset($_GET['submit']))
{
 $keyword=$_GET['search'];
//  echo $keyword;
$url_components = parse_url($keyword);
   parse_str($url_components['query'], $params);
    $key=$params['source'];
      $result = mysqli_query($conn,"select table_name1 from keyword_table where keyword='$key'");

      while($row = mysqli_fetch_array($result))
      {

      $tablename=$row['table_name1'];
      }
      echo "<table border='1'>
      <tr>
      <th>column1</th>
      <th>column2</th>
      </tr>";
      $result1=mysqli_query($conn,"select * from  $tablename");
      while($row = mysqli_fetch_array($result1))
      {
        echo "<td>" . $row['column1'] . "</td>";
        echo "<td>" . $row['column2'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";

      // echo "</table>";

 
}

?>