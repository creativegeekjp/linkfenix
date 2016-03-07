 (function() {
     
    $.get('/wp-content/plugins/linkfenixmenu/auto-suggest/parse.php', function(data) {       
        $("input#title").autocomplete({
            source: data,
            select: function (a, b) {
                var content = b.item.id;
               $("textarea#content").html("["+ content+"]");
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

    
