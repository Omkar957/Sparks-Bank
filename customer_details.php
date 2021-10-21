<?php 
$conn = mysqli_connect('localhost','omkar','Jimjimdot@5','omkar');
if($conn===false)
{
    die("ERROR :Could not connect ".mysqli_connect_error());
}
else
echo"Connection Established";

$sql="insert into customer_details(id,name,email,balance) values
(1, 'Omkar', 'omkar5@gmail.com', 50000),
(2, 'Dhanraj', 'dhanraj@gmail.com', 30000),
(3, 'Eeshita', 'eeshita@gmail.com', 39900),
(4, 'Anusha', 'anusha@gmail.com', 10000),
(5, 'Mrunmayee', 'mrunmayee@gmail.com', 40000),
(6, 'Sahil', 'sahil@gmail.com', 19990),
(7, 'Saniya', 'saniya@gmail.com', 50009),
(8, 'Sidhant', 'sidhant69@gmail.com', 40100),
(9, 'Shreyas', 'shreyu@gmail.com', 30000),
(10, 'Shantanu', 'tuntun@gmail.com', 50001);
";
$query=mysqli_query($conn,$sql);
if($query)
    echo'data inserted successfully';

    
?>
