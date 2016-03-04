 (function() {
     
    $.get('/wp-content/plugins/linkfenixmenu/json/parse.php', function(data) {       
        $("input#title").autocomplete({
            source: data,
            select: function (a, b) {
                var content = b.item.id;
               $("textarea#content").html("["+ content+"]");
               alert("Shortcode was copied to clipboard");
            }
        }) ;
    });
    
    $.ui.autocomplete.filter = function (array, term) {
        var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");
        return $.grep(array, function (value) {
            return matcher.test(value.label || value.label || value);
        });
    };
 
 })();

    
