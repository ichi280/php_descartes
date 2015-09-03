<?
//デカルト平面上に重複のない座標を生成する
function createCoordinate(){
	$arrRet = array();

	for($i=0; $i<100; $i++){
		$c = false;
		$x = mt_rand()%201 - 100;
		$y = mt_rand()%201 - 100;

		foreach($arrRet as $val){
			if($val[0] == $x && $val[1] == $y){
				$c = true;
			}
		}

		if($c){
			$i--;
		}else{
			$arrRet[] = array($x,$y);
		}

	}

	return $arrRet;
}
?>