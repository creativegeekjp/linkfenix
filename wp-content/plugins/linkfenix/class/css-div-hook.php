<?php
/*
*
*  Hook that make our movie information reposive to any layouts
*  
*
*/
add_action( 'wp_head', 'metadatas' );
add_action( 'wp_head', 'cascade' );


function metadatas()
{
    echo '<meta charset="utf-8">';
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}
function cascade() 
{

	$content="<style>
	
                .thumbnail {
                	width: 30%;
                	float: left;
                }
                
                .thumbnail img {
                	width: 100%;
                }
                
                .details {
                	width: 70%;
                	float: left;
                }
                
                .details .pad {
                	padding: 0 20px;
                	font-size: 12px;
                	font-family: helvetica;
                }
                
                
                @media screen and (max-width: 420px) {
                	.thumbnail, .details {
                		width: 100%;
                		margin: 0 0 20px;
                	}
                
                	.thumbnail img {
                		margin: 0 auto;
                		display: block;
                	}
                }
	        </style>";

	echo $content;
}


?>