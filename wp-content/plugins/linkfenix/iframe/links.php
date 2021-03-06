<?php

include 'ip.php';

$scode = isset($_GET['scode']) ? $_GET['scode'] : "";

$mtype = isset($_GET['mtype']) ? $_GET['mtype'] : ""; 

    
switch($mtype)
{
	case 'mov':
       $rs[] = getmovies($scode);
	break;
	
	case 'tv':
	   $rs[] = gettvs($scode);
	break;
}

function gettvs($scode)
{
    	foreach (json_decode(@file_get_contents(hostname.'links/gettvlinks/'.$scode),true) as  $links)
        { 
            $arr[] = array(
                    'name'  => $links['name'],//site name
                    'icon'  => $links['icon'],//link icon
                    'link'  => $links['link'],//actual url
                    'source'  => $links['source'], //optional 
                    'age'  => $links['age'],
                    'vote'  => $links['vote'],
                    'video'  => $links['video'],
                    'audio'  => $links['audio']
            );
        }
        return $arr;
}

function getmovies($scode)
{
        foreach (json_decode(@file_get_contents(hostname.'links/getmovielinks/'.$scode),true) as  $links)
        { 
            $arr[] = array(
                    'name'  => $links['name'],//site name
                    'icon'  => $links['icon'],//link icon
                    'link'  => $links['link'],//actual url
                    'source'  => $links['source'], //optional 
                    'age'  => $links['age'],
                    'vote'  => $links['vote'],
                    'video'  => $links['video'],
                    'audio'  => $links['audio']
            );
        }
        return $arr;
}
    
function framesettings()
{
         foreach (json_decode(@file_get_contents(hostname.'iframecolors/activecolor'),true) as  $color)
            { 
                    if($color['active'] == 1)
                    {
                        $col = $color['value'] ;
                        
                    }
                   
            } 
            foreach (json_decode(@file_get_contents(hostname.'fontfamilies/activefontfamily'),true) as  $family)
            { 
                    if($family['active'] == 1)
                    {
                        
                     $fam = $family['value'] ;
                        
                    }
                   
            } 
            foreach (json_decode(@file_get_contents(hostname.'fontsizes/activefontsize'),true) as  $size)
            { 
                    if($size['active'] == 1)
                    {
                       $siz = $size['value'] ;
                        
                    }
            } 
            
            return array(
                'color' => $col,
                'family' => $fam,
                'size' => $siz
            );
}


//get number of links to be display

foreach (json_decode(@file_get_contents(hostname.'iframelinks/activecount'),true) as  $iframelinks)
{ 
   
   switch( $iframelinks['count'])
   {
       case 'all' :
            $count = 1000;
       break;
       
       default:
            $count = $iframelinks['count'];
          break;
   }
   
   //echo $count;
  
}

?>