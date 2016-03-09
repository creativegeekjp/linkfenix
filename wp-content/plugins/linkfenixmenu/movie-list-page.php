<br><div id='msg'></div>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    
    Sort By: <select id="sort">
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
                <th></th>
            </tr>
         <thead>
    </table>
</body>
 
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
                {"defaultContent": "<a>Get Shortcode</a>"}
            ]
        
        });
    
          
        $('#movies').on('click', 'tr', function(event) 
        {
            
          var aData = table.fnGetData( this );
          var  formData = "id="+aData['id'];  //Name value Pair
          var data;
          //data.mcontent
            $(this).css('background', 'red');
     
            $.ajax({
                url : "/wp-content/plugins/linkfenixmenu/insert-clipboard.php",
                type: "POST",
                data : formData,
                success: function(data, textStatus, jqXHR)
                {
                 
                   $( "<div id='dialog-message' title='Shortcode Published'><p><span class='ui-icon ui-icon-circle-check' " +
                          "style='float:left; margin:0 7px 50px 0;'></span>Shortcode [ " +aData['id']+  " ] was copied to clipboard.</p>" )
                       .dialog({
                          modal: true,
                          height: 200,
                          width: 300,
                          buttons: {
                            Ok: function() {
                              $( this ).dialog( "close" );
                            }
                          }
                        }); 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(data.mcontent);
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
</body>
</html>

