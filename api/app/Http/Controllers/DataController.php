<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Annotation;
Use Exception;
USE DB;

class DataController extends Controller{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /*$this->study_id = '';
        $this->study= '';
        $this->name = '';
        $this->former_last_names = '';
        $this->hosp_distr_current = '';
        $this->hosp_distr_enrol = '';*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
    }
	

    /**
     * Find targets by inchikey.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function get_targets($userStr){
		
		$dbconn = pg_connect("host=localhost dbname=micha user=root password=jehad2019pass#")
					or die('Could not connect: ' . pg_last_error());

		$query1=" select standard_inchi_key , primary_target_ids, primary_target_names,other_potent_target_ids, max_phase,  mw_freebase, alogp, hba, hbd, psa,
					rtb, num_ro5_violations, acd_most_apka, acd_most_bpka, acd_logp, acd_logd, full_mwt,
					 aromatic_rings, heavy_atoms, qed_weighted, mw_monoisotopic, full_molformula, hba_lipinski, hbd_lipinski  from
					micha_compounds where standard_inchi_key in ('$userStr')";


		$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
		
		$item = new Annotation();
		while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
			$item->primary_target_ids = $line['primary_target_ids'];
			$item->primary_target_names = $line['primary_target_names'];
			$item->other_potent_target_ids = $line['other_potent_target_ids'];
			$item->max_phase = $line['max_phase'];
			$item->mw_freebase = $line['mw_freebase'];
			$item->alogp = $line['alogp'];
			$item->hba = $line['hba'];
			$item->hbd = $line['hbd'];
			$item->psa = $line['psa'];
			$item->rtb = $line['rtb'];
			$item->acd_most_apka = $line['acd_most_apka'];
			$item->acd_most_bpka = $line['acd_most_bpka'];
			$item->num_ro5_violations = $line['num_ro5_violations'];
			$item->acd_logp = $line['acd_logp'];
			$item->acd_logd = $line['acd_logd'];
			$item->full_mwt = $line['full_mwt'];
			$item->aromatic_rings = $line['aromatic_rings'];
			$item->heavy_atoms = $line['heavy_atoms'];
			$item->qed_weighted = $line['qed_weighted'];
			$item->mw_monoisotopic = $line['mw_monoisotopic'];
			$item->full_molformula = $line['full_molformula'];
			$item->hba_lipinski = $line['hba_lipinski'];
			$item->hbd_lipinski = $line['hbd_lipinski'];
	}
	
	
		$query2 = "select standard_inchi_key, efo_term as disease_name, ref_url as disease_ref from drug_indication_refs 
             		where standard_inchi_key in ('$userStr') order by standard_inchi_key";
		$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());

		$arr23=[];
		while ($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC)) {
			$contact_name = "<a target='_blank' href='".$line2['disease_ref'] . "'" . ">". $line2['disease_name'] . "</a>"  ;
		    array_push($arr23,$line2['disease_name']);	
		}
		
		$item->drug_indication = implode(",", array_unique($arr23));
		
		//$item = new Annotation(array('name' => 'john'));
		//$item->password = 'bar';
		
		header('Accept: application/json');
		return response()->json($item,200);
		//return $item;
	}
	

    /**
     * Find drug screening annotations by inchikey.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_annotations($userStr)
    {
		$dbconn = pg_connect("host=localhost dbname=micha user=root password=jehad2019pass#") or die('Could not connect: ' . pg_last_error());
        
		$query1="
			select distinct cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis , patient_sample , patient_sample_date ,
			patient_evaluation_date ,  min_concentration , max_concentration , dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech , EP_mode , cell_density , method_dispensation , volume_per_well , treatment_time ,
			analysis_ref, analysis_metric from micha_protocols p where standard_inchi_key in ('$userStr') order by min_concentration desc";


        $response = array();

		$item = new Annotation();
		$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
		
		while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
			$item->cell_line = $line['cell_line'];
			$item->cell_line_provenance = $line['cell_line_provenance'];
			$item->patient_sample_date = $line['patient_sample_date'];
			$item->patient_evaluation_date = $line['patient_evaluation_date'];
			$item->min_concentration = $line['min_concentration'];
			$item->max_concentration = $line['max_concentration'];
			$item->dilution_fold = $line['dilution_fold'];
			$item->vehicle = $line['vehicle'];
			$item->experimental_medium = $line['experimental_medium'];
			$item->plate_type = $line['plate_type'];
			$item->assay_format = $line['assay_format'];
			$item->assay_test_type = $line['assay_test_type'];
			$item->detection_tech = $line['detection_tech'];
			//$item->EP_mode = $line['EP_mode'];
			$item->cell_density = $line['cell_density'];
			$item->method_dispensation = $line['method_dispensation'];
			$item->volume_per_well = $line['volume_per_well'];
			$item->treatment_time = $line['treatment_time'];
			$item->analysis_ref = $line['analysis_ref'];
			$item->analysis_metric = $line['analysis_metric'];
			
			$response[] = $item;

		}
	    
		
		header('Accept: application/json');
		return response()->json($response,200);		
	}
}
