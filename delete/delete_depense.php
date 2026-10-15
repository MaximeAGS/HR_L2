<?php 
include('../includes/config.php');

if(isset($_GET['id']))
{
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
}

$sql = "DELETE from expenses where id = :id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();

$rows = $query->rowCount();

if($rows > 0 )
{
    echo " <script> alert=('Opération éffectuée avec succès') ;</script>";
    echo  " <script> window.location.href='../expenses.php' ;</script>";
}



?>