<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$requestData = $_REQUEST;
$p_name = $_GET['action_c'];
$type = $_GET['type'];

include 'config/psql_connection.php';

$query3 = "";
$requestData = $_REQUEST;

if ($type == "cell")
{
    $columns = array(
    // datatable column index  => database column name
    0 => 'cell_line', 1 => 'cell_line_provenance', 2 => 'patient_age', 3 => 'patient_sex', 4 => 'patient_diagnosis',
	5 => 'patient_sample', 6 => 'patient_sample_date', 7 => 'patient_evaluation_date',);

    if ($requestData['search']['value'])
    {
        $query2 = "select distinct 
				cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis ,
				patient_sample , patient_sample_date,patient_evaluation_date from micha_protocols p  where protocol_name='Covid19' 
				and study_title='$p_name'
				and (cell_line LIKE '%" . ($requestData['search']['value']) . "%' 
				or cell_line_provenance LIKE '%" . ($requestData['search']['value']) . "%'
				or patient_age LIKE '%" . strtoupper($requestData['search']['value']) . "%'
				or patient_sex LIKE '%" . strtoupper($requestData['search']['value']) . "%'
				or patient_diagnosis LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
				or patient_sample LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
				or patient_sample_date LIKE '%" . strtoupper($requestData['search']['value']) . "%'
				or patient_evaluation_date LIKE '%" . strtoupper($requestData['search']['value']) . "%')  
			     " ;

        $query3 = "select distinct 
				cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis ,
				patient_sample , patient_sample_date,patient_evaluation_date from micha_protocols p  where protocol_name='Covid19' 
				and study_title='$p_name'
			    and (cell_line LIKE '%" . ($requestData['search']['value']) . "%' 
			    or cell_line_provenance LIKE '%" . ($requestData['search']['value']) . "%'
			    or patient_age LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			    or patient_sex LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			    or patient_diagnosis LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
			    or patient_sample LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
			    or patient_sample_date LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			    or patient_evaluation_date LIKE '%" . strtoupper($requestData['search']['value']) . "%')  
				";
    }
    else
    {
        $query2 = "select distinct 
				cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis ,
				patient_sample , patient_sample_date,patient_evaluation_date from micha_protocols p  where protocol_name='Covid19' 
				and study_title='$p_name'
				 " ;

        $query3 = "select distinct 
				cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis ,
				patient_sample , patient_sample_date,patient_evaluation_date from micha_protocols p  where protocol_name='Covid19' 
				and study_title='$p_name'
				";

    }
	$query2.= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   ";
    $query2.= " OFFSET " . $requestData['start'] . " limit " . $requestData['length'] . "   ";

}
else if ($type == "analysis")
{
	
	    $columns = array(
			// datatable column index  => database column name
			0 => 'min_concentration', 1 => 'max_concentration', 2 => 'analysis_ref', 3 => 'analysis_metric',);


    if ($requestData['search']['value'])
    {

        $query2 = "select distinct 
			round(CAST( min_concentration as numeric)   ,4) as min_concentration,   
			   round(CAST( max_concentration as numeric) ,4) as max_concentration,
			analysis_ref, analysis_metric from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
									 and (min_concentration LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
			  or max_concentration LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or analysis_ref LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or analysis_metric LIKE '%" . strtoupper($requestData['search']['value']) . "%' )			  
			    ";

        $query3 = "select distinct 
			min_concentration , max_concentration ,
			analysis_ref, analysis_metric from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
									 and (min_concentration LIKE '%" . strtoupper($requestData['search']['value']) . "%' 
			  or max_concentration LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or analysis_ref LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or analysis_metric LIKE '%" . strtoupper($requestData['search']['value']) . "%' )			  

			    ";
    }
    else
    {

        $query2 = "select distinct 
			round(CAST( min_concentration as numeric)   ,4) as min_concentration,   
			   round(CAST( max_concentration as numeric) ,4) as max_concentration,
			analysis_ref, analysis_metric from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    " ;

        $query3 = "select distinct 
			min_concentration , max_concentration ,
			analysis_ref, analysis_metric from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    ";

    }
	$query2.= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   ";
    $query2.= " OFFSET " . $requestData['start'] . " limit " . $requestData['length'] . "   ";

}
else if ($type == "expr")
{
	    $columns = array(0 => 'dilution_fold', 1 => 'vehicle', 2 => 'experimental_medium', 3 => 'plate_type', 
	4 => 'assay_format', 5 => 'assay_test_type', 6 => 'detection_tech', 7 => 'cell_density', 
	8 => 'method_dispensation', 9 => 'volume_per_well', 10 => 'treatment_time');


    if ($requestData['search']['value'])
    {

        $query2 = "select distinct 
			dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech  , cell_density , method_dispensation , 
			volume_per_well , treatment_time from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
													  and (dilution_fold LIKE '%" . ($requestData['search']['value']) . "%' 
			  or vehicle LIKE '%" . ($requestData['search']['value']) . "%'
			  or experimental_medium LIKE '%" . ($requestData['search']['value']) . "%'
			  or plate_type LIKE '%" . ($requestData['search']['value']) . "%'
			  or assay_format LIKE '%" . ($requestData['search']['value']) . "%' 
			  or assay_test_type LIKE '%" . ($requestData['search']['value']) . "%' 
			  or detection_tech LIKE '%" . ($requestData['search']['value']) . "%'
			  or cell_density LIKE '%" . ($requestData['search']['value']) . "%'
			  or method_dispensation LIKE '%" . ($requestData['search']['value']) . "%'
			  or treatment_time LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or volume_per_well LIKE '%" . strtoupper($requestData['search']['value']) . "%')  
			    " ;

        $query3 = "select distinct 
			dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech  , cell_density , method_dispensation , 
			volume_per_well , treatment_time from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
													  and (dilution_fold LIKE '%" . ($requestData['search']['value']) . "%' 
			  or vehicle LIKE '%" . ($requestData['search']['value']) . "%'
			  or experimental_medium LIKE '%" . ($requestData['search']['value']) . "%'
			  or plate_type LIKE '%" . ($requestData['search']['value']) . "%'
			  or assay_format LIKE '%" . ($requestData['search']['value']) . "%' 
			  or assay_test_type LIKE '%" . ($requestData['search']['value']) . "%' 
			  or detection_tech LIKE '%" . ($requestData['search']['value']) . "%'
			  or cell_density LIKE '%" . ($requestData['search']['value']) . "%'
			  or method_dispensation LIKE '%" . ($requestData['search']['value']) . "%'
			  or treatment_time LIKE '%" . strtoupper($requestData['search']['value']) . "%'
			  or volume_per_well LIKE '%" . strtoupper($requestData['search']['value']) . "%')  
			    ";
    }
    else
    {
        $query2 = "select distinct 
			dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech  , cell_density , method_dispensation , 
			volume_per_well , treatment_time from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    ";

        $query3 = "select distinct 
			dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech  , cell_density , method_dispensation , 
			volume_per_well , treatment_time from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    ";

    }


	$query2.= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   ";
    $query2.= " OFFSET " . $requestData['start'] . " limit " . $requestData['length'] . "   ";

}
else
{
	    $columns = array(0 => 'compound_name', 1 => 'standard_inchi_key');


    if ($requestData['search']['value'])
    {



//print_r("nnnn");
        $query2 = "select distinct 
			compound_name , standard_inchi_key from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
				and (compound_name LIKE '%" . $requestData['search']['value'] . "%' 
			  or standard_inchi_key LIKE '%" . strtoupper($requestData['search']['value']) . "%') 
			    ";

//print_r( $query2);

        $query3 = "select distinct 
			compound_name , standard_inchi_key from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
				and (compound_name LIKE '%" .$requestData['search']['value'] . "%' 
			  or standard_inchi_key LIKE '%" . strtoupper($requestData['search']['value']) . "%') 
			    ";

    }
    else
    {
        $query2 = "select distinct 
			compound_name , standard_inchi_key from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    " ;

        $query3 = "select distinct 
			compound_name , standard_inchi_key from micha_protocols p  where protocol_name='Covid19' and study_title='$p_name'
			    ";

    }
	
	$query2.= " 	ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   ";
    $query2.= "     OFFSET " . $requestData['start'] . " limit " . $requestData['length'] . "   ";



}

