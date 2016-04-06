<?php 
    include 'datatable-hooks.php';
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

<table id="tvshows" class="display" width="100%" cellspacing="0">
     <thead>
        <tr>
            <th>Shortcode</th>
            <th>Tv Shows</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Created</th>
            <th>Indicator</th>
            <th>Seasons</th>
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
                //"zeroRecords": "No tvshows found- sorry",
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
                "ajax": "<?php echo plugins_url( 'tv-datas.php', __FILE__ ); ?>", 
            "columns": 
            [ 
                { 
                    "data": "id" , "bVisible" : false
                },
                { 
                    "data": "name", className: "dt-body-left"
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
                {"defaultContent": "<div></div>",className: "dt-body-left"} 
            ],
            "rowCallback": function( row, data, index ) 
            {
                if ( data.created >= data.indicator ) 
                {
                  $(row).css('color', 'red');
                }
                
                $(row).css('cursor' , 'hand');
                
                $(row).attr('title','view list of seasons');
                
                if(data.id > 0)
                {
                     $(row).find('td:eq(1)').html("<button id='searchsubmit' name='tv-seasons' value="+data.id+">View List</button> ").val(data.id);
                }
            }
              
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


