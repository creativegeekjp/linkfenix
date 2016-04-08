<?php 
    include 'datatable-hooks.php';
?>
<table id="tvshows" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Shortcode</th>
            <th>Name</th>
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
                "zeroRecords": "No updates found.",
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
                
                {"defaultContent": "<div></div>" ,className: "dt-body-right" } 
            ],
            "rowCallback": function( row, data, index ) 
            {
                $(row).css('color', 'red');
            
                if(data.id > 0)
                {
                     $(row).find('td:eq(1)').html("<button  class='button-primary' name='tv-update-seasons' value="+data.id+">View Seasons</button> ").val(data.id);
                }
            }
              
        });
} );
</script> 


