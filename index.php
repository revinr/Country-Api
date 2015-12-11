<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>API search</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="datatables/dataTables.bootstrap.css">

  <script src="js/main.js"></script>
  <script src="js/data.main.js"></script>
  <script src="js/databootstrap.js"></script>
  

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top:100px;">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Country Code</th>
                <th>Country Name</th>
            </tr>
        </thead>
      
        <tbody>
            <?php
              $countries = json_decode(file_get_contents("http://country.io/names.json"), true);
              foreach ($countries as $code => $name) {
                echo "<tr>";
                echo  '<td>' . $code . ' </td> ' ;
                echo  '<td>'.$name . '</td>';
                echo "</tr>";
              
              }
           ?>
            
        </tbody>
    </table>
        

      </div>
    </div>
  </div>

  <script>
        $('document').ready(function(){
            $('#example').DataTable(
              {
                "bLengthChange": false,
              });

        });
       
    </script>
</body>
</html>

