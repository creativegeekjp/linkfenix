<?php 
    wp_enqueue_style('jquery_tbl_css',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.css');
    wp_enqueue_script('jquery_lib',  plugin_dir_url(__FILE__) . 'datatable/jquery-1.12.0.min.js');
    wp_enqueue_script('jquery_tbl',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.js');
    wp_enqueue_script('jquery_ui_css',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.js');
    wp_enqueue_style('jquery_ui_css2',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.css');
    wp_enqueue_script('clipboard',  plugin_dir_url(__FILE__) . 'jquery/clipboard.js');
    wp_enqueue_script('toast-msg',  plugin_dir_url(__FILE__) . 'jquery/toast-message/src/jquery.dpToast.js');

?>
 <table id="tvseasons" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Seasons</th>
            <th>Seasons Code</th>
            <th></th>
        </tr>
     <thead>
         <tfoot><tfoot>
</table>

  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {

            $('#tvseasons').dataTable({
            "language": 
            {
                "lengthMenu": "Display _MENU_ tvseasons per page",
                "zeroRecords": "No tvseasons found- sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No tvseasons available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            },
                "bFilter": true,
                "pagingType": "full_numbers",
                "bCaseInsensitive": true,
                "sDom": '<"top"flp>rt<"bottom"p><"clear">',
                "order": [ [ 1,"asc" ] ],
                "aaSorting": [ [1,'asc'], [3,'asc'] ],
                "lengthMenu": [ [10, 20, 30, 50], [10, 20, 30, 50] ],
                "processing": false,
                "ajax": 
                    {
                        "url": "<?php echo plugins_url( 'tv-datas-seasons.php', __FILE__ ); ?>", 
                        "type": 'POST',
                        "data": {
                                    "tv-seasons": "<?php echo $_POST['tv-seasons'];?>"
                                }
                    },
            "columns": 
            [ 
                { 
                    "data": "id" , "bVisible" : false
                },
                { 
                    "data": "tvname"
                },
                { 
                    "data": "seasonsname"
                },
                { 
                    "data": "scode"
                },
                {
                    "defaultContent": "<div></div>"
                } 
             ],
            "rowCallback": function( row, data, index ) 
            {
                $(row).attr('title','click on episodes button to view episodes');
                
                if(data.id)
                {
                     $(row).find('td:eq(3)').html("<button id='searchsubmit' name='tv-episodes' value="+data.id+">Episodes</button> ").val(data.id);
                }
            }
        });

} );
</script> 


