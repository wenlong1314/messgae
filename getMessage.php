<?php
	header("Access-Control-Allow-Origin: *");
	date_default_timezone_set('Asia/Shanghai');
	header("Content-Type: text/json; charset=UTF-8");

	// if (!isset($_REQUEST["code"])) {
	// 	exit();
	// }
	echo $_REQUEST;
	
	// switch ($_REQUEST["code"]) {
	// 	case "洗白白":
	// 	case "xbb":
	// 		echo '{"info":"push \"Platforms\"\ngetVariable\npush \"userStorage\"\ngetMember\npush \"误触黑\",false\nsetMember\npush 0,\"Platforms\"\ngetVariable\npush \"userStorage\"\ngetMember\npush \"setDirty\"\ncallMethod\npop\npush \"DatasManager\"\ngetVariable\npush \"a\",false\nsetMember\npush \"DatasManager\"\ngetVariable\npush \"胜利宝箱\",1,1,1,3\ninitArray\nsetMember\npush 0,\"platformCtrl\"\ngetVariable\npush \"setStore\"\ncallMethod\npop\npush \"洗白白成功 1111\",1,\"platformCtrl\"\ngetVariable\npush \"toast\"\ncallMethod\npop"}';
	// 		exit();
	// 	case "删档":
	// 	case "自杀":
	// 	case "葵花宝典":
	// 	case "欲练神功":
	// 	case "自宫":
	// 		echo '{"info":"删档"}';
	// 		exit();
	// 	break;
	// }

	// $conn = new mysqli("127.0.0.1", "MonkeyKing", "9pqB3y6H4zPYgQWuKOdS", "monsterFarmer");

	// $result = $conn->query("select f_info, f_times from codes where f_code=\"" . $_REQUEST["code"] . "\"");
	// $row = $result->fetch_row();
	// if ($row) {
	// 	$times = $row[1];
	// 	if ($times > 0) {
	// 		echo "{\"info\":\"" . $row[0] . "\"}";
	// 		$conn->query("update codes set f_times=" . ($times - 1) . " where f_code=\"" . $_REQUEST["code"] . "\"");
	// 	} else {
	// 		echo "{\"message\":\"此礼包码已被使用过！\"}";
	// 	}
	// } else {
	// 	echo "{\"message\":\"木有此礼包码！\"}";
	// }

	// $conn->close();
?>