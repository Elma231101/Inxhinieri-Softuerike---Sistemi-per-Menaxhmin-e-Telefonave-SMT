<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//e nevojshme '../vendor/autoload.php';
//e nevojshme 'db.php';

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
<<<<<<< HEAD
// Merr te dhenat e telefonit
=======
// Merr te dhenat e gjithe telefonave
>>>>>>> 2d568ec92344d4dfc77f1fdeca23fd571ba0641c
$app->get('/api/telefonat_smt', function (Request $request, Response $response) {
    $sql = 'SELECT * FROM telefonat_smt';
	try{
		//merr objektet ne db
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

<<<<<<< HEAD
//merr vetem te dhenat e telefonit
$app->get('/api/telefoni_smt/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje telefon sipas ID krijohen variablat
=======
//merr vetem te dhenat e telefonit
$app->get('/api/telefoni_smt/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje te dhene telefoni sipas ID krijohen variablat
>>>>>>> 2d568ec92344d4dfc77f1fdeca23fd571ba0641c
	$ID = $request->getAttribute('ID');
	
    $sql = "SELECT * FROM telefonat_smt WHERE ID = '$ID'";
	try{
		//merr objektet ne db
		$db = new db();
		//lidhja
		$db=$db->connect();
		
		$stmt = $db->query($sql);
		$telefoni_smt = $stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($telefoni_smt);
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


<<<<<<< HEAD
//shtimi i te dhenave te telefonit
=======
//shtimi i te dhenave te telefonit
>>>>>>> 2d568ec92344d4dfc77f1fdeca23fd571ba0641c
$app->post('/api/telefoni_smt/add', function (Request $request, Response $response) {
	
	$ModeliTelefonit_SMT = $request->getParam('ModeliTelefonit_SMT');
	$SistemiOperativTelefonit_SMT = $request->getParam('SistemiOperativTelefonit_SMT');
	$HapesiraTelefonit_SMT = $request->getParam('HapesiraTelefonit_SMT');
	$NumriModelitTelefonit_SMT = $request->getParam('NumriModelitTelefonit_SMT');
	$NumriSerikTelefonit_SMT = $request->getParam('NumriSerikTelefonit_SMT');
	$CmimiTelefonit_SMT = $request->getParam('CmimiTelefonit_SMT');
	$GarancioniTelefonit_SMT = $request->getParam('GarancioniTelefonit_SMT');
	
    $sql = "INSERT INTO telefonat_smt (ModeliTelefonit_SMT, SistemiOperativTelefonit_SMT,HapesiraTelefonit_SMT, NumriModelitTelefonit_SMT, NumriSerikTelefonit_SMT, CmimiTelefonit_SMT,GarancioniTelefonit_SMT) 
	VALUES(:ModeliTelefonit_SMT, :SistemiOperativTelefonit_SMT, :HapesiraTelefonit_SMT, :NumriModelitTelefonit_SMT, :NumriSerikTelefonit_SMT, :CmimiTelefonit_SMT, :GarancioniTelefonit_SMT)";
	try{
		////merr objektet ne db
		$db = new db();
		//lidhja 
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
		echo'{"notice":{"text":"Te dhenat e Telefonit u shtuan me sukses!"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




<<<<<<< HEAD
//Modifikimi i te dhenave te telefonit

$app->put('/api/telefoni_smt/update/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje telefon sipas ID krijohen variablat
=======
//Modifikimi i te dhenave te telefonit

$app->put('/api/telefoni_smt/update/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje telefon sipas ID krijohen variablat
>>>>>>> 2d568ec92344d4dfc77f1fdeca23fd571ba0641c

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
		//merr objektet e db
		$db = new db();
		//lidhja
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
		echo'{"notice":{"text":"Te dhenat e Telefonit u modifikuan me sukses!"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


<<<<<<< HEAD
//Fshirja e te dhenave te telefonit
$app->delete('/api/telefoni_smt/delete/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje femi sipas ID krijohen variablat

//Fshirja e te dhenave te telefonit
$app->delete('/api/telefoni_smt/delete/{ID}', function (Request $request, Response $response) {
	//per te marre vetem nje telefon sipas ID krijohen variablat
>>>>>>> 2d568ec92344d4dfc77f1fdeca23fd571ba0641c
	$ID = $request->getAttribute('ID');
	
    $sql = "DELETE FROM telefonat_smt WHERE ID = '$ID'";
	try{
		//merr objektet e db
		$db = new db();
		//lidhja
		$db=$db->connect();
		
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo'{"notice":{"text":"Te dhenat e Telefonit jane fshire me sukses!"}';
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




