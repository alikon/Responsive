<?php
/**
 * @package		Joomla.responsive
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addStyleSheet('plugins/system/article_responsive_preview/css/responsivetest.css');
$mysite=Juri::base().'index.php?option=com_content&view=article&id='.$this->id;
 $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        // Get a list of the plugins from the database.
        $query->select('p.*')
                ->from('#__extensions AS p')
                ->where('p.enabled = 1')
                ->where('p.type = ' . $db->quote('plugin'))
                ->where('p.element = ' . $db->quote('article_responsive_preview'))
                ->where('p.folder = ' . $db->quote('system'))
                ->order('p.ordering');

        // Push the query builder object into the database connector.
        $db->setQuery($query);

        // Get all the returned rows from the query as an array of objects.
        $plugins = $db->loadObjectList();
       
        // Log how many plugins were loaded from the database.
        //JLog::add(sprintf('.founded %d cronnable plugin(s).', count($plugins)));
        foreach ($plugins as $plugin) {
            //JLog::add($plugin->element);
            $params = new JRegistry;
            // loadJSON is @deprecated    12.1  Use loadString passing JSON as the format instead.
            // $params->loadString($this->item->params, 'JSON');
            // "item" should not be present.
            //(var_dump($plugin->params));
            $params->loadJSON($plugin->params);
            $test_iphone_portrait				= $params->get ('iphone_portrait');
$test_iphone_landscape 				= $params->get ('iphone_landscape');
$test_iphone_5_portrait				= $params->get ('iphone_5_portrait');
$test_iphone_5_landscape 				= $params->get ('iphone_5_landscape');
$test_android_240x320_portrait = $params->get ('android_240x320_portrait');
$test_android_240x320_landscape  		= $params->get ('android_240x320_landscape');
$test_android_380x685_portrait 		= $params->get ('android_380x685_portrait');
$test_android_685x380_landscape 				      = $params->get ('android_685x380_landscape');
$test_ipad_portrait 			   	= $params->get ('ipad_portrait');
$test_ipad_landscape 			   	= $params->get ('ipad_landscape');
$test_kindle_portrait 			   	= $params->get ('kindle_portrait');
$test_kindle_landscape 			   	= $params->get ('kindle_landscape');             
            }            
// var_dump($base);
 echo'<h1 style=" text-align: center;">Resposive Article Preview</h1>';
 echo "<section id='devices'>";
	 if ($test_iphone_portrait){

	    echo"
	    <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPhone 3+4 portrait</em> 320 x 480</a></div>
	      <div class='deviceWrap iphone-portrait'>
           <div class='device' style='width: 320px; height: 416px; padding-top: 20px;padding-bottom: 44px;'>
     
                               <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
               
                               <div class='flashingBottom' style='height: 44px'></div>
               
               
               <iframe src='".$mysite."' id='iphone-portrait' style=''></iframe>
     
               
           </div><!-- /device -->
       </div><!-- /deviceWrap -->
       
       ";
   	 } 
  	 if ($test_iphone_landscape){ 	 
	     echo "    
	         <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPhone 3+4 landscape</em> 480 x 320</a></div>
           <div class='deviceWrap iphone-landscape'>
           <div class='device' style='width: 480px; height: 268px; padding-top: 20px;padding-bottom: 32px;'>
     
                               <div class='flashingTop' style='height: 20px; width: 480px'><span class='time'></span></div>
               
                               <div class='flashingBottom' style='height: 32px'></div>
               
               
               <iframe src='".$mysite."' id='iphone-landscape' style=''></iframe>
     
               
           </div><!-- /device -->
       </div><!-- /deviceWrap -->
       
        ";
     }    
     if ($test_iphone_5_portrait){ 	
       echo"
      
          <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPhone 5 portrait</em> 320 x 568</a></div>
     	    <div class='deviceWrap iphone-5-portrait'>
           <div class='device' style='width: 320px; height: 504px; padding-top: 20px;padding-bottom: 44px;'>

                            <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 44px'></div>
            
            
            <iframe src='".$mysite."' id='iphone-5-portrait' style=''></iframe>

            
        </div><!-- /device -->
        </div><!-- /deviceWrap -->
       "; 
     }
     if ($test_iphone_5_landscape){ 	
      echo"    	
             <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPhone 5 landscape</em> 568 x 320</a></div>
     	     <div class='deviceWrap iphone-5-landscape'>
        <div class='device' style='width: 568px; height: 268px; padding-top: 20px;padding-bottom: 32px;'>

                            <div class='flashingTop' style='height: 20px; width: 568px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 32px'></div>
            
            
            <iframe src='".$mysite."' id='iphone-5-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     	
     }
     if ($test_android_240x320_portrait){ 	
     	   echo" 
     	         <div class='deviceTitle'><a href='http://alikonweb.it'><em>Android portrait</em> 240 x 320</a></div>
     	         <div class='deviceWrap android-240x320-portrait'>
               <div class='device' style='width: 240px; height: 300px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 240px'><span class='time'></span></div>
            
            
            
            <iframe src='".$mysite."' id='android-240x320-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	    "; 
     }
     if ($test_android_240x320_landscape){ 	
        echo"
            <div class='deviceTitle'><a href='http://alikonweb.it'><em>Android landscape</em> 320 x 240</a></div>
    <div class='deviceWrap android-240x320-landscape'>
        <div class='device' style='width: 320px; height: 220px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
            
            
            
            <iframe src='".$mysite."' id='android-240x320-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
         ";  
     }
     if ($test_android_380x685_portrait){ 	
     	   echo" 
     	       <div class='deviceTitle'><a href='http://alikonweb.it'><em>Android (Samsung Galaxy) portrait</em> 380 x 685</a></div>
     	       <div class='deviceWrap android-380x685-portrait'>
        <div class='device' style='width: 380px; height: 665px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 380px'><span class='time'></span></div>
            
            
            
            <iframe src='".$mysite."' id='android-380x685-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     }  	 
     if ($test_android_685x380_landscape){ 	
     	   echo" 
     	       <div class='deviceTitle'><a href=http://alikonweb.it'><em>Android (Samsung Galaxy) landscape</em> 685 x 380</a></div>
     	       <div class='deviceWrap android-685x380-landscape'>
        <div class='device' style='width: 685px; height: 360px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 685px'><span class='time'></span></div>
            
            
            
            <iframe src='".$mysite."' id='android-685x380-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     }  
     if ($test_ipad_portrait){ 	
     	   echo" 	
     	         <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPad portrait</em> 768 x 1024</a></div>
     	           <div class='deviceWrap ipad-portrait'>
        <div class='device' style='width: 768px; height: 900px; padding-top: 124px;'>

                            <div class='flashingTop' style='height: 124px; width: 768px'><span class='time'></span></div>
            
            
            
            <iframe src='".$mysite."' id='ipad-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     }  	 	   
     if ($test_ipad_landscape){ 	
     	  echo" 	
     	    <div class='deviceTitle'><a href='http://alikonweb.it'><em>iPad landscape</em> 1024 x 768</a></div>
     	      <div class='deviceWrap ipad-landscape'>
        <div class='device' style='width: 1024px; height: 645px; padding-top: 123px;'>

                            <div class='flashingTop' style='height: 123px; width: 1024px'><span class='time'></span></div>
                             
            
            
            <iframe src='".$mysite."' id='ipad-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   
     	   
        "; 
     }  	 
     if ($test_kindle_portrait){ 	
     	   echo"
     	      <div class='deviceTitle'><a href='http://alikonweb.it'><em>Kindle portrait</em> 600 x 1024</a></div>
     	    	<div class='deviceWrap kindle-portrait'>
        <div class='device' style='width: 600px; height: 820px; padding-top: 144px;padding-bottom: 60px;'>

                            <div class='flashingTop' style='height: 144px; width: 600px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 60px'></div>
            
            
            <iframe src='".$mysite."' id='kindle-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     }  	 
     if ($test_kindle_landscape){ 	
     	   echo"
     	          <div class='deviceTitle'><a href='http://alikonweb.it'><em>Kindle landscape</em> 1024 x 600</a></div>
     	    	    <div class='deviceWrap kindle-landscape'>
        <div class='device' style='width: 1024px; height: 396px; padding-top: 144px;padding-bottom: 60px;'>

                            <div class='flashingTop' style='height: 144px; width: 1024px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 60px'></div>
            
            
            <iframe src='".$mysite."' id='kindle-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->
     	   "; 
     }  	 
     echo " </section>";
 ?>


	


