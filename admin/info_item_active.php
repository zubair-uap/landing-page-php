<?php
// print_r($_GET);
require_once('../config.php');

$id = $_GET['info_id'];
$update_sts_query = "UPDATE company_infos SET active_sts=2 WHERE id=$id";
mysqli_query($db_conect, $update_sts_query);
header('location: info_item.php');
