<?php
require_once('../config.php');
$id = $_GET['info_id'];
$get_image_location = "SELECT image_location FROM company_infos WHERE id=$id";
$from_db = mysqli_query($db_conect, $get_image_location);
$after_assoc = mysqli_fetch_assoc($from_db);
unlink('../' . $after_assoc['image_location']);
$delete_query = "DELETE FROM `company_infos` WHERE id=$id";
mysqli_query($db_conect, $delete_query);
header('location: info_item.php');
