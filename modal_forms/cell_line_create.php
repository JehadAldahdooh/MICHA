        <div class="modal" id="cell_Modal">
            <div class="modal-dialog modal-lg" style="width: 90%;">
			   <form method="post" id="cell_form_modal">
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
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Cell line name
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
										
                                        <input autocomplete="off" type="text" name="Cell_line_name" id="Cell_line_name" type="text" placeholder="Cell line name">
                                        <div id="suggesstion-box_Cell_line_name"></div>

                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Cell line provenance
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
										
                                        <input autocomplete="off" name="Cell_line_provenance" id="Cell_line_provenance" type="text" 
										placeholder="Cell line provenance">
                                        <div id="suggesstion-box_Cell_line_provenance"></div>
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> ID
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input name="CID" id="CID" type="text" placeholder="ID">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Cell type
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input name="Cell_type" id="Cell_type" type="text" placeholder="Cell type">
                                    </label>
                                </section>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Cell line organism
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Cell_line_organism" id="Cell_line_organism" type="text" 
										placeholder="Cell line organism">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Passage number
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Passage_number" id="Passage_number" type="text" placeholder="Passage number">
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Modifications
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Modifications" id="Modifications" type="text" placeholder="Modifications">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Age
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input name="Age" id="Age" type="text" placeholder="Age">
                                    </label>
                                </section>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Sex
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Sex" id="Sex" type="text" placeholder="Sex">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Diagnosis
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Diagnosis" id="Diagnosis" type="text" placeholder="Diagnosis">
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Sample material
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Sample_material" id="Sample_material" type="text" placeholder="Sample material">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;"> Date of evaluation
                                        <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                                        <input name="Date_of_evaluation" id="Date_of_evaluation" type="text" placeholder="Date of evaluation">
                                    </label>
                                </section>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input" style="color:lightgrey;">Date of sampling
                                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                                        <input name="Date_of_sampling" id="Date_of_sampling" type="text" placeholder="Date of sampling">
                                    </label>
                                </section>
                             
                            </div>
                        </fieldset>


                        <footer class="modal-footer">
											 <input type="hidden" name="id_c" id="id_c" />
    					<input type="hidden" name="action_c" id="action_c" value="" />  
						
						<input type="hidden" name="filename_c" id="filename_c" value="" />

    					<input type="submit" name="save_c" id="save_c" class="btn btn-info" value="Save" />

                            <!--<button type="button" class="btn btn-success" id="SubmitCreate_cell_Form" style="width:10%;float:right;">Create</button>-->
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:10%;float:right;margin-right:4px;">Close</button>
                        </footer>
                    </div>
                </div>
			</form>
            </div>
        </div>