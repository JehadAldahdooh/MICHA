<?php

include_once 'config/Database_Conn.php';
include_once 'classes/Experiment.php';


		ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


$database = new Database_Conn();


$db = $database->getConnection();



	


	

		session_start();




$record = new Experiment($db,session_id());

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords($_POST['fname'],$_POST['sname']);
	
	
}
if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {	


echo "came here";
echo $_POST['action'];

    //$record->assay_name 				= $_POST["Assay_Name"];
    $record->assay_format 				= $_POST["Assay_format"];
    $record->assay_test_type 			= $_POST["Assay_test_type"];
	$record->detection_technology 		= $_POST["Detection_technology"];
	$record->endpoint_mode 				= $_POST["Endpoint_mode"];
	$record->medium						= $_POST["Medium"];
    $record->plate_type 				= $_POST["Plate_type"];
    //$record->measurement 				= $_POST["Measurement"];
	$record->cell_density_at_plating 	= $_POST["Cell_density_at_plating"];
	$record->time_of_treatment 			= $_POST["Time_of_treatment"];
	$record->dilution_fold				= $_POST["dilution_fold"];
    $record->vehicle 		    		= $_POST["vehicle"];
    $record->method_dispensation 		= $_POST["method_dispensation"];
	$record->volume_per_well 			= $_POST["volume_per_well"];
	$record->filename 			= $_POST["filename"];
	
	
	
	//print_r($record);
	
	print_r($record->addRecord());
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
	
	$record->id	 				= $_POST["id"];
    $record->assay_format 				= $_POST["Assay_format"];
    $record->assay_test_type 			= $_POST["Assay_test_type"];
	$record->detection_technology 		= $_POST["Detection_technology"];
	$record->endpoint_mode 				= $_POST["Endpoint_mode"];
	$record->medium						= $_POST["Medium"];
    $record->plate_type 				= $_POST["Plate_type"];
    //$record->measurement 				= $_POST["Measurement"];
	$record->cell_density_at_plating 	= $_POST["Cell_density_at_plating"];
	$record->time_of_treatment 			= $_POST["Time_of_treatment"];
	$record->dilution_fold				= $_POST["dilution_fold"];
    $record->vehicle 		    		= $_POST["vehicle"];
    $record->method_dispensation 		= $_POST["method_dispensation"];
	$record->volume_per_well 			= $_POST["volume_per_well"];
	

	$record->updateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>