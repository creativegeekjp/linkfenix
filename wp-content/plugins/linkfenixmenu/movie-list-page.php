<?php 
wp_enqueue_style('jquery_tbl_css',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.css');
wp_enqueue_script('jquery_lib',  plugin_dir_url(__FILE__) . 'datatable/jquery-1.12.0.min.js');
wp_enqueue_script('jquery_tbl',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.js');
wp_enqueue_script('jquery_ui_css',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.js');
wp_enqueue_style('jquery_ui_css2',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.css');
wp_enqueue_script('clipboard',  plugin_dir_url(__FILE__) . 'jquery/clipboard.js');
?>

Sort By: 
<select id="sort">
<option value="">column </option>
<option value="0">Shortcode</option>        
<option value="1">Name</option>        
<option value="2">Year</option>              
<option value="3">Genre</option>        
</select>

   <table id="movies" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Shortcode</th>
            <th>Name</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Created</th>
            <th>Indicator</th>
            <th></th>
        </tr>
     <thead>
</table>


  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {

    var table = $('#movies').dataTable({
            "language": 
            {
            "lengthMenu": "Display _MENU_ movies per page",
            "zeroRecords": "No movies found- sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No movies available",
            "infoFiltered": "(filtered from _MAX_ total records)"
            },
            
            "sDom": '<"top"flp>rt<"bottom"p><"clear">',
            "order": [ [ 1,"asc" ] ],
            "aaSorting": [ [1,'asc'], [3,'asc'] ],
            "lengthMenu": [ [100, 300, 500, -1], [100, 300, 500, "All"] ],
            "processing": true,
            "ajax": "/wp-content/plugins/linkfenixmenu/datas.php",
            "columns": 
            [ 
                { "data": "id"    },
                { "data": "name"  },
                { "data": "year"  },
                { "data": "genre" }, //"bVisible" : false
                { "data": "created"},
                { "data": "indicator"},
                {"defaultContent": "<img class='clippy' title='Copy to Clipboard' alt='Copy to Clipboard' style='cursor: pointer; cursor: hand;' id='copy' src='/wp-content/plugins/linkfenixmenu/jquery/clippy.svg' width='13' alt='Copy to clipboard'>"}
            ],
            "rowCallback": function( row, data, index ) {
                if ( data.created > data.indicator ) {
                  $(row).css('color', 'red');
                }
              }
        });
        $('#movies').on('click', 'tr', function(event) 
        {
            var aData = table.fnGetData( this );
    
            var clipboard = new Clipboard('img#copy', {
                text: function() {
                    return "["+aData['id']+"]";
                }
            });
            // clipboard.on('success', function(e) {});
            // clipboard.on('error', function(e) { console.log(e);});
              
             $( "<div id='dialog-message' title='Message'><p><span class='ui-icon ui-icon-circle-check' " +
                          "style='float:left; margin:0 7px 50px 0;'></span>Shortcode [ " +aData['id']+  " ] was copied to clipboard.</p>" )
                       .dialog({
                          dialogClass: 'no-close',
                          modal: true,
                          height: 200,
                          width: 300,
                          buttons: {
                            Ok: function() {
                              $( this ).dialog( "close" );
                            }
                          }
                        }); 
                
        });
  
        $('#sort').change(function() 
        {
            var col = $(this).val();
            table.fnSort([ [ col, 'asc'] ]);
        });    
} );
</script> 


