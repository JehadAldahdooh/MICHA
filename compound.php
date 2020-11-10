<?php include 'session/sessions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>MICHA</title>
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="templatemo_style.css?version=3" rel="stylesheet" type="text/css" />
      <link href="jehad_css.css" rel="stylesheet" type="text/css" />
      <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">-->
      <script lang="javascript" src="js/xlsx.full.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.8/css/jquery.dataTables.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
      <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
      <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
      <link rel="stylesheet" href="css/tooplate-style.css">
      <!--<script type="text/javascript" src="main.js?version=19"></script>-->
      <!--this is for auto complete search list-->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="lib/js/jquery-ui.js"></script>
      <!-- auto complete finish lib-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="form.css" >
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="theme_files/css/main.css" >
      <script src="js/autocomplete.js"></script>
      <script src="js/steps_hide_show_doms.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126984000-3"></script>    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-126984000-3');
    </script>
</head>
<body>
<div id="templatemo_wrapper">	


<?php include 'theme_files/header.php' ;?>

    
    <div id="templatemo_search">
    
    	<div id="search_box">
<!--	<script async src="https://cse.google.com/cse.js?cx=017046730853086508825:sckkkfpde90"></script>
<div class="gcse-search"></div>-->

            <form action="compound.php" method="get">
                <input type="text" value="Enter compound name..." name="c_name" size="10" id="searchfield" title="searchfield" 
				onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="" value="" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    
    </div> <!-- end of search -->
    
    <div id="templatemo_banner">

	    <div id="banner_left">
        
      <p>MICHA extracted all publicly available information for the compounds such as primary targets, other potent targets, 
         clinical information and physiochemical information.
      </p>
			
      <p>
         Please continue to annotate your data by clicking on Step 2  or you can download the results by clicking Step 3.
      </p>
			
			
           <!-- <div class="cleaner_h20"></div>-->
            
        </div>
		
		
		
	    <div id="banner_left_annotate" style="display:none;">
        
            <!--<p>MICHA (Minimal Information for CHemosensitivity Assay) is a protocol for the annotation and reporting of 
			Chemosensensitivity assays by FAIRifying drug sensitivity screening data.<span> </span> </p>-->
			
			<p>Please annotate your data by filling any form .</p>
			
			<p>
			Once finised , please click here to generate a report.             

			
			
			</p>
			
				 <div class="banner_button">
            	            	<a  href="#" id="ExportReporttoExcel_new">Download Results</a>

            </div>
			
			
           <!-- <div class="cleaner_h20"></div>-->
            
        </div>		
		
		
        
   <div id="banner_right" >
      <div class="banner_button"  data-target="#templatemo_content">
         <a href="/" id="templatemo_content_top">Step 1</a>  <!-- back -->
      </div>
      <div class="banner_button">
         <a href="#tab_forms" id="link" class="button-hand">Step 2</a>  <!--Annotate data</a>-->
      </div>
      <div class="banner_button">
         <a  href="#" id="ExportReporttoExcel"  >Step 3</a>  <!--Download Results</a>-->
      </div>
   </div>
   

        <div id="annotate_banner" style="display:none;">
        
        	<div class="banner_button" data-target="#templatemo_content">
            	<a href="#" id="expr_form_banner">Experiment form</a>
            </div>
            
            <div class="banner_button">
            	<a  href="#" id="cell_form_banner">Cells form</a>
            </div>
            
            <div class="banner_button">
            	<a href="#" id="an_form_banner">Analysis form</a>
            </div>
			
		
        
        </div>

		
    </div> <!-- end of templatemo_banner -->
    
    <div id="templatemo_content_top" class="moveto"></div>
	
    <div id="templatemo_content">
    
        <div class="section_w940">

<!--------------------------expr_line form--------->
<?php include 'modal_forms/expr_create.php'; ?>
<!--------------------------cell_line form--------->
<?php include 'modal_forms/cell_line_create.php'; ?>
<!-----------------------------analysis form------->
<?php include 'modal_forms/analysis_create.php'; ?>
<!-----------------form tabs-------------->
<?php include 'form_tabs/form_tabs.php'; ?>
		<!-------------------------------Upload file----------------------------------------------->
		<!----------------------------------------------------------------------------------------->
		   <div class="box margin_r30 box_border" id="style_upload" style="width: 900px;border-right: 0px dotted #999;">
		           
<!-----------------upload progress bars-------------->
<?php include 'theme_files/progress_upload.php'; ?>

            <div   id="dropme">
				<div id="results_table" style="display:none;">

		<?php include 'tables/result.php'; ?>

	</div>
        </div>				                    
            </div>
		<!----------------------------------------------------------------------------------------->
            <div class="cleaner"></div>
        </div>
    
    </div>
    <div id="templatemo_content_bottom"></div>
<?php include 'theme_files/footer.php'; ?>
<div class="cleaner_h40"></div>

	
	
	
	
	</div> <!-- end of footer -->
