<script type="text/javascript">
    (function() {
     
    $.get("<?php echo plugins_url( 'title-parser.php', __FILE__ ); ?>", function(data) {       
        $("input#title").autocomplete({
            source: data,
            select: function (a, b) {
              if(b.item.mtype=='mov')
              {
                     $('#content_ifr').contents().find('body').html('[mov mtype='+b.item.mtype+' id='+b.item.id+']');
                    //$("textarea#content")
              }
              else
              {
                     $('#content_ifr').contents().find('body').html('[tv mtype='+b.item.mtype+' id='+b.item.id+']');
              }
           
            },
            minChars : 1
        }) ;
    });
   
    $.ui.autocomplete.filter = function (array, term) {
        var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");
        return $.grep(array, function (value) {
            return matcher.test(value.label || value.label || value);
        });
    };
 
 })();
</script>

