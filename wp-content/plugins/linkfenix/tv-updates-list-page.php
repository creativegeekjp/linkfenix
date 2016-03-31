<?php 
    wp_enqueue_style('jquery_tbl_css',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.css');
    wp_enqueue_script('jquery_lib',  plugin_dir_url(__FILE__) . 'datatable/jquery-1.12.0.min.js');
    wp_enqueue_script('jquery_tbl',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.js');
    wp_enqueue_script('jquery_ui_css',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.js');
    wp_enqueue_style('jquery_ui_css2',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.css');
    wp_enqueue_script('clipboard',  plugin_dir_url(__FILE__) . 'jquery/clipboard.js');
    wp_enqueue_script('toast-msg',  plugin_dir_url(__FILE__) . 'jquery/toast-message/src/jquery.dpToast.js');
?>
<table id="tvshows" class="display" width="100%" cellspacing="0">
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
         <tfoot><tfoot>
</table>

  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {

            var table = $('#tvshows').dataTable({
            "language": 
            {
                "lengthMenu": "Display _MENU_ tvshows per page",
                "zeroRecords": "No updates for tvshows found",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No tvshows available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            },
                "bFilter": true,
                "pagingType": "full_numbers",
                "bCaseInsensitive": true,
                "sDom": '<"top"flp>rt<"bottom"p><"clear">',
                "order": [ [ 1,"asc" ] ],
                "aaSorting": [ [1,'asc'], [3,'asc'] ],
                "lengthMenu": [ [50, 100, 300, 500], [50, 100, 300, 500] ],
                "processing": false,
                "ajax": "<?php echo plugins_url( 'tv-update-datas.php', __FILE__ ); ?>", 
            "columns": 
            [ 
                { 
                    "data": "id" , "bVisible" : false
                },
                { 
                    "data": "name"
                },
                { 
                    "data": "year" , "bVisible" : false
                },
                { 
                    "data": "genre" , "bVisible" : false
                }, 
                { 
                    "data": "created" , "bVisible" : false
                },
                { 
                    "data": "indicator" , "bVisible" : false
                },
                {"defaultContent": "<div></div>"} 
            ],
            "rowCallback": function( row, data, index ) 
            {
                $(row).css('color', 'red');
            
                $(row).css('cursor' , 'hand');
                
                $(row).attr('title','click to add in clipboard');
                
                if(data.id > 0)
                {
                     $(row).find('td:eq(1)').html("<button id='searchsubmit' name='tv-seasons' value="+data.id+">View List</button> ").val(data.id);
                }
            }
              
        });
} );
</script> 


