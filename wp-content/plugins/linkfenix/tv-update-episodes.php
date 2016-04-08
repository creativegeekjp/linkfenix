<?php 

include 'datatable-hooks.php';

$episodes = json_decode(@file_get_contents(hostname.'seasons/viewrest/'.$_REQUEST['tv-update-episodes']),true);

$id = isset($episodes['tvshow_id'] ) ? $episodes['tvshow_id']  : "no data";
     
?>
<button class='button-primary' name='tv-update-seasons' value="<?php echo $id; ?>"> << Seasons</button> 
 
 <table id="tvepisodes" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Shortcode</th>
            <th>Code</th>
            <th>Title</th>
            <th>Episodes</th>
            <th></th>
        </tr>
     <thead>
         <tfoot><tfoot>
</table>

  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {

            var table = $('#tvepisodes').dataTable({
            "language": 
            {
                "lengthMenu": "Display _MENU_ tvepisodes per page",
                "zeroRecords": "No tvepisodes found- sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No tvepisodes available",
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
                        "url": "<?php echo plugins_url( 'tv-update-datas-episodes.php', __FILE__ ); ?>",
                        "type": 'POST',
                        "data": {
                                    "tv-update-episodes": "<?php echo $_POST['tv-update-episodes'];?>"
                                }
                    },
            "columns": 
            [ 
                { 
                    "data": "id" , "bVisible" : false
                },
                { 
                    "data": "ecode"
                },
                { 
                    "data": "title"
                },
                { 
                    "data": "episode_name"
                },
                
                {
                    "defaultContent": "" ,className: "dt-body-right"
                },
             ],
            "rowCallback": function( row, data, index ) 
            {
               
                $(row).css('color', 'red');
                
                if(data.id)
                {
                     $(row).find('td:eq(3)').html("<input type='button' class='button-primary' value='Copy to Clipboard'>"); //plugins_url('/jquery/clippy.svg', __FILE__)
                }
            }
        });
        
         table.on('click', 'tr', function(e)
        {
            
            var followingCell = $(this).parents('td').prev();
            var rowIndex = table.fnGetPosition( $(this).closest('tr')[0] );
            var aData = table.fnGetData( rowIndex  );
            
            var clipboard = new Clipboard('input', 
            {
                text: function() 
                {
                    return "[tv mtype=tv id="+aData['id']+"]";
                }
            });
      
            $.ajax(
            {
                url: "<?php echo plugins_url('visited.php', __FILE__ ); ?>",
                type: "post",
                data: 'mtype=tv&id='+ aData['id'],
                success: function (response) 
                {
                   $.fn.dpToast('Shortcode [tv mtype=tv id='+aData['id']+'] was copied to clipboard',2000);      
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
            });
        });
       

} );
</script> 


