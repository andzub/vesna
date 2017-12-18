<?php
if (!empty($_POST)) {
		$docid = intval($_POST['id']);

		$resource = $modx->getObject('modResource', $docid);
		$image = $resource->getTVValue('imageList');
		$data = json_decode($image, true);

		// var_dump($data);
		// $add = [
		// 	"newid" => ++$data[0]['MIGX_id']
		// ];
		// var_dump($add);

		$newid = ++$data[0]['MIGX_id'];
		$newimage = $_POST['image'];

		array_push($data, array(
			'MIGX_id' => $newid,
			'productImage' => $newimage 
		)); 

		$resource->setTVValue('imageList', json_encode($data));
		$resource->save();

		// clearResourceCache()
		echo "vse zashlo";
	} else {
		echo "ne zaslo";
	}