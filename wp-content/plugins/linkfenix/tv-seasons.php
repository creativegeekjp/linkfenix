<?php 
    include 'datatable-hooks.php';
?>

<button class='button-primary' name='tv-searchsubmit' value='Tv Shows'> << Tv </button>
<br>
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
                "lengthMenu": "Display _MENU_ seasons per page",
                "zeroRecords": "No seasons found",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No seasons available",
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
                    "data": "id" , "bVisible" : false ,className: "dt-body-right"
                },
                { 
                    "data": "tvname" ,className: "dt-body-right"
                },
                { 
                    "data": "seasonsname" ,className: "dt-body-right"
                },
                { 
                    "data": "scode" ,className: "dt-body-center"
                },
                {
                    "defaultContent": "<div></div>" ,className: "dt-body-right"
                } 
             ],
            "rowCallback": function( row, data, index ) 
            {
                $(row).attr('title','click on episodes button to view episodes');
                
                if(data.id)
                {
                     $(row).find('td:eq(3)').html("<button  class='button-primary' name='tv-episodes' value="+data.id+">View Episodes</button> ").val(data.id);
                }
            }
        });

} );
</script> 


