<?php 
    include 'datatable-hooks.php';
?>

<button id='searchsubmit' name='tv-searchsubmit' value='Updates'> << Updates </button>

 <table id="tvseasons" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Id</th>
            <th>Tv Show</th>
            <th>Seasons</th>
            <th>Code</th>
            <th>Episodes</th>
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
                "zeroRecords": "No tvseasons found",
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
                        "url": "<?php echo plugins_url( 'tv-update-datas-seasons.php', __FILE__ ); ?>", 
                        "type": 'POST',
                        "data": {
                                    "tv-update-seasons": "<?php echo $_POST['tv-update-seasons'];?>"
                                }
                    },
            "columns": 
            [ 
                { 
                    "data": "id" , "bVisible" : false ,className: "dt-body-right"
                },
                { 
                    "data": "name" ,className: "dt-body-right"
                },
                { 
                    "data": "season_name" ,className: "dt-body-right"
                },
                { 
                    "data": "scode" ,className: "dt-body-center"
                },
                {
                    "defaultContent": "<div></div>" ,className: "dt-body-center"
                } 
             ],
            "rowCallback": function( row, data, index ) 
            {
                $(row).attr('title','click on episodes button to view episodes');
                 
                $(row).css('color', 'red');
                   
                if(data.id)
                {
                     $(row).find('td:eq(3)').html("<button id='searchsubmit' name='tv-update-episodes' value="+data.id+">Episodes</button> ").val(data.id);
                }
            }
        });

} );
</script> 


