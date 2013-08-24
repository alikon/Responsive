<?php
/*------------------------------------------------------------------------
# mod_responsive_gads  - Responsive Adsense Module by Alikonweb.it
# ------------------------------------------------------------------------
# author    Alikon http://www.alikonweb.it
# Copyright (C) 2013 -  Alikonweb.it . All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites:  http://www.alikonweb.it
#            http://www.joomladdons.eu
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
	echo "<div id=\"rga" . $uniqueid . "\" style=\"text-align:center;\">\r\n" ; 
  
	echo "<script type=\"text/javascript\">\r\n" ; 
	echo "<!--\r\n";
	if ($adtest){
	 echo "  google_adtest = \"on\";\r\n";
  } 
	echo "	google_ad_client = \"" . $ad_publisher_id. "\";\r\n" ;	
	echo "  divid='rga'+'".$uniqueid."';\r\n" ;	
	 
	echo "	adUnit   = document.getElementById(divid);\r\n";
	echo "	adWidth  = adUnit.offsetWidth;\r\n" ;
	echo "if ( adWidth >= 728 ) {\r\n";
	  /* Leaderboard 728x90 */
	echo "  google_ad_slot	= '".$adslot_leaderboard."';\r\n";
	echo "  google_ad_width	= 728;\r\n";
	echo "  google_ad_height 	= 90;\r\n";
	echo "  	} else if ( adWidth >= 468 ) {\r\n";
	  /* Banner (468 x 60) */
	echo "    google_ad_slot	= '".$adslot_banner."';\r\n";
	echo "    google_ad_width 	= 468;\r\n";
	echo "    google_ad_height 	= 60;\r\n";
	echo "    	} else if ( adWidth >= 336 ) {\r\n";
	  /* Large Rectangle (336 x 280) */
	echo "      google_ad_slot 	= '".$adslot_large_rectangle ."';\r\n";
	echo "      google_ad_width 	= 336;\r\n";
	echo "      google_ad_height 	= 280;\r\n";	
	echo "      } else if ( adWidth >= 300 ) {\r\n";
	  /* Medium Rectangle (300 x 250) */
	echo "        google_ad_slot 	= '".$adslot_medium_rectangle."';\r\n";
	echo "        google_ad_width 	= 300;\r\n";
	echo "        google_ad_height 	= 250;\r\n";
	echo "        	} else if ( adWidth >= 250 ) {\r\n";
	  /* Square (250 x 250) */
	echo "          google_ad_slot	= '".$adslot_square ."';\r\n";	
	echo "          google_ad_width 	= 250;\r\n";	
	echo "          google_ad_height 	= 250;\r\n";	
	echo "          	} else { \r\n";
	  /* Ad Link Unit (200 x 90) */
	echo "            google_ad_slot 	= '".$adslot_link_unit."';\r\n";
	echo "            google_ad_width 	= 200;\r\n";	
	echo "            google_ad_height 	= 90;\r\n";	
  echo " } \r\n";
	//echo "stringa=' aw:' +adWidth+ ' as:' +google_ad_slot+ ' adw:' +google_ad_width+ ' adh:' +google_ad_height+ ' adp:'+google_ad_client;";
 	//echo " alert(stringa);";
 	echo "//--> \r\n" ;

	echo "</script>\r\n"	;

	echo "<script type=\"text/javascript\" src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">\r\n" ;

	echo "</script>\r\n" ;
	echo "</div>\r\n" ; 
 ?>
 



	


