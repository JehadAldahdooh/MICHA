<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Annotation;

Route::get("get_targets/{key}", "DataController@get_targets");
Route::get("annotations/{key}", "DataController@get_annotations");


Route::get('/', function () {
    return view('api');
});

/*
Route::get('/', function () {
			$dbconn = pg_connect("host=192.168.4.173 dbname=compounds_20 user=fimm password=pxqgBsFLTwTzc")
			or die('Could not connect: ' . pg_last_error());

		   $query1=" select standard_inchi_key , primary_target_ids, primary_target_names,other_potent_target_ids, max_phase,  mw_freebase, 
				alogp, hba, hbd, psa,
				rtb, num_ro5_violations, acd_most_apka, acd_most_bpka, acd_logp, acd_logd, full_mwt,
				aromatic_rings, heavy_atoms, qed_weighted, mw_monoisotopic, full_molformula, hba_lipinski, hbd_lipinski  from
				fimm.micha_compounds limit 3";

			$item = new Annotation();
			$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());

			while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {

			}

return $item;
	//return view('welcome');
});
*/

Route::get('/test', function () {
	/*try {
		DB::connection()->getPdo();
	} catch (\Exception $e) {
		die("Could not connect to the database.  Please check your configuration. error:" . $e );
	}*/
	/*$users = DB::select('select distinct standard_inchi_key, name_label as DB_name,  (base_id_url || cim.compound_id::text) as web_link,
			cim.compound_id::text as cimids from chembl22.uc_source uc,drugtargetcommons.compound_id_mapping cim
			where cim.src_id = uc.src_id limit 4');
	return Response::json($users);*/
    //return view('welcome');
});
