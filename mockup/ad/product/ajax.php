<?php
require_once("../../config/config.php");


if (!empty($_POST)) {
	if (isset($_POST['action'])) {
			
if (isset($_POST['id'])) {
$id = $_POST['id'];
$sql = "delete from dtb_product where id = $id " ;
execute($sql);

		}
	}
}