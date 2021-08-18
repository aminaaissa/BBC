<!DOCTYPE html>
<html>
<head>
    <title>Add/remove multiple input fields dynamically with Jquery Laravel 5.8</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
   
<div class="container">
   
   
    <form action="" method="POST">
       
   
        <table class="table table-bordered" id="dynamicTable">  
            <tr>
            <th>Désignation du Bâtiment et/ou Ouvrage</th>
                            <th>EmpriseduBâtimentet /ou Ouvrageau Sol enm²</th>
                            <th>Nombre  d’EtagesduBâtimentet/ou Hauteurdel’ouvrage</th>
                            <th>Nombre deBâtimentset/ou Ouvrages</th>
                            <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="addmore[0][name]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][qty]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][price]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][aa]"  class="form-control" /></td>  

                <td><button type="button" name="add" id="add" class="btn btn-success">Ajouter une ligne</button></td>  
            </tr>  
        </table> 
    
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
   
<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" class="form-control" /></td><td><input type="text" name="addmore['+i+'][name]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Sup</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
  
</body>
</html