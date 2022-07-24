<?php
include_once 'models/Users.php';
include_once 'models/orders.php';

$allUsers=new Users();
$userListNew = new Users();
$allOrders=new Orders();
echo '<pre>';
$allUsers->getUsers();
// $allUsers->setUsers(
//     ["Avi"=>[
//         "id"=>222,
//         "status"=>"inActive",
//         "age"=>22
//     ]]
//     );
   echo "<hr>";
// $allUsers->getUsers();
$userListNew->getUsers();
echo "<hr>";
$allOrders->getOrders();
