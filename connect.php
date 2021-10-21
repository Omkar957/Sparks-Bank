<?php


$conn = mysqli_connect('localhost','omkar','Jimjimdot@5','omkar');
if($conn===false)
{
    die("ERROR :Could not connect ".mysqli_connect_error());
}
else
echo"Connection Established";

// INSERT QUERIES
$sql="insert into custom(sno,sender,reciever,balance,datetime) values 
(1, 'Omkar', 'Mrunmayee', 91, '2021-04-08 18:08:56'),
(2, 'Dhanraj', 'Anusha', 9, '2021-04-08 18:08:56'),
(3, 'Mrunmayee', 'Saniya', 100, '2021-04-08 14:55:43'),
(4, 'Anusha', 'Sidhant', 1, '2021-04-08 14:58:55'),
(5, 'Eshita', 'Dhanraj', 5000, '2021-06-03 21:49:16'),
(6, 'Sahil', 'Saniya', 5000, '2021-06-05 20:41:06'),
(7, 'Saniya', 'Anusha', 5000, '2021-06-05 23:34:40'),
(8, 'Sidhant', 'Omkar', 5000, '2021-06-06 10:42:24');
";
$query=mysqli_query($conn,$sql);
if($query)
    echo'data inserted successfully';

?>