</div> <!-- end of wrapper -->
</body>
</html>



	<script type="text/javascript">
	   window._urq = window._urq || [];
	   _urq.push(['initSite', '1b1bafee-3533-4536-bdd8-3c02b964d2b8']);
	   (function() {
	   var ur = document.createElement('script'); ur.type = 'text/javascript'; ur.async = true;
	   ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
	   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ur, s);
	   })();
	</script>








<?php

ini_set('max_execution_time', 3000);


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


//if ( isset($_POST["submit"]) ) {

  //print_r($_GET['c_name']);
   $c_name=$storagename=trim(strtoupper($_GET['c_name']));
   
   $filename=$c_name;
if (isset($_GET) && isset($_GET['c_name']) && $c_name) {
//	$name = $_FILES['file']['tmp_name'];
  //print_r($_POST['c_name']);
 
//print_r("yes");



?>



<script type="text/javascript">var filename = "<?= $filename ?>";</script>
<script type="text/javascript">var storagename = "<?= $storagename ?>";</script>

<script src="js/ajax_expr.js?version=4"></script>	
<script src="js/ajax_cell.js?version=2"></script>	
<script src="js/ajax_analysis.js?version=1"></script>	


<?php
            
			include 'config/psql_connection.php';

			$i = 0;
			$arrayallrows=[];
			$m_assoc_array = array();//associative array
			$m_assoc_array_drug_indication = array();//associative array
			$m_assoc_array_cross_ref = array();//associative array
			$m_assoc_array_cross_ref_ids = array();//associative array

			$m_assoc_array_structure = [];

			$m_indexes_order = array();//associative array







		    $compund_names=[];
		    $inchiall=[];
$y=0; // for saving the whole data to be included if some inchikeys are present then show no data
$i=0;  // to ignore the first row header in reading the excel file
					
					
				$elt_0=	$c_name;
				
				
			$query2 = "select compound_name,standard_inchi_key  from micha_compounds where compound_name='".$c_name."'";


			//print_r($query2);
			$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());

          $standard_inchi_key='';
			while ($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC)) {

					$standard_inchi_key=$line2['standard_inchi_key']  ;
					$compound_name=$line2['compound_name']  ;

			}
					//echo $elt_1;
				$elt_1=	preg_replace('/\xc2\xa0/', '', $standard_inchi_key);  //inchi key

							//print_r($standard_inchi_key."  key");


			   // echo "<tr><td>" . $elt[0] . "</td><td>" . $elt[1] . "</td></tr>";

				array_push($arrayallrows,[$elt_1,$elt_0]);
				
				
				
				

				$key=$elt_1;

				$m_assoc_array_drug_indication[$elt_1] = [];//adding a couple key-value
				$m_assoc_array_cross_ref[$elt_1] = [];//adding a couple key-value
						$m_assoc_array_cross_ref_ids[$elt_1] = [];//adding a couple key-value

				$compund_names[$elt_1] = $elt_0;
