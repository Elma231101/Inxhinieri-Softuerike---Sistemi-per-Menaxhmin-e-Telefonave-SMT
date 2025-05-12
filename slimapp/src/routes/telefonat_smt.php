<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//kerkesa '../vendor/autoload.php';
//kerkesa 'db.php';

$app = new \Slim\App();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});
// Merr  te gjithe telefonat_smt
$app->get('/api/telefonat_smt', function (Request $request, Response $response) {
    $sql = 'SELECT * FROM telefonat_smt';
	try{
		//Merr objektin db
		$db = new db();
		//lidhja
		$db=$db->connect();
		
		$stmt = $db->query($sql);
		$telefonat_smt = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($telefonat_smt);
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});

// Merr thjeshte telefoni_smt
$app->get('/api/telefoni_smt/{ID}', function (Request $request, Response $response) {
	//Merr ID-ne telefoni_smt, krijoni variabel
	$ID = $request->getAttribute('ID');
	
    $sql = "SELECT * FROM telefonat_smt WHERE ID = '$ID'";
	try{
		//Merr objektin e db
		$db = new db();
		//Lidhja
		$db=$db->connect();
		
		$stmt = $db->query($sql);
		$telefoni_smt = $stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($telefoni_smt);
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


// Shto telefoni_smt
$app->post('/api/telefoni_smt/add', function (Request $request, Response $response) {
	
	$ModeliTelefonit_SMT = $request->getParam('ModeliTelefonit_SMT');
	$SistemiOperativTelefonit_SMT = $request->getParam('SistemiOperativTelefonit_SMT');
	$HapesiraTelefonit_SMT = $request->getParam('HapesiraTelefonit_SMT');
	$NumriModelitTelefonit_SMT = $request->getParam('NumriModelitTelefonit_SMT');
	$NumriSerikTelefonit_SMT = $request->getParam('NumriSerikTelefonit_SMT');
	$CmimiTelefonit_SMT = $request->getParam('CmimiTelefonit_SMT');
	$GarancioniTelefonit_SMT = $request->getParam('GarancioniTelefonit_SMT');
	
    $sql = "INSERT INTO telefonat_smt (ModeliTelefonit_SMT, SistemiOperativTelefonit_SMT, HapesiraTelefonit_SMT, NumriModelitTelefonit_SMT, NumriSerikTelefonit_SMT, CmimiTelefonit_SMT, GarancioniTelefonit_SMT) 
	VALUES(:ModeliTelefonit_SMT, :SistemiOperativTelefonit_SMT, :HapesiraTelefonit_SMT, :NumriModelitTelefonit_SMT, :NumriSerikTelefonit_SMT, :CmimiTelefonit_SMT, :GarancioniTelefonit_SMT)";
	try{
		//Merr objektin e db
		$db = new db();
		//Lidhja 
		$db=$db->connect();
		
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':ModeliTelefonit_SMT',$ModeliTelefonit_SMT);
		$stmt->bindParam(':SistemiOperativTelefonit_SMT',$SistemiOperativTelefonit_SMT);
		$stmt->bindParam(':HapesiraTelefonit_SMT',$HapesiraTelefonit_SMT);
		$stmt->bindParam(':NumriModelitTelefonit_SMT',$NumriModelitTelefonit_SMT);
		$stmt->bindParam(':NumriSerikTelefonit_SMT',$NumriSerikTelefonit_SMT);
		$stmt->bindParam(':CmimiTelefonit_SMT',$CmimiTelefonit_SMT);
		$stmt->bindParam(':GarancioniTelefonit_SMT',$GarancioniTelefonit_SMT);
		
		$stmt->execute();
		echo'{"notice":{"text":"Telefoni u shtua me suksese"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




// Modifiko telefoni_smt
$app->put('/api/telefoni_smt/update/{ID}', function (Request $request, Response $response) {
	//Merr ID-ne telefoni_smt, krijoni variabel
	$ID = $request->getAttribute('ID');
	$ModeliTelefonit_SMT = $request->getParam('ModeliTelefonit_SMT');
	$SistemiOperativTelefonit_SMT = $request->getParam('SistemiOperativTelefonit_SMT');
	$HapesiraTelefonit_SMT = $request->getParam('HapesiraTelefonit_SMT');
	$NumriModelitTelefonit_SMT = $request->getParam('NumriModelitTelefonit_SMT');
	$NumriSerikTelefonit_SMT = $request->getParam('NumriSerikTelefonit_SMT');
	$CmimiTelefonit_SMT = $request->getParam('CmimiTelefonit_SMT');
	$GarancioniTelefonit_SMT = $request->getParam('GarancioniTelefonit_SMT');
    $sql = "UPDATE telefonat_smt SET
	ModeliTelefonit_SMT = :ModeliTelefonit_SMT,
	SistemiOperativTelefonit_SMT = :SistemiOperativTelefonit_SMT,
	HapesiraTelefonit_SMT = :HapesiraTelefonit_SMT,
	NumriModelitTelefonit_SMT = :NumriModelitTelefonit_SMT,
	NumriSerikTelefonit_SMT = :NumriSerikTelefonit_SMT,
	CmimiTelefonit_SMT = :CmimiTelefonit_SMT,
	GarancioniTelefonit_SMT = :GarancioniTelefonit_SMT
	WHERE ID = '$ID'";
	try{
		//Merr objektin e db
		$db = new db();
		//Lidhja
		$db=$db->connect();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':ModeliTelefonit_SMT',$ModeliTelefonit_SMT);
		$stmt->bindParam(':SistemiOperativTelefonit_SMT',$SistemiOperativTelefonit_SMT);
		$stmt->bindParam(':HapesiraTelefonit_SMT',$HapesiraTelefonit_SMT);
		$stmt->bindParam(':NumriModelitTelefonit_SMT',$NumriModelitTelefonit_SMT);
		$stmt->bindParam(':NumriSerikTelefonit_SMT',$NumriSerikTelefonit_SMT);
		$stmt->bindParam(':CmimiTelefonit_SMT',$CmimiTelefonit_SMT);
		$stmt->bindParam(':GarancioniTelefonit_SMT',$GarancioniTelefonit_SMT);
		$stmt->execute();
		echo'{"notice":{"text":"Telefoni u modifikua me sukses"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


// Fshije telefoni_smt
$app->delete('/api/telefoni_smt/delete/{ID}', function (Request $request, Response $response) {
	//Merr ID-ne telefoni_smt, krijoni variabel
	$ID = $request->getAttribute('ID');
	
    $sql = "DELETE FROM telefonat_smt WHERE ID = '$ID'";
	try{
		//Merr objektin e db
		$db = new db();
		//Lidhja 
		$db=$db->connect();
		
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo'{"notice":{"text":"Telefoni u fshije me sukses"}';
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




