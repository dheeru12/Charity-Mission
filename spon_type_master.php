


<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mission</title>

    </head>
    <body>
     <?php include 'navbar.php';
     if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
     ?>;
       <div class="container">
	
<div class="row">
	
	
<h1 style="text-align:center;">
	Add a New Sponsor Type
</h1>
    <div class="col-md-3"></div>
	<div class="col-md-6">
	
        <form method="post" action="spon_type_insert.php">
            <div class ="form-group">
                <input type="text" class="form-control search_text" placeholder="sponsor type code" name ="code" id="spon_type" required>
        </div>
        <div class ="form-group">
           <input type="text" placeholder=" description" class="form-control search_text" name="description" id="spon_desc" required>
        </div>
        <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            <input type="reset"  class="btn  btn-warning btn-md " value="Cancel">
       
             <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
        
        </div>
           
           
        </form>

       <div id="result"></div>
</div>

</div>
       </div>

        
    </body>
</html>

 
<script>
$(document).ready(function(){

// load_data();

 function load_spontype(query)
 {
  $.ajax({
   url:"spon_type_fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
    $('#spon_type_table tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                    document.getElementById("spon_type").value = tableData[0];
                    document.getElementById('spon_desc').value = tableData[1];
                    
                    
				});
   }
  });
 }
 $('.search_text').keyup(function(){
  var search = $(this).val();
  if(search !== '')
  {
   load_spontype(search);
  
  }
  else
  {
   load_spontype();
  
  }
 });
 
 
});
</script>