$m_indexes_order[$elt_1]=$y++;
							array_push($inchiall,preg_replace('/\xc2\xa0/', '', $elt_1));



			
			


				


 				$inchiall = array_map('trim', array_values($inchiall));




				$userStr = implode("', '", array_filter($inchiall));



			$query2 = "
			select standard_inchi_key, efo_term as disease_name, ref_url as disease_ref from drug_indication_refs
			where standard_inchi_key  in ('$userStr') order by standard_inchi_key";


			//print_r($query);
			$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());

			// Printing results in HTML
			//echo "<table>\n";
			while ($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC)) {

				//echo "****************************************\n";
				//echo $line;
				$contact_name = "<a target='_blank' href='".$line2['disease_ref'] . "'" . ">"
							   . $line2['disease_name'] . "</a>"  ;



                //print_r($m_assoc_array_drug_indication[$line2['standard_inchi_key']]);
				
				
				array_push($m_assoc_array_drug_indication[$line2['standard_inchi_key']],$contact_name);//adding a couple key-value

				//echo "\t<tr>\n";
				//foreach ($line2 as $col_value2) {
				   // echo "<td>$col_value</td>\n";
				 // echo $col_value2."\n";
				//}
					//echo "****************************************\n";
				// echo "</tr>\n";
			}


	//print_r($m_assoc_array_drug_indication);

	$query3="
			select distinct standard_inchi_key, name_label as DB_name,  (base_id_url || compound_id::text) as web_link,
			compound_id::text as cimids from uc_source_id_mapping
			where standard_inchi_key in ('$userStr') order by standard_inchi_key
			";

	//print_r($query);
	$result3 = pg_query($query3) or die('Query failed: ' . pg_last_error());

	// Printing results in HTML
	//echo "<table>\n";
	while ($line3= pg_fetch_array($result3, null, PGSQL_ASSOC)) {

		//echo "****************************************\n";
		//echo $line;
		$contact_name = "<a target='_blank' href='".$line3['web_link'] . "'" . ">"
					   . $line3['db_name'] . "</a>"  ;

		array_push($m_assoc_array_cross_ref[$line3['standard_inchi_key']],$contact_name);//adding a couple key-value
		array_push($m_assoc_array_cross_ref_ids[$line3['standard_inchi_key']],$line3['cimids']);//adding a couple key-value

		//echo "\t<tr>\n";
		//foreach ($line2 as $col_value2) {
		   // echo "<td>$col_value</td>\n";
		 // echo $col_value2."\n";
		//}
			//echo "****************************************\n";
	   // echo "</tr>\n";
	}





	$query1=" select standard_inchi_key , primary_target_ids, primary_target_names,other_potent_target_ids, max_phase,  mw_freebase, alogp, hba, hbd, psa,
				rtb, num_ro5_violations, acd_most_apka, acd_most_bpka, acd_logp, acd_logd, full_mwt,
				 aromatic_rings, heavy_atoms, qed_weighted, mw_monoisotopic, full_molformula, hba_lipinski, hbd_lipinski  from
				micha_compounds where standard_inchi_key in ('$userStr') 
			";


	//print_r($query1);
	$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());

	// Printing results in HTML
	//echo "<table>\n";

	$alldic=[];
	$i=0;
	while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
			$arr23=[];
			//echo "\t<tr>\n";
			echo '<tr>';
			//array_push($arr23,$m_assoc_array[$line['standard_inchi_key']]);//associative array
			//echo "**********no way*******\n";

			 array_push($arr23,$compund_names[$line['standard_inchi_key']]);
			 array_push($arr23,$line['standard_inchi_key']);

			$primary_target_links=$line['primary_target_ids'];
			$primary_target_names=$line['primary_target_names'];

			$arr=[];
			$contact_name='';

			if($primary_target_names){
				$names=explode(',', $primary_target_names);
				$links=explode(',', $primary_target_links);

				$k=0;
				$numb=count($names);
				if($numb == 1){
					foreach($names as $key=>$value){
							$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$links[$key] . "'" . ">"
							   . $value . "</a> "  ;
					}
				}else{
						foreach($names as $key=>$value){
								if($key==$numb-1){
								$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$links[$key] . "'" . ">"
								   . $value . "</a>"  ;
								}
								else
								{
								$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$links[$key] . "'" . ">"
								   . $value . "</a>, "  ;
								}

						}
				}
			}



			 array_push($arr23,$contact_name);
			 
			 
			 
			$other_potent_target_ids=$line['other_potent_target_ids'];

			$arr=[];
			$contact_name='';

			if($other_potent_target_ids){
				$names=explode(',', $other_potent_target_ids);

				$k=0;
				$numb=count($names);
				if($numb == 1){
					foreach($names as $key=>$value){
							$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$value . "'" . ">"
							   . $value . "</a> "  ;
					}
				}else{
						foreach($names as $key=>$value){
								if($key==$numb-1){
								$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$value . "'" . ">"
								   . $value . "</a>"  ;
								}
								else
								{
								$contact_name = $contact_name. "<a target='_blank' href='https://www.uniprot.org/uniprot/?query=accession:".$value. "'" . ">"
								   . $value . "</a>, "  ;
								}

						}
				}
			}
			
			array_push($arr23,$contact_name);

			
			 array_push($arr23,$line['max_phase']);
			 array_push($arr23, implode(",", array_unique($m_assoc_array_cross_ref[$line['standard_inchi_key']])));

			//array_push($arr23, $m_assoc_array_structure[$line['standard_inchi_key']]);
			// print_r($line);
			 array_push($arr23,$line['mw_freebase']);
			 array_push($arr23,$line['alogp']);
			 array_push($arr23,$line['hba']);
			 array_push($arr23,$line['hbd']);
			 array_push($arr23,$line['psa']);
			 array_push($arr23,$line['rtb']);
			 array_push($arr23,$line['num_ro5_violations']);
			 array_push($arr23,$line['acd_most_apka']);
			 array_push($arr23,$line['acd_most_bpka']);
			 array_push($arr23,$line['acd_logp']);
			 array_push($arr23,$line['acd_logd']);
			 array_push($arr23,$line['full_mwt']);
			 array_push($arr23,$line['aromatic_rings']);
			 array_push($arr23,$line['heavy_atoms']);
			 array_push($arr23,$line['qed_weighted']);
			 array_push($arr23,$line['mw_monoisotopic']);
			 array_push($arr23,$line['full_molformula']);
			 array_push($arr23,$line['hba_lipinski']);
			 array_push($arr23,$line['hbd_lipinski']);
			 array_push($arr23, implode(",", array_unique($m_assoc_array_drug_indication[$line['standard_inchi_key']])));
			 array_push($arr23, implode(",", array_unique($m_assoc_array_cross_ref_ids[$line['standard_inchi_key']])));



