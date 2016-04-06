<?php 

include 'datatable-hooks.php';

$episodes = json_decode(@file_get_contents(hostname.'seasons/viewrest/'.$_REQUEST['tv-episodes']),true);

$id = isset($episodes['tvshow_id'] ) ? $episodes['tvshow_id']  : "no data";
     

?>
<button id='searchsubmit' name='tv-seasons' value="<?php echo $id; ?>"> << Seasons</button> 
 
 <table id="tvepisodes" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Shortcode</th>
            <th>Code</th>
            <th>Title</th>
            <th>Episodes</th>
            <th></th>
            <th>Created</th>
            <th>Indicator</th>
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
                        "url": "<?php echo plugins_url( 'tv-datas-episodes.php', __FILE__ ); ?>",
                        "type": 'POST',
                        "data": {
                                    "tv-episodes": "<?php echo $_POST['tv-episodes'];?>"
                                }
                    },
            "columns": 
            [ 
                { 
                    "data": "id" 
                },
                { 
                    "data": "ecode"
                },
                { 
                    "data": "title"
                },
                { 
                    "data": "episodesname"
                },
                
                {
                    "defaultContent": "<div></div>"
                },
                { 
                    "data": "created", "bVisible" : false,
                },
                { 
                    "data": "indicator" , "bVisible" : false
                },
             ],
            "rowCallback": function( row, data, index ) 
            {
                
                if ( data.created >= data.indicator ) 
                {
                  $(row).css('color', 'red');
                }
                
                if(data.id)
                {
                     $(row).find('td:eq(4)').html("<img class='clippy'  height='30' width='30' title='Copy to Clipboard' alt='Copy to Clipboard' style='cursor: pointer; cursor: hand;' id='copy' src='<?php echo plugins_url('/jquery/clippy.svg', __FILE__);  ?>' width='13' alt='Copy to clipboard'> ");
                     
                     $(row).find('td:eq(0)').html("[mov mtype=mov id="+data.id+"]");
                }
                
                $(row).css('cursor' , 'hand');
                
                $(row).attr('title','click to add in clipboard');
                
            }
        });
        
        
        $('#tvepisodes tbody').on('click', 'tr', function(event) 
        {
            var aData = table.fnGetData( this );
    
            var clipboard = new Clipboard('tr', 
            {
                text: function() 
                {
                    return "[tv mtype=tv id="+aData['id']+"]";
                }
            });
            
            clipboard.on('success', function(e) {
                
                console.log("Copied to clipboard");
            });
            
            clipboard.on('error', function(e) { 
                
                console.log(e);
                
            });
              
               $.fn.dpToast('Shortcode [tv mtype=tv id='+aData['id']+'] was copied to clipboard',2000);
                
        });

} );
</script> 


