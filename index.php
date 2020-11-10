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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
<link href="templatemo_style.css?version=8" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css?version=3" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="js/home_page.js"> </script> 
<link rel="stylesheet" type="text/css" href="theme_files/css/home_page_style.css?version=3" >

</head>
<body>
<div id="templatemo_wrapper">
   <?php include 'theme_files/header.php' ;?>
   <?php include 'theme_files/search_compound.php' ;?>
   <div id="templatemo_banner">
      <div id="banner_left">
         <!-- <p style="">MICHA (Minimal Information for CHemosensitivity Assay) is a protocol for the annotation and reporting of 
            Chemosensensitivity assays by FAIRifying drug sensitivity screening data.<span> </span> </p> -->
         <p style="">
            MICHA (Minimal Information for CHemosensitivity Assay) is a web-based platform to facilitate the annotation of 
            major components of common chemosensensitivity (drug sensitivity) assays, including 1) compounds, 2) samples, 
            3) reagents, and 4) data processing references. 
            <span> </span>
         </p>
         <div class="" style="width: 230px;display:inline-block;">
            <div class="info-box bg-aqua" style="min-height:30px;">
               <div class="info-box-content">
                  <span class="info-box-number"  style="font-size:20px;font-style:bold;">>800k</span>
                  <span style="color:green;  font-weight: bold;">
                  Compounds with validated targets
                  </span>
               </div>
            </div>
         </div>
         <div class="" style="width: 238px;display:inline-block;">
            <div class="info-box bg-green" style="min-height:30px;">
               <div class="info-box-content">
                  <span class="info-box-number" style="font-size:20px;font-style:bold;">3600 </span>
                  <span style="color:green;  font-weight: bold;" >
                  Compounds with disease indications
                  </span>
               </div>
            </div>
         </div>
         <div class="" style="display:inline-block;width:196px;">
            <div class="info-box bg-yellow" style="min-height:30px;">
               <div class="info-box-content">
                  <span class="info-box-number" style="font-size:20px;font-style:bold;"> 11 </span>
                  <span  style="color:green;  font-weight: bold;">Drug screening protocols </span>
               </div>
            </div>
         </div>
      </div>
      <div id="banner_right">
         <div class="banner_button" data-toggle="collapse" data-target="#templatemo_content">
            <a href="#style_upload" id="upload_id" class="button-hand">Step 1</a>  <!-- here href by id of div-->
         </div>
         <div class="banner_button">
            <a id="step2">Step 2</a>
         </div>
         <div class="banner_button">
            <a id="step3">Step 3</a>
         </div>
      </div>
   </div>
   <!-- end of templatemo_banner -->
   <div id="templatemo_content_top" ></div>
   <div id="templatemo_content">
      <div class="section_w940">
         <!-------------------------------Upload file----------------------------------------------->
         <!----------------------------------------------------------------------------------------->
         <div class="box margin_r30 box_border style_upload" id="style_upload" style="width: 900px;display:none;border-right: 0px dotted #999;">
            <div  class="col-sm-8 col-md-8 col-sm-offset-3 col-md-offset-8" id="dropme" style="btext-align: center;padding:30px;margin:0px auto;float: none;">
               <form action="compounds" enctype="multipart/form-data" class="form-horizontal" method="post">
                  <div class="preview"></div>
                  <p id="error1" style="display:none; color:#FF0000;">
                     Invalid file format! File format must be xls or xlsx.
                  </p>
                  <p id="error2" style="display:none; color:#FF0000;">
                     Maximum file size limit is 2MB.
                  </p>
                  <input type="file" name="file" id="file" class="form-control" style="width: 96%;    height: 30%;" />
                  <br>
                  <button id="submit" name="submit" class="banner_button btn btn-primary upload-image">Upload File</button>
                  <a href="template" style=" color: #052b5a;
                     font-size: 18px;
                     background: url(images/temp_button.png);" href="template" class="banner_button btn btn-primary upload-image">Upload Template</a>
                  <a   href="comp_inchi.xlsx" style="
                     color: #052b5a;
                     font-size: 18px;
                     background: url(images/temp_button.png);" class="btn btn-primary">Download Template</a>
               </form>
               <br>
               <div class="card">
                  <div class="card-header">
                     Upload rules:
                  </div>
                  <div class="card-body">
                     <div >
                        <div class="col-x1-12">
                           <p >
                              - Allowed extension is: xlsx or xls 
                           </p>
                        </div>
                        <div class="col-x1-12">
                           <p >
                              - Max Size is: 2 MB
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <p   style="text-align: justify;">
            </p>
            <!--<div class="cleaner_h10"></div>
               <div class="button_01"><a href="#">More</a></div>-->
         </div>
         <!----------------------------------------------------------------------------------------->
         <!----------------------------------------------------------------------------------------->
         <!----------------------------------------------------------------------------------------->
         <!----------------------------------------------------------------------------------------->
         <div class="box margin_r30 box_border" id="style1">
            <h2>Step1: </h2>
            <div class="box_image_wrapper">
               <img src="images/folder.png" alt="product 1" />
            </div>
            <p   style="text-align: justify;">
               Users can upload compound names and standard InChiKeys using excel file. After clicking on upload button, 
               MICHA will extract publicly available information for the compounds including primary targets, 
               other potent targets, disease indications and physiochemical properties. 
            </p>
            <!--<div class="cleaner_h10"></div>
               <div class="button_01"><a href="#">More</a></div>-->
         </div>
         <div class="box margin_r30 box_border" id="style2">
            <h2>Step2:</h2>
            <div class="box_image_wrapper">
               <img src="images/paint.png" alt="product 1" />
            </div>
            <p style="text-align: justify;">
               After viewing the information returned by MICHA, users need to click on ‘Next’ button to go for
               the annotations of samples, reagents and data processing references. The definitions of assay 
               ontology terms are explained in the ‘Glossary’ tab.
            </p>
         </div>
         <div class="box" id="style3">
            <h2>Step3: Final result</h2>
            <div class="box_image_wrapper">
               <img src="images/safe.png" alt="product 1" />
            </div>
            <p style="text-align: justify;">
               Finally, a tabular report can be generated to include all the annotation results for the users. 
               In addition, users may also browse the catalogue of drug sensitivity assay protocols which are already FAIRified by MICHA.
            </p>
         </div>
         <div class="cleaner"></div>
      </div>
   </div>
   <div id="templatemo_content_bottom"></div>
   <?php include 'theme_files/footer.php'; ?>
</div>
<div class="cleaner_h40"></div>
</div> <!-- end of footer -->
</div> <!-- end of wrapper -->
<!-- templatemo 229 light space -->
<!-- 
   Light Space Template 
   http://www.templatemo.com/preview/templatemo_229_light_space 
   -->
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