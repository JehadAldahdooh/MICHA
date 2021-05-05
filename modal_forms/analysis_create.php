        <div class="modal" id="analysis_Modal">
            <div class="modal-dialog modal-lg" style="width: 90%;">
				<form method="post" id="analysis_form_modal">
                <div class="modal-content sky-form">
                    <!-- Modal Header -->
                    <div class="modal-header sky-form">
                        <header class="modal-title">New Entry Create</header>
                        <!-- <h4 ></h4>-->
                        <button type="button" class="close" data-dismiss="modal" 
						style="padding: 1rem 1rem;margin: 1rem 0rem 0rem auto;">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body ">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                            <strong>Success!</strong>Added successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--<header></header>-->
                        <fieldset>
                             <!--<div class="row">
                              
							   <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Analysis normalization
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input id="Analysis_Normalization" name="Analysis_Normalization" type="text" 
										placeholder="Analysis Normalization">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Analysis formulas
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input id="Analysis_Formulas" name="Analysis_Formulas" type="text" placeholder="Analysis Formulas">
                                    </label>
                                </section>
                            </div> -->
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Analysis reference
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input autocomplete="off" id="Analysis_reference" name="Analysis_reference"
										type="text" placeholder="e.g., breeze.fimm.fi ">
										<div id="suggesstion-box_Analysis_reference"></div>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Analysis metric
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input  autocomplete="off" id="Analysis_result" name="Analysis_result" 
										type="text" placeholder="e.g., IC50, AC50">
                                    	<div id="suggesstion-box_Analysis_result"></div>
									</label>
                                </section>
                            </div>
                        </fieldset>
                        <fieldset>
                           <!-- <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Analysis pipeline name
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input id="Analysis_pipeline_name" name="Analysis_pipeline_name" type="text" 
										placeholder="Analysis pipeline name">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Analysis pipeline	address
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input id="Analysis_pipeline_Address" name="Analysis_pipeline_Address" type="text" 
										placeholder="Analysis pipeline Address">
                                    </label>
                                </section>
                            </div>-->
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Min concentration
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input autocomplete="off" id="min_concentration" name="min_concentration" type="text" 
										placeholder="units in nM e.g., 0.1">
										<div id="suggesstion-box_min_concentration"></div>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Max concentration
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input autocomplete="off" id="max_concentration" name="max_concentration" type="text" 
										placeholder="units in nM e.g., 100">
									<div id="suggesstion-box_max_concentration"></div>

                                    </label>
                                </section>
                            </div>
                        </fieldset>
                     

                        <footer class="modal-footer">
						<input type="hidden" name="id_an" id="id_an" />
    					<input type="hidden" name="action_an" id="action_an" value="" />
						<input type="hidden" name="filename_an" id="filename_an" value="" />
    					<input type="submit" name="save_an" id="save_an" class="btn btn-info" value="Save" />
                        <!--<button type="button" class="btn btn-success" id="SubmitCreate_analysis_Form" style="width:10%;float:right;">Create</button>-->
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:10%;float:right;margin-right:4px;">Close</button>
                        </footer>
                    </div>
                </div>
			</form>
            </div>
        </div>