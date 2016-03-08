  Select movie from the list<br><div id='msg'></div>
 

<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  
</head>
<body>
       <table id="movies" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Shortcode</th>
                <th>Name</th>
                <th>Year</th>
                 <th>Genre</th>
                 <th></th>
            </tr>
        </thead>
        <tfoot>
           <tr>
                <th>Shortcode</th>
                <th>Name</th>
                <th>Year</th>
                 <th>Genre</th>
                  <th></th>
            </tr>
        </tfoot>
    </table>

  <script type="text/javascript" language="javascript" >
    $(document).ready(function() 
    {
    var table = $('#movies').DataTable( 
        {
        "order": [[ 1,"asc" ]],
        "lengthMenu": [[100, 300, 500, -1], [100, 300, 500, "All"]],
        "processing": true,
        "ajax": "/wp-content/plugins/linkfenixmenu/datas.php",
         "columns" : 
         [
            { "data": "id" },
            { "data": "name" },
            { "data": "year" },
            { "data" : "genre"},
            {
              "defaultContent": "<a>Get Shortcode</a>"
            }
        ],
        
        initComplete: function () 
        {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
        
    } );
 
     $('#movies tbody').on( 'click', 'a', function () {
        var data = table.row( $(this).parents('tr') ).data();
        //data['name']
        //data['id']
        
    } );
} );
</script>
</body>
</html>

