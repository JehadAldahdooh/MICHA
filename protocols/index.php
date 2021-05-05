<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MICHA</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126984000-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-126984000-3');
    </script>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- DataTable Libaraies -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.8/css/jquery.dataTables.css">
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css">

    <link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css?version=3" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
    <link rel="stylesheet" type="text/css" href="../theme_files/css/main.css?version=2" >
	<link rel="stylesheet" type="text/css" href="../theme_files/css/scrollable_banner_right.css?version=3" >


<script language="javascript" type="text/javascript">
	function clearText(field) {
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}

$(document).ready(function() {
    var p_name = 'FIMM';
	
    //cell line 
    var table1 = $('#cell_IMTM').DataTable({
        serverSide: true,
        pageLength: 10, 
        'ajax': {
            url: "covid19_data_all.php",
            //type:"POST",  
            "data": function(d) {
                d.type = 'cell',
                    d.p_name = p_name
            },
            beforeSend: function() {
                $('#cell_IMTM > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="6" class="dataTables_empty">Loading&hellip;</td>' +
                    '</tr>'
                );
            }
        },
        responsive: 'true',
        deferRender: true,
        "scrollX": true,
        "bjQueryUI": true
    });


    //results 2 expr
    var table2 = $('#expr_IMTM').DataTable({
        serverSide: true,
        pageLength: 10, // default is 5 to be shown
        // scrollX: true,
        'ajax': {
            url: "covid19_data_all.php",
            //type:"POST",  
            "data": function(d) {
                d.type = 'expr',
                    d.p_name = p_name
            },
            beforeSend: function() {
                $('#expr_IMTM > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="6" class="dataTables_empty">Loading&hellip;</td>' +
                    '</tr>'
                );
            }
        },
        "fixedHeader": {
            header: true,
        },
        "autoWidth": false,
        //responsive: 'true',
        deferRender: true,
        "scrollX": true
    });




    //analysis
    var table3 = $('#analysis_IMTM').DataTable({
        serverSide: true,
        pageLength: 10, 
        'ajax': {
            url: "covid19_data_all.php",
            //type:"POST",  
            "data": function(d) {
                d.type = 'analysis',
                    d.p_name = p_name
            },
            beforeSend: function() {
                $('#analysis_IMTM > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="6" class="dataTables_empty">Loading&hellip;</td>' +
                    '</tr>'
                );
            }
        },
        responsive: 'true',
        deferRender: true,
    });


    //compound
    var table4 = $('#comp_IMTM').DataTable({
        serverSide: true,
        pageLength: 10, 
        'ajax': {
            url: "covid19_data_all.php",
            //type:"POST",  
            "data": function(d) {
                d.type = 'compound',
                    d.p_name = p_name
            },
            beforeSend: function() {
                $('#comp_IMTM > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="6" class="dataTables_empty">Loading&hellip;</td>' +
                    '</tr>'
                );
            }
        },
        responsive: 'true',
        deferRender: true,
    });


    //Here is correct as it will created after the datable initialized, otherwise you will get an error 
    //document.getElementsByClassName('dt-buttons')[0].style.display = "none";
    //document.getElementById('results_filter').style.display = "none";

    $('#FIMM_pro').click(function(e) {
        e.preventDefault();
        p_name = 'FIMM';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();
        $('#h2_title').text('FIMM protocol');
        $('#pro_text').text('Institute for Molecular Medicine Finland (FIMM) is an international research institute in Helsinki focusing' +
            'on human genomics and personalized medicine.' +
            'FIMM integrates molecular medicine research,Technology Centre and Biobanking Infrastructures' +
            'under one roof and thereby promotestranslational ' +
            'research and adoption of personalized medicine in health care.' +
            ' '
        );
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://www.fimm.fi/");
        document.getElementById("institute_link").style.display = "inline-block";

    });


    //covid 19
    $('#IMTM_pro').click(function(e) {
        e.preventDefault();
        $('#h2_title').text('Covid19 protocol');
        p_name = 'Covid19';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();

        $('#pro_text').text('We are working on the FAIRification of Covid19 drug screening studies.');
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://micha-protocol.org/covid19");
        document.getElementById("institute_link").style.display = "inline-block";
    });




    $('#Mario_pro').click(function(e) {
        e.preventDefault();
        $('#h2_title').text('Mario protocol protocol');
        p_name = 'MarioNegri';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();

        $('#pro_text').text('Mario Negri Institute for Pharmacological Research (MN) is an international research institute in Milan.' +
            'The institute conducts scientific research with the aim of improving human health.' +
            'The work begins by taking stock of the problems that patients face, then moves to' +
            'experimental models – at the cellular and molecular level – and then the focus returns to patients.'
        );
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://www.marionegri.it/eng/home");
        document.getElementById("institute_link").style.display = "inline-block";

    });

    $('#GDSC_pro').click(function(e) {
        e.preventDefault();
        $('#h2_title').text('Genomics of Drug Sensitivity (GDSC)  protocol');
        p_name = 'gdsc';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();

        $('#pro_text').text('Genomics of Drug Sensitivity (GDSC) have screened >1000 genetically characterised human cancer ' +
            'cell lines with hundreds of anti-cancer therapeutics');
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://www.cancerrxgene.org/");
        document.getElementById("institute_link").style.display = "inline-block";

    });

    $('#CCLE_pro').click(function(e) {
        e.preventDefault();
        $('#h2_title').text('Cancer Cell Line Encyclopedia (CCLE)');
        p_name = 'ccle';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();
        $('#pro_text').text('Cancer Cell Line Encyclopedia (CCLE) performed comprehensive screening of hundreds of cell lines across various anti-cancer therapeutics.');
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://portals.broadinstitute.org/ccle/about");
        document.getElementById("institute_link").style.display = "inline-block";

    });

    $('#CTRP_pro').click(function(e) {
        e.preventDefault();
        $('#h2_title').text('Cancer Therapeutics Response Portal (CTRP) ');
        p_name = 'ctrpv2';
        table1.ajax.reload();
        table2.ajax.reload();
        table3.ajax.reload();
        table4.ajax.reload();
        $('#pro_text').text('The Cancer Therapeutics Response Portal (CTRP) links genetic, lineage, and other cellular features of cancer cell lines to small-molecule sensitivity with the goal of accelerating discovery of patient-matched cancer therapeutics.');
        //$('#pro_text').css('text-align','justify');
        $('.noHover').attr("href", "https://portals.broadinstitute.org/ctrp.v2.1/");
        document.getElementById("institute_link").style.display = "inline-block";
    });
});
</script>
</head>
<body>
<div id="templatemo_wrapper">
<?php include '../theme_files/header.php' ;?>
<?php include '../theme_files/search_compound.php' ;?>
        <!------------------------->
        <!------------------------->
        <div id="templatemo_banner">
            <div id="banner_left">
                <p id="pro_text" style="display: inline;">
					The FAIRified drug screening protocols are shown below:
                    <span></span>
                </p>
                <div style="display:none;" id="institute_link" class="button_01">
                    <a style="margin-top: 2px;" href="" target="_blank" class='noHover'>More</a>
                </div>
            </div>
            <div id="banner_right" style="overflow-y: scroll;">
				<div class="banner_button">
                    <a href="#IMTM" id="GDSC_pro">GDSC </a>
                </div>
				<div class="banner_button">
                    <a href="#IMTM" id="CCLE_pro">CCLE </a>
                </div>
				 <div class="banner_button">
                    <a href="#IMTM" id="CTRP_pro">CTRP </a>
                </div>
                <div class="banner_button" data-target="#templatemo_content">
                    <a href="#IMTM" id="FIMM_pro">FIMM</a>
                </div>
                <div class="banner_button">
                    <a href="#IMTM" id="IMTM_pro">Covid19</a>
                </div>
                <div class="banner_button">
                    <a href="#IMTM" id="Mario_pro">Mario Negri </a>
                </div>
				
            </div>
        </div>
        <!-- end of templatemo_banner -->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <div id="templatemo_content_top"></div>
        <div id="templatemo_content">
            <div class="section_w940">
                <!------------------------------------------------------------------------------------------------->				
                <!------------------------------------------------------------------------------------------------->
                <div class="box margin_r30 box_border" style="width: 900px;border-right: 0px dotted #999;" id="IMTM">
                    <h2 id="h2_title">Institute for Molecular Medicine Finland (FIMM) protocol </h2>
					<p id="pro_text" style="display: inline;margin-bottom:20px;">
					
					<span></span>
					</p>
                    <ul class="nav nav-tabs" role="tablist" style="margin-top:20px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#Compound_IMTM" role="tab" data-toggle="tab">Compound</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Cell_line_IMTM" role="tab" data-toggle="tab">Cell line</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Experiment_IMTM" role="tab" data-toggle="tab">Experiment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Analysis_IMTM" role="tab" data-toggle="tab">Analysis</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane  active" id="Compound_IMTM">
                            <table id="comp_IMTM" class="display">
                                <thead>
                                    <tr>
                                        <th>
                                            Compound name
                                        </th>
                                        <th>
                                            InchiKey
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Cell_line_IMTM">
                            <div id="results_table_1">
                                <table id="cell_IMTM" class="display" style="clear:both;table-layout:fixed;width:100%;">
                                    <thead>
                                        <tr>
                                            <th width="188px">
                                                Cell line
                                            </th>
                                            <th width="188px">
                                                Cell line provenance
                                            </th>
                                            <th width="188px">
                                                Patient age
                                            </th>
                                            <th width="188px">
                                                Patient sex
                                            </th>
                                            <th width="188px">
                                                Patient diagnosis
                                            </th>
                                            <th width="188px">
                                                Patient sample
                                            </th>
                                            <th width="188px">
                                                Patient sample date
                                            </th>
                                            <th width="188px">
                                                Patient evaluation date
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Experiment_IMTM">
                            <table id="expr_IMTM" class="display" style="clear:both;table-layout:fixed;width:100%;">
                                <thead>
                                    <tr>
                                        <th width="188px">
                                            Dilution fold
                                        </th>
                                        <th width="188px">
                                            Vehicle
                                        </th>
                                        <th width="188px">
                                            Experimental medium
                                        </th>
                                        <th width="188px">
                                            Plate type
                                        </th>
                                        <th width="188px">
                                            Assay_format
                                        </th>
                                        <th width="188px">
                                            Assay test type
                                        </th>
                                        <th width="188px">
                                            Detection tech
                                        </th>
                                        <th width="188px">
                                            Cell density
                                        </th>
                                        <th width="188px">
                                            Method dispensation
                                        </th>
                                        <th width="188px">
                                            Volume per well
                                        </th>
                                        <th width="188px">
                                            Treatment time
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Analysis_IMTM">
                            <table id="analysis_IMTM" class="display">
                                <thead>
                                    <tr>
                                        <th>
                                            Min concentration (nM)
                                        </th>
                                        <th>
                                            Max concentration (nM)
                                        </th>
                                        <th>
                                            Analysis ref
                                        </th>
                                        <th>
                                            Analysis metric
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>				
				
                <div class="cleaner"></div>
            </div>
        </div>
        <div id="templatemo_content_bottom"></div>
		
		<?php include '../theme_files/footer.php'; ?>

        <div class="cleaner_h40"></div>
    </div>
    <!-- end of footer -->
    </div>
    
    <script type="text/javascript">
	   window._urq = window._urq || [];
	   _urq.push(['initSite', '1b1bafee-3533-4536-bdd8-3c02b964d2b8']);
	   (function() {
	   var ur = document.createElement('script'); ur.type = 'text/javascript'; ur.async = true;
	   ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
	   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ur, s);
	   })();
	</script>
</body>
</html>