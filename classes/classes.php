<?php

if(!isset($_GET["class"])) {
	print("please pass in a class number with parameter of get");
	die();
}

$class = $_GET["class"];
$list = file("classes.txt", FILE_IGNORE_NEW_LINES);
$data = array();
$primary_array = array();
$secondary_array = array();
$perk_array = array();
$streak_array = array();
foreach($contents as $item) {
	# num:primary-pro-att:secondary-att:perks-1-2-3:killstreak-1-2-3
	# 1  :2              :3            :4          :5
	$item_info = explode(":", $item); 
	$primary_info = explode("-", $item_info[1]);
	$secondary_info = explode("-", $item_info[2]);
	$perks = explode("-", $item_info[3];
	$streaks = explode("-", $item_info[4]);
	$primary_array = array("name" => $primary_info[0], "proficiency" => $primary_info[1], "attachments" => $primary_info[2]);
	$secondary_array = array("name" => $secondary_info[0], "attachments" => $secondary_info[1]);
	$perk_array = array("Perk 1" => $perk_info[1], "Perk 2" => $perk_info[2], "Perk 3" => $perk_info[3]);
	$streak_array = array("Streak 1" => $streak_info[1], "Streak 2" => $streak_info[2], "Streak 3" => $streak_info[3]);
	$data[] = array("class" => $item_info[0], "Primary" => $primary_array, "Secondary" => $secondary_array, "Perks" => $perk_array, $streak_info[0] => $streak_array);
}
header("Content-type: application/json");
print json_encode($data);
?>
