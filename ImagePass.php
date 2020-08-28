<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
require 'database.php';
require 'jsonenc.php';
require 'aplLog.php';

$err = array();
$pg = null;

	try {

		$sqlName_user = "";
		$exResult = "";
    //ここでサーバーの情報を入れている。database.phpを見ると情報が書いてあるからそこをいじればOK
		$pg = connect_pg();

		$stmt = "";
		$params = array();

		$sql = "SELECT * FROM img_info_dtl";
		$sqlName_user = "root";
    $rs = pg_prepare($pg,$sqlName_user,$sql);
		$exResult = pg_execute($pg, $sqlName_user,$params);


		$rows = pg_fetch_all($exResult);

		$ImagePass= array();

    if( $rows != false ) {

			foreach ($rows as $row) {//ぐるぐるまわす

				$ImagePass[] = array(
						'id'=>$row['id'],
						'seq'=>intval($row['seq']),
						'seq'=>$row['seq'],
						'img_pass'=>intval($row['img_pass']),
						'img_pass'=>$row['img_pass'],
						'outdate'=>$row['outdate'],
						'outdate'=>intval($row['outdate']));



		}
}
    close_pg($pg);
    //DB接続を切ってる気がする
    //↑違かった。これはclose_pgってやつを呼んでいた。結局はDB切断するやつなんだけど、
		echo exp_json_encode($ImagePass);
    //ImagePass配列をJSONに変換している気がする。
//↑違かった。上のやつはexp_ison_encodeというものをjsonenc.phpから呼び出しているだけだった。


	} catch(Exception $e) {

		if(isset($pg)) {
			close_pg($pg);
		}

		printErrorLog('ユーザーメニュー権限マスタの検索に失敗しました。：'.$e->getMessage()."\n");
		throw new Exception($e->getMessage());

	}

?>
