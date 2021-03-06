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
   
    <link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css?version=3" >
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
	crossorigin="anonymous"></script>
	
    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
    <style>
	
	
	
	/* css list with numeber circle background -------------- */
.numberlist{
	//width:450px;

}
.numberlist ol{
	            counter-reset: li;
				list-style: none;
				*list-style: decimal;
				font: 15px 'trebuchet MS', 'lucida sans';
				//padding: 0;
				//margin-bottom: 4em;

}
.numberlist ol ol{
				margin: 0 0 0 2em;
			}
			
.numberlist a{
				position: relative;
				display: block;
				padding: .4em .4em .4em 3em;
				*padding: .4em;
				margin: .5em 0;
			//	background: #FFF;
				color: #444;
				text-decoration: none;
				-moz-border-radius: .3em;
				-webkit-border-radius: .3em;
				border-radius: .3em;
				
			}

.numberlist a:hover{
				background: #cbe7f8;
				//text-decoration:underline;
			}
.numberlist a:before{
				//content: counter(li);
				content: counters(li, ".") " ";   
				counter-increment: li;
				position: absolute;	
				left: -1.3em;
				top: 50%;
				margin-top: -1.3em;
				background: #87ceeb;
				height: 2em;
				width: 3em;
				line-height: 2em;
				border: .3em solid #fff;
				text-align: center;
				font-weight: bold;
				-moz-border-radius: 2em;
				-webkit-border-radius: 2em;
				border-radius: 2em;
				color:#FFF;
			}

/* End css list with numeber circle background -------------- */





        @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");
        .numbering {
            max-width: 350px;
            counter-reset: my-awesome-counter;
            list-style: none;
            padding-left: 40px;
        }
        
        .numbering li {
            margin: 0 0 0.5rem 0;
            counter-increment: my-awesome-counter;
            position: relative;
        }
        
        .numbering li::before {
            content: counter(my-awesome-counter);
            color: #fcd000;
            font-size: 1.5rem;
            font-weight: bold;
            position: absolute;
            --size: 32px;
            left: calc(-1 * var(--size) - 10px);
            line-height: var(--size);
            width: var(--size);
            height: var(--size);
            top: 0;
            transform: rotate(-10deg);
            background: black;
            border-radius: 50%;
            text-align: center;
            box-shadow: 1px 1px 0 #999;
        }
        
        .isnot {
            line-height: 1.7em;
            padding-top: 5px letter-spacing: 1px;
           // font-family: Tahoma, Geneva, sans-serif;
           // font-size: 14px;
            color: black;
            text-align: justify;
        }

    </style>
</head>
<body>
    <div id="templatemo_wrapper">
	
	
