	function clearText(field) {
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}


function selectCell_line_name(val) {
$("#Cell_line_name").val(val);
$("#suggesstion-box_Cell_line_name").hide();
}

function selectCell_line_provenance(val) {
$("#Cell_line_provenance").val(val);
$("#suggesstion-box_Cell_line_provenance").hide();
}
function dilution_fold(val) {
$("#dilution_fold").val(val);
$("#suggesstion-box_dilution_fold").hide();
}






function experimental_medium(val) {
$("#Medium").val(val);
$("#suggesstion-box_Medium").hide();
}


function plate_type(val) {
$("#Plate_type").val(val);
$("#suggesstion-box_Plate_type").hide();
}

function cell_density(val) {
$("#Cell_density_at_plating").val(val);
$("#suggesstion-box_Cell_density").hide();
}

function vehicle(val) {
$("#vehicle").val(val);
$("#suggesstion-box_vehicle").hide();
}
function method_dispensation(val) {
$("#method_dispensation").val(val);
$("#suggesstion-box_method_dispensation").hide();
}
function volume_per_well(val) {
$("#volume_per_well").val(val);
$("#suggesstion-box_volume_per_well").hide();
}



function analysis_ref(val) {
$("#Analysis_reference").val(val);
$("#suggesstion-box_Analysis_reference").hide();
}
function analysis_metric(val) {
$("#Analysis_result").val(val);
$("#suggesstion-box_Analysis_result").hide();
}
function min_concentration(val) {
$("#min_concentration").val(val);
$("#suggesstion-box_min_concentration").hide();
}
function max_concentration(val) {
$("#max_concentration").val(val);
$("#suggesstion-box_max_concentration").hide();
}



    $(document).ready(function() {
	$("#Cell_line_name").keyup(function(){
		console.log("typing");
		$.ajax({
		type: "POST",
		url: "readCell.php",
		data:{
			
			keyword: $(this).val(),
			type: 'c_name'
			
		},
		beforeSend: function(){
			$("#Cell_line_name").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Cell_line_name").show();
			$("#suggesstion-box_Cell_line_name").html(data);
			$("#Cell_line_name").css("background","#FFF");
		}
		});
	});


	$("#Cell_line_provenance").keyup(function(){
		console.log("typing");
		$.ajax({
		type: "POST",
		url: "readCell.php",
		data:{
			
			keyword: $(this).val(),
			type: 'c_provenance'
			
		},
		beforeSend: function(){
			$("#Cell_line_provenance").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Cell_line_provenance").show();
			$("#suggesstion-box_Cell_line_provenance").html(data);
			$("#Cell_line_provenance").css("background","#FFF");
		}
		});
	});





	$("#Medium").keyup(function(){
		console.log("MEDIUM");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'experimental_medium'
			
		},
		beforeSend: function(){
			$("#Medium").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Medium").show();
			$("#suggesstion-box_Medium").html(data);
			$("#Medium").css("background","#FFF");
		}
		});
	});

		
		
		$("#Plate_type").keyup(function(){
		console.log("Plate_type");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'Plate_type'
			
		},
		beforeSend: function(){
			$("#Plate_type").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Plate_type").show();
			$("#suggesstion-box_Plate_type").html(data);
			$("#Plate_type").css("background","#FFF");
		}
		});
	});
	
		
		
		
		
		$("#Cell_density_at_plating").keyup(function(){
		console.log("Cell_density_at_plating");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'Cell_density_at_plating'
			
		},
		beforeSend: function(){
			$("#Cell_density_at_plating").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Cell_density").show();
			$("#suggesstion-box_Cell_density").html(data);
			$("#Cell_density_at_plating").css("background","#FFF");
		}
		});
	});
	
				
		


		$("#dilution_fold").keyup(function(){
		console.log("dilution_fold");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'dilution_fold'
			
		},
		beforeSend: function(){
			$("#dilution_fold").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_dilution_fold").show();
			$("#suggesstion-box_dilution_fold").html(data);
			$("#dilution_fold").css("background","#FFF");
		}
		});
	});

	
		



















		$("#vehicle").keyup(function(){
		console.log("vehicle");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'vehicle'
			
		},
		beforeSend: function(){
			$("#vehicle").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_vehicle").show();
			$("#suggesstion-box_vehicle").html(data);
			$("#vehicle").css("background","#FFF");
		}
		});
	});

			$("#method_dispensation").keyup(function(){
		console.log("method_dispensation");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'method_dispensation'
			
		},
		beforeSend: function(){
			$("#method_dispensation").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_method_dispensation").show();
			$("#suggesstion-box_method_dispensation").html(data);
			$("#method_dispensation").css("background","#FFF");
		}
		});
	});

			$("#volume_per_well").keyup(function(){
		console.log("volume_per_well");
		$.ajax({
		type: "POST",
		url: "readexpr.php",
		data:{
			
			keyword: $(this).val(),
			type: 'volume_per_well'
			
		},
		beforeSend: function(){
			$("#volume_per_well").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_volume_per_well").show();
			$("#suggesstion-box_volume_per_well").html(data);
			$("#volume_per_well").css("background","#FFF");
		}
		});
	});

	














		
		
		
		
		


			$("#Analysis_reference").keyup(function(){
		console.log("Analysis_reference");
		$.ajax({
		type: "POST",
		url: "readana.php",
		data:{
			
			keyword: $(this).val(),
			type: 'Analysis_reference'
			
		},
		beforeSend: function(){
			$("#Analysis_reference").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Analysis_reference").show();
			$("#suggesstion-box_Analysis_reference").html(data);
			$("#Analysis_reference").css("background","#FFF");
		}
		});
	});		



	$("#Analysis_result").keyup(function(){
		console.log("Analysis_result");
		$.ajax({
		type: "POST",
		url: "readana.php",
		data:{
			
			keyword: $(this).val(),
			type: 'Analysis_result'
			
		},
		beforeSend: function(){
			$("#Analysis_result").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_Analysis_result").show();
			$("#suggesstion-box_Analysis_result").html(data);
			$("#Analysis_result").css("background","#FFF");
		}
		});
	});			
	
	
	
	$("#min_concentration").keyup(function(){
		console.log("min_concentration");
		$.ajax({
		type: "POST",
		url: "readana.php",
		data:{
			
			keyword: $(this).val(),
			type: 'min_concentration'
			
		},
		beforeSend: function(){
			$("#min_concentration").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_min_concentration").show();
			$("#suggesstion-box_min_concentration").html(data);
			$("#min_concentration").css("background","#FFF");
		}
		});
	});			
	
	
	$("#max_concentration").keyup(function(){
		console.log("max_concentration");
		$.ajax({
		type: "POST",
		url: "readana.php",
		data:{
			
			keyword: $(this).val(),
			type: 'max_concentration'
			
		},
		beforeSend: function(){
			$("#max_concentration").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box_max_concentration").show();
			$("#suggesstion-box_max_concentration").html(data);
			$("#max_concentration").css("background","#FFF");
		}
		});
	});		


	});