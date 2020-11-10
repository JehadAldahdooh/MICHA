<div class="bs-example" id="tab_forms" style="display:none;">
   <ul class="nav nav-tabs">
      <li class="nav-item">
         <a href="#expr_whole" class="nav-link active" data-toggle="tab">Experiment form</a>
      </li>
      <li class="nav-item">
         <a href="#cell_whole" class="nav-link" data-toggle="tab">Cells form</a>
      </li>
      <li class="nav-item">
         <a href="#an_whole" class="nav-link" data-toggle="tab">Analysis form</a>
      </li>
   </ul>
   <div class="tab-content">
      <div class="tab-pane fade show active" id="expr_whole">
         <div class="card" id="" >
            <div class="card-header">
               Experiments
               <button style="float: right; font-weight: 900;" class="btn btn-info btn-sm" id="addRecord_expr"
                  data-backdrop="static" data-keyboard="false" type="button" data-toggle="modal" data-target="#expr_Modal">
               Create a new entry
               </button>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="expr_form_table" class="display" style="clear:both;table-layout:fixed;width:100%;">
                     <thead>
                        <tr>
                           <th width="50px"></th>
                           <th width="50px"></th>
                           <th width="188px">Assay format</th>
                           <th width="188px">Assay test type</th>
                           <th width="188px">Detection technology</th>
                           <th width="188px">Endpoint mode</th>
                           <th width="188px">Medium</th>
                           <th width="188px">Plate type</th>
                           <!-- <th width="188px">Measurement</th>-->	
                           <th width="188px">Cell density at plating</th>
                           <th width="188px">Time of treatment</th>
                           <th width="188px">Dilution fold</th>
                           <th width="188px">Vehicle</th>
                           <th width="188px">Method dispensation</th>
                           <th width="188px">Volume per well</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="cell_whole">
         <div class="card" id="" >
            <div class="card-header">
               Cell line
               <button style="float: right; font-weight: 900;" class="btn btn-info btn-sm"  id="addRecord_cell"
                  data-backdrop="static" data-keyboard="false" type="button" data-toggle="modal" data-target="#cell_Modal">
               Create a new entry
               </button>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="cell_form_table" class="display" >
                     <!-- style="clear:both;table-layout:fixed;width:100%;" -->
                     <thead>
                        <tr>
                           <th width="50px"></th>
                           <th width="50px"></th>
                           <th width="188px">Cell line_name</th>
                           <th width="188px">Cell line provenance</th>
                           <th width="188px">ID</th>
                           <th width="188px">Cell type</th>
                           <th width="188px">Cell line organism</th>
                           <th width="188px">Passage number</th>
                           <th width="188px">Modifications</th>
                           <th width="188px">Age</th>
                           <th width="188px">Sex</th>
                           <th width="188px">Diagnosis</th>
                           <th width="188px">Sample material</th>
                           <th width="188px">Date of evaluation</th>
                           <th width="188px">Date of sampling</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="an_whole">
         <div class="card" id="" >
            <div class="card-header">
               Analysis
               <button style="float: right; font-weight: 900;" class="btn btn-info btn-sm"  id="addRecord_analysis"
                  data-backdrop="static" data-keyboard="false" type="button" data-toggle="modal" data-target="#analysis_Modal">
               Create a new entry
               </button>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="analysis_form_table" class="display" style="clear:both;table-layout:fixed;width:100%;">
                     <thead>
                        <tr>
                           <th width="50px"></th>
                           <th width="50px"></th>
                           <!--<th width="200px">Analysis normalization</th>					
                              <th width="188px">Analysis formulas</th>-->					
                           <th width="188px">Analysis reference</th>
                           <th width="188px">Analysis metric</th>
                           <!--<th width="200px">Analysis pipeline name</th>	
                              <th width="220px">Analysis pipeline address</th>-->	
                           <th width="188px">Min concentration</th>
                           <th width="188px">Max concentration</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>		