<?php include '../theme_files/header.php' ;?>
<?php include '../theme_files/search_compound.php' ;?>


        <!------------------------->
        <!------------------------->
        <div id="templatemo_banner">
            <div id="banner_left">
                <p>
                    Following is the glossary for the terms used in MICHA drug screening protocol. 
					Highlighted fields can be automatically extracted by MICHA and users may not need to enter that information.
                    <span></span>
                </p>
                <div class="cleaner_h20"></div>
            </div>
            <div id="banner_right">
                <div class="banner_button" data-toggle="collapse" data-target="#templatemo_content">
                    <a href="#sample_point" id="templatemo_content_top">Samples</a>
                </div>

                <div class="banner_button">
                    <a href="#compound_point">Compounds</a>
                </div>
                <div class="banner_button">
                    <a href="#expr_point">Experiments </a>
                </div>
            </div>
        </div>
        <!-- end of templatemo_banner -->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <div id="templatemo_content_top"></div>
        <div id="templatemo_content">
            <div class="section_w940">
                <div class="box margin_r30 box_border" style="width: 400px;" id="sample_point">
                    <h2>Samples (cell lines) </h2>
                    <p align="justify" style="line-height: 1.7em; 
					padding-top:5px
						letter-spacing: 1px;
						//font-family: Tahoma, Geneva, sans-serif;
						//font-size: 14px;
						color: black;text-align: justify;">
                        If data is focusing on cell lines, users have to enter following cell line information. 
						Highlighted fields can be automatically extracted by MICHA and users do not need to enter.

                        <ol class="numberlist_odd">
                            <li><a> Name: Name of the cell line (e.g. MOLM-13, DU4475).</a></li>
                            <li><a> ID: ID can be either in terms of ATCC or DSMZ or JCRB.</a></li>
                            <li><a> Cell type: It shows the tissue type for cell line e.g. acute myeloid leukemia or breast cancer.</a></li>
                            <li><a> Organism: Cell line specie e.g. Homo sapiens.</a></li>
                        </ol>

                    </p>
                </div>

                <div class="box margin_r30 box_border" style="width: 400px;border-right: 0px dotted #999;">
                    <h2>Samples (patient)</h2>
                    <p align="justify" style="line-height: 1.7em; padding-top:5px
						letter-spacing: 1px;
						//font-family: Tahoma, Geneva, sans-serif;
						//font-size: 14px;
						color: black;text-align: justify;">
                        If data is focusing on patients, users have to enter following patient details information. Patient ID is optional

                        <ol class="numberlist_odd">
                            <li><a> Patient ID: Patient id, this field is optional.</a></li>
                            <li><a> Patient age: Age of the patient.</a></li>
                            <li><a> Patient sex: Male or female.</a></li>
                            <li><a> Patient Diagnosis: Disease name e.g. acute myeloid leukemia or breast cancer.</a></li>
                            <li><a> Patient sample material: For example: Bone marrow, Peripheral blood.</a></li>
                            <li><a> Patient sample date: Date at which sample was collected (MM/DD/YYYY).</a></li>
                            <li><a> Patient date of evaluation: Date at which patient sample was evaluated (MM/DD/YYYY).</a></li>
                        </ol>

                    </p>
                </div>
                <div class="cleaner"></div>
            </div>

        </div>
        <div id="templatemo_content_bottom"></div>
        <!------------------------->
        <div id="templatemo_footer" style="padding: 20px 0px;">
            <div class="section_w240" style="width: 900px;" id="compound_point">
                <div class="box margin_r30 box_border" style="width: 106px;">
                    <h2>Compounds </h2>
                </div>
                <div class="numberlist">
                    <p style="font-size:10pt;">
					Comprehensive Information on screened compounds. Most of this information 
					is automatically extracted from public resources such as ChEMBL, DrugComb and ClinicalTrials. 
					Users just need to upload Compound names and standard inchikeys. 
					For example standard inchiKey for imatinib is: XDXDZDZNSLXDNA-TZNDIEGXSA-N. 
					Highlighted fields can be automatically extracted by MICHA and users do not need to enter.
                    </p>

                    <ol>
                        <li><a>
						Clinical Phase: This is the max clinical phase for compound that has been clinically tested. 
						This is automatically extracted by MICHA using ChEMBL API.
						</a></li>
                        <li><a>
						Links to clinical studies: Links to the ongoing or completed clinical studies.
						</a></li>
                        <li><a>
						Cross referencing drug databases: Provide hyperlinks to other compound databases such as: Pubchem, 
						ChEMBL, DTC, BindingDB, Drugbank, Zinc, emolecules, atlas, gtopDB, Chebi, PharmGKB, sure ChEMBL , Lincs.
						</a></li>
                        <li><a>
						Molecule type: For example, Small molecular, antibody
						</a></li>
                        <li><a>
						Physiochemical properties: Nearly 20 physiochemical properties are automatically extracted by 
						MICHA such as: ALOGP, number hydrogen bond acceptors (HBA) and number of aromatic rings etc. 
						Explanation of each of these properties is as follows:
						</a>
                            <ol class="numberlist">
                                <li><a> 
								Mw freebase: Molecular weight of parent compound
								</a></li>
                                <li><a> 
								Mw freebase: Molecular weight of parent compound
								</a></li>
                                <li><a> 
								HBA: Number hydrogen bond acceptors
								</a></li>
                                <li><a> 
								HDB: Number hydrogen bond donors
								</a></li>
                                <li><a> 
								PSA: Polar surface area
								</a></li>
                                <li><a> 
								RTB: Number rotatable bonds
								</a></li>
                                <li><a> 
								Num lipinski ro5 violations: Indicates whether the compound passes the 
								rule-of-three (mw < 300, logP < 3 etc)
								</a></li>
                                <li><a> 
								ACD most APKA: The most acidic pKa calculated using ACDlabs v12.01
								</a></li>
                                <li><a> 
								ACD most BPKA: The most basic pKa calculated using ACDlabs v12.01
								</a></li>
                                <li><a> 
								ACD LOGP: The calculated octanol/water partition coefficient using ACDlabs v12.01
								</a></li>
                                <li><a> 
								ACD LOGD: The calculated octanol/water distribution coefficient at pH7.4 using ACDlabs v12.01
								</a></li>
                                <li><a> 
								Full MWT: Molecular weight of the full compound including any salts
								</a></li>
                                <li><a> 
								AROMATIC_RINGS: Number of aromatic rings
								</a></li>
                                <li><a> 
								HEAVY_ATOMS: Number of heavy (non-hydrogen) atoms
								</a></li>
                                <li><a> 
								QED Weighted: Weighted quantitative estimate of drug likeness 
								(as defined by Bickerton et al., Nature Chem 2012)
								</a></li>
                                <li><a> 
								MW monoisotopic: Monoisotopic parent molecular weight
								</a></li>
                                <li><a> 
								FULL Mol formula: Molecular formula for the full compound (including any salt)
								</a></li>
                                <li><a>
								HBA lipinski: Number of hydrogen bond acceptors calculated according to 
								Lipinski's original rules (i.e., N + O count))
								</a></li>
                                <li><a> 
								HBD lipinski: Number of hydrogen bond donors calculated according to Lipinski's original rules 
								(i.e., NH + OH count)
								</a></li>
                            </ol>
                        </li>
                        <li><a>
						Disease indication: Disease indications which are currently tested or under trial. 
						This can be automatically extracted based on inchiKey.
						</a></li>
                        <li><a>
						2D structure: Can be extracted automatically from PubChem.
						</a></li>
                        <li><a>
						Primary target: Primary protein targets for the compounds can be automatically extracted,
						if available in public databases (ChEMBL, Drug Target Commons, PubChem and DrugBank).
						</a></li>
                        <li><a>
						Off targets: Potent protein targets other than primary targets can also be 
						automatically extracted from public databases such as: (ChEMBL, Drug Target Commons, PubChem and DrugBank).
						</a></li>
                        <li><a>
						Tested drug combination: If there are any available drug combinations screening data for any input compound, 
						it can be automatically extracted from DrugComb.
						</a></li>
                        <li><a>
						Side effects: If there are any side effects reported for the compound in public databases (such as SIDER) 
						it can be automatically extracted.
						</a></li>
                        <li><a>
						Concentration range: Users must have to provide concentration range (1-1000nM) 
						or maximum concentration used for their experiments.
						</a></li>
                        <li><a>
						Dilution steps: e.g. ten-fold, half-log
						</a></li>
                        <li><a>
						Vehicle of compound: e.g. DMSO/H2O
						</a></li>
                    </ol>
                </div>
            </div>

            <div id="templatemo_content_top"></div>
            <div id="templatemo_content">
                <div class="section_w940" id="expr_point">
                    <div class="box margin_r30 box_border" style="width: 110px;">
                        <h2>Experiments </h2>
                    </div>
                    <div style="padding:15px;">
                        <p style="font-size:10pt;"> Following is the description about experimental terms used in MICHA. </p>
                    </div>
                    <div class="box margin_r30 box_border" style="width: 900px;border-right: 0px dotted #999;">
                        <div class="numberlist">
                            <ol>
                                <li><a>
								Medium: RPMI1640, 10% FBS, pen/strep, glutamine
								</a></li>
                                <li><a>
								Plate type: Corning 384-well # 3764
								</a></li>
                                <li><a>
								Surviving cells (%): Percentage of surviving cells.
								</a></li>
                                <li><a>
								Volume/well: This information must be provide in ul.
								</a></li>
                                <li><a>
								Time of treatment: Such as 72 hours
								</a></li>
                                <li><a>
								Cell density (cells/well): Number of cells per well e.g 3000.
								</a></li>
                                <li><a>
								Method of dispensing: Such as Biotek Multiflo FX with RAD cassette (1 channel).
								</a></li>
                                <li><a>
								Measurement type: Its shows the experimental data metric such as EC50, IC50, DSS etc
								</a></li>
                                <li><a>
								Measurement value: This must be entered into Nano molar units.
								</a></li>
                                <li><a>
								Assay format: An assay format is a conceptualization of assays based on the biological 
								and/or chemical features of the experimental system. For example, assay formats include 
								1) biochemical, assays with purified protein, 2) cell-based, assays in whole cells, 
								3) cell-free, assays in cell derivatives, 4) organism-based, assays performed in an organism, 
								5) physiochemical, assays which measure physical or chemical properties, and 
								6) tissue-based, assays using tissue derived from a living organism. 
								This information must be selected from drop down list in MICHA excel template.
								</a>
                                    <ol class="numberlist">
                                        <li>
                                            <a> 
											Biochemical: A biochemical assay format is an in vitro format used to measure the activity 
											of a biological macromolecule, 
											e.g. a purified protein or nucleic acid. It is most often a homogeneous assay, 
											but can be heterogeneous if a solid phase, such as beads,
											is used to immobilize the macromolecule.
											</a>
                                        </li>
                                        <li>
										    <a> 
											Cell-based: A cell-based assay format involves the use of living eukaryotic cells and is 
											a heterogeneous assay.
											</a>
										</li>
                                        <li>
										<a> 
										Cell-free: A cell-free assay format originates from cells, but does not use intact, live cells. 
										This format is distinct from biochemical assays. It is most often a homogeneous assay, but can be heterogeneous 
										if a solid phase, such as beads, is used to immobilize the components.
										</a></li>
                                        <li><a> 
										Organism-based: An organism-based assay format involves the use of a living organism 
										and is a heterogeneous assay.
										</a></li>
                                        <li>
                                            <a> 
											Physiochemical: A physiochemical assay format involves the measurement of physical and chemical 
											properties of perturbagens,
											namely aqueous solubility, octanol/water partition, or cell permeability models e.g. 
											parallel artificial membrane permeability assay (PAMPA).
											</a>
										</li>
                                        <li><a> 
										Tissue based: A tissue-based assay format involves the use of a tissue derived from 
										a living organism and is a heterogeneous assay type.
										</a>
										</li>
                                        <li><a> 
										Detection technology: A detection technology is the physical method or technique 
										readout used to measure an effect caused by a perturbagen in an assay environment. 
										This information must be selected from drop down list in MICHA excel template.
										</a></li>
                                        <li><a> 
										Fluorescence: Fluorescence detection methods use the principles of fluorescence, 
										whereby incident light excites a fluorophore that then emits light at lower energy and higher wavelength, 
										typically in the visible portion of the UV-Visible spectrum.
										</a></li>
                                        <li><a> 
										Fluorescence polarization (FP): Fluorescence polarization (FP) measurements are based 
										on the assessment of size-dependent rotational motions of species and used to measure binding interactions.
										</a></li>
                                        <li><a> 
										Alpha Screen: Amplified Luminescent Proximity Homogeneous Assay Screen is a subtype 
										of fluorescence detection technologies.
										</a></li>
                                        <li><a> 
										Time Resolved Fluorescence (TRF): Time Resolved Fluorescence (TRF) is a subtype of fluorescence detection technologies. One commercial name is DELFIA.</a></li>
                                        <li><a> 
										Time -Resolved Fluorescence Energy Transfer (TR-FRET): Time-Resolved Fluorescence 
										Energy Transfer (TR-FRET) is a subtype of fluorescence detection technologies. 
										Commercial names are LANCE and HTRF.
										</a></li>

                                        <li><a>  
										Label-free technology: Label-free detection technologies measure binding 
										interactions and cell-based reactions in the absence of conventional labels, 
										e.g., fluorescent probes. Advantages include the ability to measure 
										a) functional activity without modifying the binding partners with labels,
										b) binding interactions independent of functional activity, and 
										c) cell-based assays without the need to engineer cell-lines to over-express given targets, such as GPCRs.
										</a></li>
                                        <li><a>  
										Luminescence: Luminescence detection technologies make use of light emission
										that occurs from an electronically excited state reached by a physical, mechanical, 
										or chemical mechanism.
										</a></li>
                                        <li><a>  
										Microscopy: Microscopic detection technologies use microscopes to see objects
										that cannot be seen with an unaided eye.
										</a></li>
                                        <li><a> 
										Quantitative PCR (qPCR): Quantitative PCR, sometimes referred to as RT-PCR,
										detection technologies use DNA labeled protein in a binding assay and are detected 
										by quantifying the amount of DNA by PCR. A commercial assay called KINOMEscan 
										was specifically developed for screening purposes.
										</a></li>
                                        <li><a> 
										Radiometry: Radiometry detection technologies use radioactive tracers. 
										Examples of assays that use radiometry are filter assays and Scintillation Proximity Assay (SPA).
										</a></li>
                                        <li><a>  
										Spectrophotometry: Spectrophotometry detection technologies measure the
										amount of light that a sample absorbs. A spectrophotometer operates by passing 
										a beam of light through a sample and measuring the intensity of light reaching a detector.
										</a></li>
                                        <li><a>  
										Thermal shift: Thermal shift detection technologies detect temperature 
										shifts using a fluorescent dye that is sensitive to a protein environment. 
										Upon heating, a protein unfolds and loses native conformation. Binding of 
										a small molecule can often stabilize the protein conformation, resulting 
										in a higher unfolding temperature. Endpoint mode of action:
										</a></li>
                                    </ol>
                                </li>
                                <li><a>
								An assay endpoint mode of action refers to the effect of the perturbagen on the assay target,
								e.g. inhibition, activation, cytotoxicity etc. This information must be selected from 
								drop down list in MICHA excel template.
								</a>
                                <ol class="numberlist">
                                    <li><a>  
									Activation: An activation endpoint action is the initiation, enhancement, 
									or increase of a biological action, such as increasing the rate of an 
									enzymatic reaction or positively regulating gene expression through an 
									increased rate of transcription.
									</a></li>
                                    <li><a>  
									Cytotoxicity: A cytotoxicity endpoint action is a toxic or cell 
									death-inducing property of a perturbagen. Known cytotoxic agents 
									mediate cell death commonly by inducing necrosis, apoptosis, or autophagy.
									Cytotoxicity can be detected by measuring various aspects of the death process,
									e.g. membrane permeability, ATP concentration, DNA fragmentation, etc.
									</a></li>
                                    <li><a> 
									Growth inhibition: A growth inhibition endpoint action refers to growth reduction 
									of a predefined stimulus. The unit of measure is always percent, when normalized 
									to the dynamic range of the assay. Cell viability or proliferation can be measured 
									in a variety of ways, e.g. 1) protein content by sulforhodamine B staining followed 
									by absorbance measurement, 2) mitochondrial dehydrogenase activity by 
									3-(4,5-dimethylthiazol-2-yl)-2,5-diphenyl tetrasodium bromide, 
									MTT staining, followed by absorbance measurement, 
									3) expression of proliferation-associated antigens by immunostaining 
									for Ki-67, and 4) ATP content by using CellTiter-Glo reagent (Promega) 
									followed by luminescence measurement.
									</a></li>
                                    <li><a>  
									Inhibition: An inhibition endpoint action refers to reduction of a predefined stimulus.
									</a></li>
                                    <li><a>  Inverse agonist: An inverse agonist endpoint action refers to a modulator that binds to
									the same receptor as an agonist, but induces a response opposite to that of an agonist.
									</a></li>
                                    </ol>
                                </li>
                                <li><a>
								Assay test type:
								It shows the test type of assay such as In-vitro, In-vivo, Ex-vivo etc. 
								This information must be selected from drop down list in MICHA excel template.
								</a></li>
                            </ol>
                        </div>
                    </div>
                    <!--<div class="cleaner_h10"></div>
                <div class="button_01"><a href="#">More</a></div>-->
                </div>
                <div class="cleaner"></div>
            </div>
            <div id="templatemo_content_bottom"></div>
        </div>
        <!-- <div id="templatemo_content_bottom"></div>-->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
        <!------------------------->
		
		<?php include '../theme_files/footer.php'; ?>


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