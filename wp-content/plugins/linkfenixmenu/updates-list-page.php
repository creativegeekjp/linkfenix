<br><div id='msg'></div>
<?php 
    wp_enqueue_style('jquery_tbl_css',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.css');
    wp_enqueue_script('jquery_lib',  plugin_dir_url(__FILE__) . 'datatable/jquery-1.12.0.min.js');
    wp_enqueue_script('jquery_tbl',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.js');
    wp_enqueue_script('jquery_ui_css',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.js');
    wp_enqueue_style('jquery_ui_css2',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.css');
    wp_enqueue_script('clipboard',  plugin_dir_url(__FILE__) . 'jquery/clipboard.js');
    wp_enqueue_script('toast-msg',  plugin_dir_url(__FILE__) . 'jquery/toast-message/src/jquery.dpToast.js');
?>

Sort By: 
<select id="sort">
    <option></option> 
    <option value="1">Name</option> 
    <option value="0">Id</option>  
    <option value="2">Year</option>              
    <option value="3">Genre</option>  
    <option value="4">Newest</option> 
    <option value="5">Oldest</option>  
</select>


Genres: 
<select id="genres">
    <option></option> 
    <option value="a">A</option> 
    <option value="b">B</option> 
    <option value="c">C</option> 
    <option value="d">D</option> 
    <option value="a">E</option> 
    <option value="b">F</option> 
    <option value="c">G</option> 
    <option value="h">H</option> 
    <option value="i">I</option> 
    <option value="j">J</option> 
    <option value="k">K</option> 
    <option value="l">L</option> 
    <option value="m">M</option> 
    <option value="n">N</option> 
    <option value="o">O</option> 
    <option value="p">P</option> 
    <option value="q">Q</option> 
    <option value="r">R</option> 
    <option value="s">S</option> 
    <option value="t">T</option>
    <option value="u">U</option> 
    <option value="v">V</option> 
    <option value="w">W</option> 
    <option value="x">X</option>
    <option value="y">Y</option> 
    <option value="z">Z</option> 
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
         <tfoot><tfoot>
</table>

  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {

            var table = $('#movies').dataTable({
            "language": 
            {
                "lengthMenu": "Display _MENU_ movies per page",
                "zeroRecords": "No updates found- sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No movies available",
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
                "ajax": "<?php echo plugins_url( 'upate-datas.php', __FILE__ ); ?>",
            "columns": 
            [ 
                { 
                    "data": "id" 
                },
                { 
                    "data": "name"
                },
                { 
                    "data": "year"
                },
                { 
                    "data": "genre" , "bVisible" : false,
                }, 
                { 
                    "data": "created" , "bVisible" : false, 
                },
                { 
                    "data": "indicator" , "bVisible" : false,
                },
                {"defaultContent": "<img class='clippy' title='Copy to Clipboard' height='30' width='30' alt='Copy to Clipboard' style='cursor: pointer; cursor: hand;' id='copy' src='/wp-content/plugins/linkfenixmenu/jquery/clippy.svg' width='13' alt='Copy to clipboard'>"} 
            ],
            "rowCallback": function( row, data, index ) 
            {
                if ( data.created >= data.indicator ) 
                {
                  $(row).css('color', 'red');
                }
                
                if(data.id > 0)
                {
                     $(row).find('td:eq(0)').html("[mov mtype=mov id="+data.id+"]");
                }
                
                $(row).css('cursor' , 'hand');
                
                $(row).attr('title','click to add in clipboard');
            }
              
        });
        
        $('#movies tbody').on('click', 'tr', function(event) 
        {
            var aData = table.fnGetData( this );
    
            var clipboard = new Clipboard('tr', 
            {
                text: function() 
                {
                    return "[mov mtype=mov id="+aData['id']+"]";
                }
            });
            
            clipboard.on('success', function(e) {
                
                console.log("Copied to clipboard");
            });
            
            clipboard.on('error', function(e) { 
                
                console.log(e);
                
            });
              
               $.fn.dpToast('Shortcode [mov mtype=mov id='+aData['id']+'] was copied to clipboard',2000);
                
        });
  
        $('#sort').change(function() 
        {
             if( $(this).val() == 5 )
             {
                table.fnSort([ [  4  , 'asc' ] ]); 
             }
             else if(  $(this).val() == 4 )
             {
                 table.fnSort([ [   $(this).val()  , 'desc' ] ]); 
             }
             else
             {
                  table.fnSort([ [   $(this).val()  , 'asc' ] ]); 
             }
        });    
        
        $('#genres').change( function() 
        { 
            var values = $(this).val();
           
            table.fnFilter( '^'+values+'.*', 3, true  );
            
            
       });
       
} );
</script> 


