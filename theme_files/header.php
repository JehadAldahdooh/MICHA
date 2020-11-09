<?php
function checkactive($whichpage){
	switch($whichpage){
		case 'home':
			if ( $_SERVER['REQUEST_URI']=="/" || $_SERVER['REQUEST_URI']=="/template" || $_SERVER['REQUEST_URI']=="/compound" ){
				echo 'class="current"';
			}
		 break;
		case 'about':
			if (stripos($_SERVER['REQUEST_URI'],'about') !== false){
				echo 'class="current"';
			}
		 break;
		case 'glossary':
			if (stripos($_SERVER['REQUEST_URI'],'glossary') !== false){
				echo 'class="current"';
			}
		 break;
		case 'protocol':
			if (stripos($_SERVER['REQUEST_URI'],'protocols') !== false){
				echo 'class="current"';
			}
		 break;
		case 'covid19':
			if (stripos($_SERVER['REQUEST_URI'],'covid19') !== false){
				echo 'class="current"';
			}
		 break;
	}
}
?>

<div id="templatemo_site_title_bar">
   <div id="site_title">
      <h1>
         <a href="/">
            MICHA 
            <div class="cleaner_h40"></div>
            <!-- <span>free css templates</span> -->
         </a>
      </h1>
   </div>
   <ul class="social_network">
      <!--<li><a href="http://www.facebook.com/templatemo" target="_parent"><img src="images/facebook_icon.png" alt="facebook" /></a></li>
         <li><a href="http://www.facebook.com/templatemo" target="_parent"><img src="images/linkin_icon.png" alt="linkin" /></a></li>-->
      <li><a href="https://twitter.com/NetPharMed" target="_blank"><img style="background: white;border-radius: 50%;
         margin-top:10px;"
         width="60px;" height="60px;" src= 
         <?php  
            if($_SERVER['REQUEST_URI']=="/" || $_SERVER['REQUEST_URI'] !=="/covid" || $_SERVER['REQUEST_URI'] !=="/compound"){
             echo '"../images/twitter.png"'; 
            }else{
             echo '"images/twitter.png"';
            } 
            ?>
         alt="twitter" /></a></li>
   </ul>
</div>
<!-- end of templatemo_site_title_bar -->

<div id="templatemo_menu">
   <ul style="padding:0px;padding-left:15px;">
      <li><a href="/" <?php checkactive('home');?> >Home</a></li>
      <li><a href="/about/index" <?php checkactive('about');?>>About</a></li>
      <li><a href="/glossary/index" <?php checkactive('glossary');?>>Glossary</a></li>
      <li><a href="/protocols/index" <?php checkactive('protocol');?>>Protocols</a></li>
      <li><a href="/micha_api" >API</a></li>
      <li><a href="/covid19" <?php checkactive('covid19');?> >Covid-19</a></li>
      <!--<li><a href="#">Contact</a></li>-->
   </ul>
</div>

