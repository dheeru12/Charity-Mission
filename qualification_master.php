


<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mission</title>

    </head>
    <body>
     <?php include 'navbar.php'?>;
       <div class="container">
	
<div class="row">
	
	
<h1 style="text-align:center;">
	Add a New Qualification
</h1>
    <div class="col-md-3"></div>
	<div class="col-md-6">
	
        <form method="post" action="qualification_insert.php">
            <div class ="form-group">
                <input type="text" class="form-control search_text" placeholder="qualification code" name ="code" id="qual_cd">
        </div>
        <div class ="form-group">
           <input type="text" placeholder=" description" class="form-control search_text" name="description" id="qual_desc">
        </div>
        <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
        <button type="button" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md " >Exit</button>
        
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

 function load_qualification(query)
 {
  $.ajax({
   url:"qualification_fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
    $('#qual_table tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                    document.getElementById("qual_cd").value = tableData[0];
                    document.getElementById('qual_desc').value = tableData[1];
                    
                    
				});
   }
  });
 }
 $('.search_text').keyup(function(){
  var search = $(this).val();
  if(search !== '')
  {
   load_qualification(search);
  }
  else
  {
   load_qualification();
  }
 });
 
 
});
</script>