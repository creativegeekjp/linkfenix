<?php 
add_action('wp_head','cascade');

function cascade() {

	$output="<style>
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
	        </script>";

	echo $output;
}
?>