//print_r($query2);


$query4 = "SELECT COUNT(*) as total FROM (" . $query3 . ") as temp";

$result3 = pg_query($query4) or die('Query failed: ' . pg_last_error());
$totalFiltered = 0;
while ($line2 = pg_fetch_array($result3, null, PGSQL_ASSOC))
{
    $totalFiltered = $line2["total"];
}

$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());
$data = array();
$zx = 0;
while ($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC))
{
    $nestedData = array();

    $zx++;

    if ($type == "analysis")
    {
        $nestedData[] = $line2["min_concentration"];
        $nestedData[] = $line2["max_concentration"];
        $nestedData[] = $line2["analysis_ref"];
        $nestedData[] = $line2["analysis_metric"];
    }
    else if ($type == "cell")
    {

        $nestedData[] = $line2["cell_line"];
        $nestedData[] = $line2["cell_line_provenance"];
        $nestedData[] = $line2["patient_age"];
        $nestedData[] = $line2["patient_sex"];
        $nestedData[] = $line2["patient_diagnosis"];
        $nestedData[] = $line2["patient_sample"];
        $nestedData[] = $line2["patient_sample_date"];
        $nestedData[] = $line2["patient_evaluation_date"];
    }
    else if ($type == "expr")
    {

        $nestedData[] = $line2["dilution_fold"];
        $nestedData[] = $line2["vehicle"];
        $nestedData[] = $line2["experimental_medium"];
        $nestedData[] = $line2["plate_type"];
        $nestedData[] = $line2["assay_format"];
        $nestedData[] = $line2["assay_test_type"];
        $nestedData[] = $line2["detection_tech"];
        $nestedData[] = $line2["cell_density"];
        $nestedData[] = $line2["method_dispensation"];
        $nestedData[] = $line2["volume_per_well"];
        $nestedData[] = $line2["treatment_time"];
    }
    else
    {

        $nestedData[] = $line2["compound_name"];
        $nestedData[] = $line2["standard_inchi_key"];
    }

    $data[] = $nestedData;
}

//print_r($i);


$json_data = array(
    "draw" => intval($requestData['draw']) , // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
    "recordsTotal" => $totalFiltered, // total number of records
    "recordsFiltered" => $totalFiltered, // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data" => $data
);
echo json_encode($json_data); // send data as json format



?>
