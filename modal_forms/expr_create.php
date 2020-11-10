<!-- Modal -->
<div class="modal" id="expr_Modal">
   <div class="modal-dialog modal-lg" style="width: 90%;">
      <form method="post" id="expr_form_modal">
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
                        <label class="label" style="color:lightgrey;">Assay format</label>
                        <label class="select" >
                           <select id="assa" name="Assay_format">
                              <option value="biochemical"/>Biochemical
                              <option value="cell_based"/>Cell based
                              <option value="cell_free"/>Cell free
                              <option value="physiochemical"/>Physiochemical
                              <option value="tissue"/>Tissue
                              <option value="organism_based"/>Organism_based
                           </select>
                           <i></i>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="label" style="color:lightgrey;">Assay test type</label>
                        <label class="select">
                           <select name="Assay_test_type">
                              <option value="Invitro"/>Invitro
                              <option value="Invivo"/>Invivo
                              <option value="Exvivo"/>Exvivo
                              <option value="Other"/>Other
                           </select>
                           <i></i>
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-6">
                        <label class="label" style="color:lightgrey;">Detection technology</label>
                        <label class="select">
                           <select name="Detection_technology">
                              <option value="fluoresecence"/>Fluoresecence
                              <option value="luminescence"/>Luminescence
                              <option value="spectrophotometry"/>Spectrophotometry
                              <option value="radiometry"/>Radiometry
                              <option value="microscopy"/>Microscopy
                              <option value="label_free_technology"/>Label free technology
                              <option value="fluorescence_polarization"/>Fluorescence_polarization
                              <option value="TRF"/>TRF
                              <option value="TR_FRET"/>TR FRET
                              <option value="AlphaScreen"/>AlphaScreen
                              <option value="qPCR"/>qPCR
                              <option value="termal_shift"/>Termal shift
                           </select>
                           <i></i>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="label" style="color:lightgrey;">End Point mode</label>
                        <label class="select">
                           <select name="Endpoint_mode">
                              <option value="activation"/>	Activation
                              <option value="cytotoxocity"/>Cytotoxocity
                              <option value="growth_inhibition"/>Growth inhibition
                              <option value="inhibition"/>Inhibition
                              <option value="inverse_agonist" />Inverse agonist
                           </select>
                           <i></i>
                        </label>
                     </section>
                  </div>
               </fieldset>
               <fieldset>
                  <div class="row">
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Medium
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="Medium" name="Medium" type="text" placeholder="Medium">
                           <div id="suggesstion-box_Medium"></div>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Plate type
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="Plate_type" name="Plate_type" type="text" placeholder="Plate type">
                           <div id="suggesstion-box_Plate_type"></div>
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <!-- <section class="col col-6">
                        <label class="input" style="color:lightgrey;"> Measurement
                            <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                            <input id="Measurement" name="Measurement"  type="text" placeholder="Measurement">
                        </label>
                        </section>-->
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Cell density at plating
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="Cell_density_at_plating" name="Cell_density_at_plating"  type="text" placeholder="Cell density at plating">
                           <div id="suggesstion-box_Cell_density"></div>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">Time of treatment
                        <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                        <input id="Time_of_treatment" name="Time_of_treatment" type="text" placeholder="Time of treatment">
                        </label>
                     </section>
                  </div>
               </fieldset>
               <fieldset>
                  <div class="row">
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Dilution fold
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="dilution_fold" name="dilution_fold"  type="text" placeholder="Dilution fold">
                           <div id="suggesstion-box_dilution_fold"></div>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Vehicle
                           <i class="icon-prepend icon-user" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="vehicle" name="vehicle" type="text" placeholder="vehicle">
                           <div id="suggesstion-box_vehicle"></div>
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Method dispensation
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input  autocomplete="off" id="method_dispensation" name="method_dispensation" type="text" placeholder="Method dispensation">
                           <div id="suggesstion-box_method_dispensation"></div>
                        </label>
                     </section>
                     <section class="col col-6">
                        <label class="input" style="color:lightgrey;">
                           Volume per well
                           <i class="icon-prepend icon-th-large" style="margin-top: 20px;"></i>
                           <input autocomplete="off" id="volume_per_well" name="volume_per_well" type="text" placeholder="Volume per well">
                           <div id="suggesstion-box_volume_per_well"></div>
                        </label>
                     </section>
                  </div>
               </fieldset>
               <footer class="modal-footer">
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" name="action" id="action" value="" />
                  <input type="hidden" name="filename" id="filename" value="" />
                  <input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
                  <!-- <button type="button" class="btn btn-success" id="SubmitCreate_expr_Form" style="width:10%;float:right;">Create</button>-->
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:10%;float:right;margin-right:4px;">Close</button>
               </footer>
            </div>
         </div>
      </form>
   </div>
</div>	