// $(function() {
//         var searchRequest = null;
//         $("input#title").autocomplete({
//         maxLength: 1,
//         source: function(request, response) {
//             if (searchRequest !== null) {
//                 searchRequest.abort();
//             }
//             searchRequest = $.ajax({
//                 url: '/wp-content/plugins/linkfenixmenu/json/parse.php',
//                 method: 'GET',
//                 dataType: "json",
//                 data: {term: request.term},
//                 success: function(data) {
//                     searchRequest = null;
//                     response($.map(data , function(item) {
//                         return {
//                             value: item.nm,//replace it by id
//                             label: item.nm
//                         };
//                     }));
//                      $('.ui-autocomplete-loading').removeClass("ui-autocomplete-loading");
//                 }
//             }).fail(function() {
//                 searchRequest = null;
//             });
//         },
//          select: function (a, b) {
//          var shortcode = b.item.value;
//                     $("textarea#content").html("["+shortcode+"]")
//           }
//         });
// });

(function() {
    
    $.get('/wp-content/plugins/linkfenixmenu/json/parse.php', function(data) {       
        $("input#title").autocomplete({
            source: data,
            select: function (a, b) {
                var content = b.item.value;
                $("textarea#content").html("["+content+"]")
            }
        }) ;
    });
    
    $.ui.autocomplete.filter = function (array, term) {
        var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");
        return $.grep(array, function (value) {
            return matcher.test(value.label || value.value || value);
        });
    };

})();

    
