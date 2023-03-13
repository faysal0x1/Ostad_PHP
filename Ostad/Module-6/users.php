<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto auto;
        }
        th{
            background-color: cyan;
            padding: 5px 3px;
        }
    </style>
</head>
<body>
    <header>
       <div style="padding: 10px 20px; margin-bottom: 10px; background-color: green; text-decoration: none; text-align: center; position: fixed; margin-top:10rem;"> <a href="./index.html" style="text-decoration: none; color:white; ">Registration Again</a></div>
    </header>
<?php
$file = fopen("users.csv", "r");
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Profile Picture</th>
<th>Date</th>
</tr>";


while (($line = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    echo "<td>" . $line[0] . "</td>";
    echo "<td>" . $line[1] . "</td>";
    echo "<td><img src='./uploads/" . $line[2] . "' width='100' height='100'></td>";
    echo "<td>" . $line[3] . "</td>";
    echo "</tr>";
}
echo "</table>";
fclose($file);
?>
</body>
</html>