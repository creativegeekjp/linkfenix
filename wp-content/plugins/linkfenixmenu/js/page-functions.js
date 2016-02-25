(function($) {

  var MyFunctions = function(element, options) {

    var elem = $(element);
    var obj = this;

    var settings = $.extend({
      param: 'defaultValue'
    }, options || {});

    this.generatepost = function() {
         $.ajax({
        		url: "http://ide.creativegeek.ph:24214/wp-admin/admin.php?page=pages%2Fmovies.php",
        		success: function( data ) {
        			alert( 'Your home page has ' + $(data).find('div').length + ' div elements.');
                		}
        })
    };


  };


  $.fn.myfunctions = function(options) {
    var element = $(this);

    if (element.data('myfunctions')) return element.data('myfunctions');
    
    var myfunctions = new MyFunctions(this, options);
    
    element.data('myfunctions', myfunctions);

    return myfunctions;
  };
})(jQuery);

//instantiate class name
var myfunctions = $('#myElements').myfunctions();