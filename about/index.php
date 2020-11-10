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
	<!------------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css?version=3">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
	crossorigin="anonymous"></script>

    <link href="../templatemo_style.css?version=5" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../bootstrap.min.css?version=3">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
	crossorigin="anonymous"></script>

    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

      <link rel="stylesheet" type="text/css" href="../theme_files/css/main.css?version=2" >

</head>

<body>
<div id="templatemo_wrapper">
<?php include '../theme_files/header.php' ;?>
<?php include '../theme_files/search_compound.php' ;?>

<!-- end of search -->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<div id="templatemo_banner">
   <div id="" style="padding-top:10px;padding-bottom:10px;">
      <p style="line-height: 1.7em; padding-top:5px
         letter-spacing: 1px;
         // font-family: Tahoma, Geneva, sans-serif;
         //font-size: 14px;
         color: black;text-align: justify;">
         &nbsp; Chemosensitivity assays (drug sensitivity screens) have been increasingly used for preclinical 
         drug discovery and clinical trial optimization. However, typical drug sensitivity assays are lack 
         of sufficient annotation and standardization to make the data FAIR (Findable, Accessible, Interoperable and Reusable),
         resulting in a poor replicability as well as limited impact on drug discovery.
         To address these issues, we have recently launched MICHA (Minimal information for Chemosensitivity Assays), 
         a web server at <a style="font-weight:bold;" href="https://micha-protocol.org/">https://micha-protocol.org/</a> 
		 for the annotation of drug sensitivity screens for cell lines and patient-derived samples,
         including 1) compounds 2) specimens 3) assay protocols and 4) quality control and data processing methods. 
         <span></span> 
      </p>
      <br>
      <div class="cleaner_h20"></div>
      <div class="cleaner_h20"></div>
   </div>
</div>
<!-- end of templatemo_banner -->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<div id="templatemo_content_top"></div>
<div id="templatemo_content">
   <p class="p_ablout" align="justify" style="margin-bottom:15px;">
      MICHA is a user-driven project that allows the drug discovery research community to adopt advanced data standardization tools. 
      We will first develop FAIR-compliant data resources by delivering identifier standards, ontologies and ontology services as 
	  well as content standards. 
      The project will ensure drug sensitivity data are FAIR to support the downstream analysis and ultimately clinical translation.
   </p>
   <div class="section_w940">
      <div class="box margin_r30 box_border" style="width: 400px;">
         <h2>What MICHA is? </h2>
         <p class="p_ablout" align="justify">
            The aim is to determine the ‘minimal’ information that:
         </p>
         <ol class="numberlist">
            <li><a> 
					Captures critical drug sensitivity assay components.
			</a></li>
            <li><a> 
					Allows the FAIRIfication and cataloguing of drug sensitivity screen studies.
			</a></li>
            <li><a> 
					Complies with the guidelines of scientific publications and preclinical drug evaluation.
			</a></li>
         </ol>
         </p>
      </div>
      <div class="box margin_r30 box_border" style="width: 400px;border-right: 0px dotted #999;margin-bottom: 10px;">
         <h2>
		 What MICHA is not?
		 </h2>
         <ol class="numberlist">
            <li><a>  
				MICHA is not to standardize the protocols among different labs; rather, 
				it allows the annotation of these versatile protocols FAIR (Findable, Accessible, Interoperable and Reusable).
			    </a>
            </li>
            <li><a>  
			   MICHA is not a database of actual drug sensitivity measurements;
               rather, it is a catalogue of drug sensitivity assays to facilitate the data exchange.
			   </a>
            </li>
         </ol>
      </div>
      <div class="section_w240" style="width: 900px;" id="compound_point">
         MICHA provides a webserver to automatically extracts compounds, cell line information from public databases, and generate 
		 complete reports.
         Target users are biologists, chemists, translational researchers, assay developers, data scientists, and pharmaceutical companies.				
      </div>
      <div class="cleaner"></div>
   </div>
</div>
<div id="templatemo_content_bottom"></div>
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->		
<div id="templatemo_content" style="margin-top:20px;">
   <div class="box margin_r30 " class="section_w240" style="width: 400px;">
      <h2 style="margin-left:7px;">
	  MICHA Components
	  </h2>
      <ol class="numberlist">
         <li><a> 
		 compounds.
		 </a></li>
         <li><a> 
		 specimens.
		 </a></li>
         <li><a> 
		 assay protocols.
		 </a></li>
         <li><a> 
		 quality control and data processing methods.
		 </a></li>
      </ol>
      <!--<div class="sub_content">
         <p>
             <img src="2.PNG" width="390px" height="60%" style="float:center;">
         </p>
         </div>-->
   </div>
   <div class="box margin_r30 " class="section_w240" style="width: 390px;">
      <h2 style="margin-left:7px;">Implementation</h2>
      <div class="sub_content">
         <img src="3.PNG" width="500px" height="250px" style="float:center;">
      </div>
   </div>
</div>
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<div id="templatemo_content_top"></div>
<div id="templatemo_content">
   <div class="section_w940">
      <div class="box margin_r30 box_border" style="width: 900px;border-right: 0px dotted #999;">
         <h2>The consortium:</h2>
         <p align="justify" class="p_ablout">
            We are part of EATRIS (European Infrastructure for Translation Medicine), 
            whose aim is to support researchers in developing their biomedical discoveries into novel translational tools 
            and interventions for better health outcomes for society. Together with EATRIS, we are also involved in EOSC-Life project, 
            whose aim is to populate EOSC with the scientific data resources and computational tools and drive usage by 
			1.7M researchers from Europe.
         <p align="justify" class="isnot">
            <img src="../2.PNG" width="350px" height="200px" 
               style="margin-left:20px;border-radius: 10%;float:center;">
         </p>
         </p>
      </div>
      <div class="cleaner"></div>
   </div>
</div>
<div id="templatemo_content_bottom"></div>
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<!------------------------------------------------->
<?php include '../theme_files/footer.php'; ?>
</div>
<div class="cleaner_h40"></div>
</div>
<!-- end of footer -->
</div>
    <!-- end of wrapper -->
    <!-- templatemo 229 light space -->
    <!-- 
Light Space Template 
http://www.templatemo.com/preview/templatemo_229_light_space 
-->

    <script type="text/javascript">
        window._urq = window._urq || [];
        _urq.push(['initSite', '1b1bafee-3533-4536-bdd8-3c02b964d2b8']);
        (function() {
            var ur = document.createElement('script');
            ur.type = 'text/javascript';
            ur.async = true;
            ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ur, s);
        })();
    </script>
</body>
</html>