//print_r($m_indexes_order[$line['standard_inchi_key']]);
//print_r('<br>');
	
				$alldic[$m_indexes_order[$line['standard_inchi_key']]]=$arr23;
				// echo "</tr>\n";

	}
	
					//print_r(count($alldic));
					


						$alldic_sort=[];
$i=0;  // this for starting the array and in the same time to keep index from zero same as $y in reading the excel file espace the first row header



					foreach($arrayallrows as $x => $x_value) {
						                       if(array_key_exists($i, $alldic)){
												$alldic_sort[$i]=$alldic[$i];
											   }else{
												 $alldic_sort[$i]=[$arrayallrows[$i][1], $arrayallrows[$i][0], 
												 'No data ','',
     			'', '', '', '',
				'', '', '', '', '', '', '', '', '',
				'', '', '', '', '', '', '',
				'', '',''
			];

											   }
$i++;
  //echo "Key=" . $x . ", Value=" . $x_value;
  //echo "<br>";
  
  
}






	

	$query_forms = "
			select distinct cell_line , cell_line_provenance ,  patient_age , patient_sex , patient_diagnosis , patient_sample , patient_sample_date ,
			patient_evaluation_date ,  min_concentration , max_concentration , dilution_fold , vehicle , experimental_medium , plate_type , 
			assay_format , assay_test_type , detection_tech , EP_mode , cell_density , method_dispensation , volume_per_well , treatment_time ,
			analysis_ref, analysis_metric from micha_protocols p where standard_inchi_key in ('$userStr') order by min_concentration desc";
			
	$result2 = pg_query($query_forms) or die('Query failed: ' . pg_last_error());
	$all_forms_data=[];
	$i=0;			
	while ($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC)) {
		 $arr23=[];
		// array_push($arr23,$line2['Protocol_name']);
		// array_push($arr23,$line2['compound_name']);
		// array_push($arr23,$line2['standard_inchi_key']);
		 
		 //Cell_line_form
		 array_push($arr23,$line2['cell_line']);//0
		 array_push($arr23,$line2['cell_line_provenance']);
		 array_push($arr23,$line2['patient_age']);//2
		 array_push($arr23,$line2['patient_sex']);
		 array_push($arr23,$line2['patient_diagnosis']);//4
		 array_push($arr23,$line2['patient_sample']);
		 array_push($arr23,$line2['patient_evaluation_date']);		 
		 array_push($arr23,$line2['patient_sample_date']);//7
		
         //Experiment
		 array_push($arr23,$line2['assay_format']);//8
		 array_push($arr23,$line2['assay_test_type']);
		 array_push($arr23,$line2['detection_tech']);//10
		 //array_push($arr23,$line2['EP_mode']);
		 array_push($arr23,$line2['experimental_medium']);//12
		 array_push($arr23,$line2['plate_type']);
		 array_push($arr23,$line2['cell_density']);//14
		 array_push($arr23,$line2['treatment_time']);
		 array_push($arr23,$line2['dilution_fold']);//16
		 array_push($arr23,$line2['vehicle']);
		 array_push($arr23,$line2['method_dispensation']);//18
		 array_push($arr23,$line2['volume_per_well']);
	 
		 //Analysis
		 array_push($arr23,$line2['min_concentration']); //20
		 array_push($arr23,$line2['max_concentration']);
		 array_push($arr23,$line2['analysis_ref']);    //corresponding=> pipeline address
		 array_push($arr23,$line2['analysis_metric']); //analysis result
		 
		 $all_forms_data[$i++]=$arr23;
	}
	
	//print_r($i);
	

		if(isset($_SESSION['uploaded_files'])){
                  // print_r( "yes is defined");
		           //array_push($_SESSION['uploaded_files'],$F); // Items added to cart
        //print_r($_SESSION['uploaded_files']);
		                  //  array_push($_SESSION['uploaded_files'],$alldic);
			$_SESSION['uploaded_files'][$filename]=array();
			$_SESSION['uploaded_files'][$filename]['date']=date('Y-m-d H:i:s');
			//$_SESSION['uploaded_files'][$filename]['data']=$alldic;
			//$_SESSION['uploaded_files'][$filename]['fname']=$storagename;
			//$_SESSION['uploaded_files'][$filename]['forms_data']=$all_forms_data;
			
	
                   // array_push($_SESSION['uploaded_files'],[$F,date(DATE_RFC822, filemtime("updated/sample_data/". $F))]);

	    }else{
			
			$_SESSION['uploaded_files']=array();
			
			$_SESSION['uploaded_files'][$filename]=array();
			$_SESSION['uploaded_files'][$filename]['date']= date('Y-m-d H:i:s');
			//$_SESSION['uploaded_files'][$filename]['data']=$alldic;
			//$_SESSION['uploaded_files'][$filename]['fname']=$storagename;
			//$_SESSION['uploaded_files'][$filename]['forms_data']=$all_forms_data;



					//$_SESSION['uploaded_files']=$alldic;
					//array_push($_SESSION['uploaded_files'],$alldic);

		}
		
		
		




		?>
			   <script>


          //  $('#hdnOrder').val(JSON.stringify(<?php echo json_encode($alldic); ?> ));
           // $('#hdnOrder').val("<?php echo $filename; ?>");
			//console.log("started");
			//document.getElementById("dropme").style.display = "none";
			//document.getElementById("loadbar").style.display = "none";
			document.getElementById("results_table").style.display = "block";
			document.getElementById("wrap").style.display = "none";


			var jArray = <?php echo json_encode($alldic_sort); ?> ;

			//for (var i = 0; i < jArray.length; i++) {
				//console.log(jArray[i]);
			//}

			//document.getElementById("nextbutton").style.display = "block";



			//document.getElementById("example").style.display = "none";
			//console.log("************** all dic *************");
			//console.log(alldic);
			//console.log(inchchembl);
			//document.getElementById("example").style.display = "none";
			//document.getElementById("filter").style.display = "none";
			document.getElementById("results_table").style.display = "block";

			var table = "";
			var table3 = "";
			var table4 = "";


			var t = "";
			var t2 = "";
			var t3 = "";




			//auto filter the first row
			function createCellPos(n) {
				var ordA = 'A'.charCodeAt(0);
				var ordZ = 'Z'.charCodeAt(0);
				var len = ordZ - ordA + 1;
				var s = "";

				while (n >= 0) {
					s = String.fromCharCode(n % len + ordA) + s;
					n = Math.floor(n / len) - 1;
				}

				return s;
			}
			////////////////////////////////


			var forms1dic = [];
			var forms2dic = [];
			var forms3dic = [];




			var headerdata = ['Compound name', 'Inchikey', 'Primary target','other_potent_target_ids',
     			'Max phase', 'Cross ref', 'Drug indications', 'mw_freebase',
				'Alogp', 'Hba', 'Hbd', 'Psa', 'Rtb', 'Num lipinski ro5 violations', 'Acd most apka', 'Acd most bpka', 'Acd logp',
				'Acd logd', 'Full mwt', 'Aromatic rings', 'Heavy atoms', 'Qed weighted', 'Mw monoisotopic', 'Full molformula',
				'Hba lipinski', 'Hbd lipinski', 'Cross ref'
			];











			var table1 = $('#results').DataTable({
				"bSort": false,
  "pageLength":  25,

				//  columnDefs: [{
				// targets: '_all',
				// createdCell: createdCell
				// }]
				//,
				"aaData": jArray,
				"fixedHeader": {
					header: true,
				},
				  "autoWidth": false,


				dom: 'Bfrtip',
				// buttons: [
				//    'excel'
				// ]
				//responsive: 'true',
				"scrollX": true,
				//   data: alldic,
				deferRender: true,
				scrollY: 450,
				scrollCollapse: true,
				scroller: true,
				"columns": [
				    {
						data: 0
					},
					{
						data: 1
					},
					{
						data: 2
					},
					{
						data: 3
					},
					{
						data: 4
					},
					{
						data: 5
					},

					{
						data: 25
					},
					{
						data: 6
					},
					{
						data: 7
					},
					{
						data: 8
					},
					{
						data: 9
					},
					{
						data: 10
					},
					{
						data: 11
					},
					{
						data: 12
					},
					{
						data: 13
					},
					{
						data: 14
					},
					{
						data: 15
					},
					{
						data: 16
					},
					{
						data: 17
					},
					{
						data: 18
					},
					{
						data: 19
					},
					{
						data: 20
					},
					{
						data: 21
					},
					{
						data: 22
					},
					{
						data: 23
					},
					{
						data: 24
					},
					{
						data: 26
					}

				],
				columnDefs: [{
						width: 350,
						targets: 1
					},
					{width: 200,
						targets: [0,1,2,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25]
					},

						{width: 350,
						targets: 4
					},
						{width: 160,
						targets: 7
					},

					{
						width: 700,
						targets: 5
					},

					{
						width: 700,
						targets: [6,3]
					},
					{
						"targets": [26],
						"visible": false,
						"searchable": false
					}
				],



				buttons: [
					// 'copy',
					{
						extend: 'excelHtml5',
						autoFilter: true,

						text: 'Export to Excel',
						className: 'btn btn-light btn-radius btn-brd grd1',
						title: '',
						exportOptions: {
							columns: [0, 1, 2, 3,4, 26,  6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,25],
							format: {
								header: function(data, columnIdx) {
									return headerdata[columnIdx];
								}
							}
						},
						customize: function(xlsx) {
							
							
console.log("just test the parameters");
console.log(filename);

console.log(storagename);

			                var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];



	$.ajax({
			url:'all_forms_data.php',
			method:"POST",
			async: false,
			data:{fname: filename ,sname:storagename},
			dataType:"json",
			success:function(data){
				console.log(data);
				console.log(Object.keys(data).length);
			console.log(data["cell_data"].length);
			console.log(data["an_data"]);
			console.log(data["expr_data"]);
			
			                var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
							//test(source);
							source.setAttribute('name', 'MICHA_Table1');
							var sheet = xlsx.xl.worksheets['sheet1.xml'];
console.log("for exporting");

							if (data["cell_data"].length > 0 || data["an_data"].length > 0 || data["expr_data"].length > 0) {

								//=====================================================================
								//sheet 2 getElementsByTagName('Override')[1] index 1
								//=====================================================================
								var source = xlsx['[Content_Types].xml'].getElementsByTagName('Override')[1];
								var clone = source.cloneNode(true);
								clone.setAttribute('PartName', '/xl/worksheets/sheet2.xml');
								xlsx['[Content_Types].xml'].getElementsByTagName('Types')[0].appendChild(clone);
								//=====================================================================
								//sheet 3
								//=====================================================================
								var source = xlsx['[Content_Types].xml'].getElementsByTagName('Override')[2];
								var clone1 = source.cloneNode(true);
								clone1.setAttribute('PartName', '/xl/worksheets/sheet3.xml');
								xlsx['[Content_Types].xml'].getElementsByTagName('Types')[0].appendChild(clone1);
								//=====================================================================
								//sheet 4
								//=====================================================================
								var source = xlsx['[Content_Types].xml'].getElementsByTagName('Override')[3];
								var clone1 = source.cloneNode(true);
								clone1.setAttribute('PartName', '/xl/worksheets/sheet4.xml');
								xlsx['[Content_Types].xml'].getElementsByTagName('Types')[0].appendChild(clone1);
								//=====================================================================
								//Add sheet relationship to xl/_rels/workbook.xml.rels => Relationships
								//=====================================================================
								var source = xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationship')[0];
								var clone = source.cloneNode(true);
								clone.setAttribute('Id', 'rId3');
								clone.setAttribute('Target', 'worksheets/sheet2.xml');
								xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationships')[0].appendChild(clone);
								//=====================================================================
								var clone1 = source.cloneNode(true);
								clone1.setAttribute('Id', 'rId4');
								clone1.setAttribute('Target', 'worksheets/sheet3.xml');
								xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationships')[0].appendChild(clone1);
								//=====================================================================
								var clone2 = source.cloneNode(true);
								clone2.setAttribute('Id', 'rId5');
								clone2.setAttribute('Target', 'worksheets/sheet4.xml');
								xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationships')[0].appendChild(clone2);
								//=====================================================================
								//=====================================================================
								//Add second sheet to xl/workbook.xml => <workbook><sheets>
								//=========================================================
								var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
								var clone = source.cloneNode(true);
								clone.setAttribute('name', 'Cell_line_Table_2');
								clone.setAttribute('sheetId', '2');
								clone.setAttribute('r:id', 'rId3');
								xlsx.xl['workbook.xml'].getElementsByTagName('sheets')[0].appendChild(clone);

								var clone1 = source.cloneNode(true);
								clone1.setAttribute('name', 'Experiment_Table_3');
								clone1.setAttribute('sheetId', '3');
								clone1.setAttribute('r:id', 'rId4');
								xlsx.xl['workbook.xml'].getElementsByTagName('sheets')[0].appendChild(clone1);

								var clone1 = source.cloneNode(true);
								clone1.setAttribute('name', 'Analysis_Table_4');
								clone1.setAttribute('sheetId', '4');
								clone1.setAttribute('r:id', 'rId5');
								xlsx.xl['workbook.xml'].getElementsByTagName('sheets')[0].appendChild(clone1);

								//=====================================================================
								//=====================================================================
								//=====================================================================
								//=====================================================================
								/******************************** Form 1 Cell line table *******************************************************************************/
								var newSheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' +
									'<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac" mc:Ignorable="x14ac">' +
									'<cols >' +
									'<col min="1" max="1" width="4.7" customWidth="1"/>' +
									'<col min="2" max="2" width="7.7" customWidth="1"/>' +
									'</cols>' +
									'<sheetData>';
								// add the header row in the excel file


								newSheet += '<row  r="' + 1 + '">' +
									'<c t="inlineStr" r="A' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Cell_line_name' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="B' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Cell_line_provenance' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="C' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'ID' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="D' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Cell_type' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="E' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Cell_line organism' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="F' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Passage_number' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="G' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Modifications' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="H' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Age' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="I' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Sex' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="J' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Diagnosis' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="K' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Sample_material' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="L' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Date_of_evaluation' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="M' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Date_of_sampling' + '</t>' +
									'</is>' +
									'</c>' +
									'</row>';




								// get the data for the table and add it
								rowCounter = 2;
								var colindex = 0;
								
								data["cell_data"].forEach(function(entry) {
									console.log(entry);
								//});

								//t.rows().every(function(rowIdx, tableLoop, rowLoop) {
									//var data = this.data();
									console.log("Cell_line_form");
									colindex = 0;
									//console.log(t.cell(rowIdx,colindex++).nodes().to$().find('input').val());
									//console.log(data);
									newSheet += '<row  r="' + rowCounter + '">' +
										'<c t="inlineStr" r="A' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="B' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="C' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="D' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="E' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="F' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="G' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="H' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="I' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="J' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="K' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="L' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="M' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>'  +
										'</row>';
									rowCounter++;

									// ... do something with data(), or this.node(), etc
								});

								newSheet += '</sheetData>' +

									'</worksheet>';
									
									console.log(newSheet);
								xlsx.xl.worksheets['sheet2.xml'] = $.parseXML(newSheet);

                        


								var sheet = xlsx.xl.worksheets['sheet2.xml'];

								var lastCol = sheet.getElementsByTagName('col').length - 1;
								console.log("last col");
								console.log(lastCol);
								var colRange = createCellPos(lastCol) + '1';
								//Has to be done this way to avoid creation of unwanted namespace atributes.
								var afSerializer = new XMLSerializer();
								var xmlString = afSerializer.serializeToString(sheet);
								var parser = new DOMParser();
								var xmlDoc = parser.parseFromString(xmlString, 'text/xml');
								var xlsxFilter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main', 'autoFilter');
								var filterAttr = xmlDoc.createAttribute('ref');
								filterAttr.value = 'A1:M1';
								xlsxFilter.setAttributeNode(filterAttr);
								sheet.getElementsByTagName('worksheet')[0].appendChild(xlsxFilter);
								console.log("line 2395");


								$('row:first c', sheet).attr('s', '2');
								var col = $('col', sheet);
								col.each(function() {
									$(this).attr('width', 30);
								});

								$(col[3]).attr('width', 30);
								$(col[3]).attr('width', 30);
								$(col[4]).attr('width', 30);
								$(col[5]).attr('width', 30);
								$(col[6]).attr('width', 30);
								$(col[7]).attr('width', 30);
								$(col[8]).attr('width', 30);
								$(col[9]).attr('width', 30);
								$(col[10]).attr('width', 30);
								$(col[11]).attr('width', 30);
								$(col[12]).attr('width', 30);
								$(col[13]).attr('width', 30);
								$(col[14]).attr('width', 30);
								$(col[15]).attr('width', 30);
								
								
				//=====================================================================
								//=====================================================================
								//=====================================================================
								//=====================================================================
								/******************************** Form 2 Experiment table *******************************************************************************/
								var newSheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' +
									'<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac" mc:Ignorable="x14ac">' +
									'<cols >' +
									'<col min="1" max="1" width="4.7" customWidth="1"/>' +
									'<col min="2" max="2" width="7.7" customWidth="1"/>' +
									'</cols>' +
									'<sheetData>';






								newSheet += '<row  r="' + 1 + '">' +
									'<c t="inlineStr" r="A' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + ' ' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="B' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Assay format' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="C' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Assay test type' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="D' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Detection technology' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="E' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Endpoint mode' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="F' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Medium' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="G' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Plate type' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="H' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Measurement' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="I' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Cell_density_at_plating' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="J' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Time_of_treatment' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="K' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'dilution_fold' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="L' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'vehicle' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="M' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'method_dispensation' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="N'  + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'volume_per_well' + '</t>' +
									'</is>' +
									'</c>' +									
									'</row>';



								rowCounter = 2;
								var colindex = 0;
								
								data["expr_data"].forEach(function(entry) {
									//console.log(entry);
									
									console.log("expr_data_form");
									console.log(entry);

								//t2.rows().every(function(rowIdx, tableLoop, rowLoop) {
									//var data = this.data();
									//console.log(data);
									colindex = 0;
									newSheet += '<row  r="' + rowCounter + '">' +
										'<c t="inlineStr" r="A' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + '' + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="B' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="C' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="D' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="E' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="F' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="G' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="H' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="I' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="J' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										
										'<c t="inlineStr" r="K' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="L' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="M' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="N' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'</row>';
									rowCounter++;

									// ... do something with data(), or this.node(), etc
								});

								newSheet += '</sheetData>' +'</worksheet>';
								xlsx.xl.worksheets['sheet3.xml'] = $.parseXML(newSheet);

								var sheet = xlsx.xl.worksheets['sheet3.xml'];

								$('row:first c', sheet).attr('s', '2');



								var lastCol = sheet.getElementsByTagName('col').length - 1;
								console.log("last col");
								console.log(lastCol);
								var colRange = createCellPos(lastCol) + '1';
								//Has to be done this way to avoid creation of unwanted namespace atributes.
								var afSerializer = new XMLSerializer();
								var xmlString = afSerializer.serializeToString(sheet);
								var parser = new DOMParser();
								var xmlDoc = parser.parseFromString(xmlString, 'text/xml');
								var xlsxFilter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main', 'autoFilter');
								var filterAttr = xmlDoc.createAttribute('ref');
								filterAttr.value = 'A1:N1';
								xlsxFilter.setAttributeNode(filterAttr);
								sheet.getElementsByTagName('worksheet')[0].appendChild(xlsxFilter);


								var col = $('col', sheet);
								col.each(function() {
									$(this).attr('width', 30);
								});

								$(col[3]).attr('width', 30);
								$(col[3]).attr('width', 30);
								$(col[4]).attr('width', 30);
								$(col[5]).attr('width', 30);
								$(col[6]).attr('width', 30);
								$(col[7]).attr('width', 30);
								$(col[8]).attr('width', 30);
								$(col[9]).attr('width', 30);
								$(col[10]).attr('width', 30);





								//=====================================================================
								//=====================================================================
								//=====================================================================
								//=====================================================================
								/******************************** Form 3 Analysis table *******************************************************************************/

								var newSheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' +
									'<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac" mc:Ignorable="x14ac">' +
									'<cols >' +
									'<col min="1" max="1" width="4.7" customWidth="1"/>' +
									'<col min="2" max="2" width="7.7" customWidth="1"/>' +
									'</cols>' +
									'<sheetData>';


								newSheet += '<row  r="' + 1 + '">' +
									'<c t="inlineStr" r="A' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Analysis_Normalization' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="B' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Analysis_Formulas' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="C' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Citation' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="D' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Result' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="E' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Analysis_pipeline_name' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="F' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'Analysis_pipeline_Address' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="G' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'min_concentration' + '</t>' +
									'</is>' +
									'</c>' +
									'<c t="inlineStr" r="H' + 1 + '" s="3">' +
									'<is>' +
									'<t>' + 'max_concentration' + '</t>' +
									'</is>' +
									'</c>' +
									
									'</row>';

								rowCounter = 2;
								var colindex = 0;
								data["an_data"].forEach(function(entry) {
									//console.log(entry);
									
									console.log("expr_data_form");
									colindex = 0;
									newSheet += '<row  r="' + rowCounter + '">' +
										'<c t="inlineStr" r="A' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="B' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="C' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="D' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="E' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="F' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="G' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										'<c t="inlineStr" r="H' + rowCounter + '" s="3">' +
										'<is>' +
										'<t>' + entry[colindex++] + '</t>' +
										'</is>' +
										'</c>' +
										
										'</row>';
									rowCounter++;

									// ... do something with data(), or this.node(), etc
								});

								newSheet += '</sheetData>' +

									'</worksheet>';
								xlsx.xl.worksheets['sheet4.xml'] = $.parseXML(newSheet);
								var sheet = xlsx.xl.worksheets['sheet4.xml'];
								$('row:first c', sheet).attr('s', '2');



								var lastCol = sheet.getElementsByTagName('col').length - 1;
								console.log("last col");
								console.log(lastCol);
								var colRange = createCellPos(lastCol) + '1';
								//Has to be done this way to avoid creation of unwanted namespace atributes.
								var afSerializer = new XMLSerializer();
								var xmlString = afSerializer.serializeToString(sheet);
								var parser = new DOMParser();
								var xmlDoc = parser.parseFromString(xmlString, 'text/xml');
								var xlsxFilter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main', 'autoFilter');
								var filterAttr = xmlDoc.createAttribute('ref');
								filterAttr.value = 'A1:H1';
								xlsxFilter.setAttributeNode(filterAttr);
								sheet.getElementsByTagName('worksheet')[0].appendChild(xlsxFilter);

								var col = $('col', sheet);
								col.each(function() {
									$(this).attr('width', 30);
								});

								$(col[3]).attr('width', 30);
								$(col[3]).attr('width', 30);
								$(col[4]).attr('width', 30);
								$(col[5]).attr('width', 30);
								$(col[6]).attr('width', 30);


				
console.log("success");

								//=====================================================================
								//=====================================================================
								//=====================================================================
								//=====================================================================
							}			
			
			
			
			
			}
		})







						},

					} //, 'pdf'
				]
			});




$('#ExportReporttoExcel').on('click', function() {
					document.getElementById('dropme').style.display = "block";

  $('.buttons-excel').click()
});
$('#ExportReporttoExcel_new').on('click', function() {
  $('.buttons-excel').click()
});
			document.getElementsByClassName('dt-buttons')[0].style.display = "none";
			document.getElementById('results_filter').style.display = "none";


	








		



			// here you get all data filled in input texts in all forms

			 </script>

<?php
	//print_r($alldic);
    //echo "</tbody></table>";


			}






