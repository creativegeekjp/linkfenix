<?php 

/*
* Autosuggest check first if shorcoder has enabled from options
* 
* Shortcode will automatically append to post content once the movie or tvshows episode click
*/

include '../ip.php';

 foreach (json_decode(@file_get_contents(hostname.'options/shortcoder'),true) as  $coder)
    { 
       $scoder = isset($scid) ? 'checked' : '';
    }
 if(isset( $scoder ))
 {
     ?>
       <script type="text/javascript">
          $(function() {
 
            $("input#title").autocomplete({
                source: "<?php echo plugins_url('title-parser.php', __FILE__ ); ?>",
                minLength: 2,
                select: function(a, b) {
                     //if(b.item.mtype=='mov')
                     // {
                             //$('#content_ifr').contents().find('body').html('[mov mtype='+b.item.mtype+' id='+b.item.id+']');
                      //        $("textarea#content").html('[mov mtype='+b.item.mtype+' id='+b.item.id+']');
                      //}
                      //else
                     // {
                             $("textarea#content").html('['+b.item.mtype+' mtype='+b.item.mtype+' id='+b.item.id+']');
                     // }
                },
         
                html: true, 
         
                open: function(event, ui) {
                    $(".ui-autocomplete").css("z-index", 1000);
                }
            });
 
        });
        </script>

     <?php
 }

?>


