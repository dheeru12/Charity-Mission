

    <?php include 'navbar.php';
    if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
    ?>
<form action="geo_insert.php" method="POST">
    <div class="container-fluid">
        <div class="row">
            <h1 style="text-align: center;">
                GEOGRAPHICAL AREA
            </h1>
            <div class="col-md-6">
                <div class ="form-group">
                    code:<input class="form-control geo_search" type="text" placeholder="code"  name="code" id="geo_code" disabled required>
	</div>
	
	
	
	<div class ="form-group">
            description:<input class="form-control geo_search" type="text" placeholder="description" id="geo_name" name="description" disabled required>
	</div>
                <div class ="form-group" id="_state" hidden>
                    state code:<input class="form-control state_search" type="text" placeholder="state code"  name="geo_state" id="state_code" >
                    state name:<input class="form-control state_search" type="text" placeholder="state name"  name="geo_state_name"  id="state_name">
	
                </div>
	
	<div class ="form-group">
            <input type="radio" placeholder="code" name="rad" value="country_master" class="country ">country
            <input type="radio" placeholder="code" name="rad" value="state_master" class="state">state
            <input type="radio" placeholder="code" name="rad" value="district_master" class="district">district
	</div>
	
	<div class ="form-group">
              <input type="submit" value = "add" class="btn btn-lg btn-primary">
		
              <input type="button" value = "modify" class="btn btn-lg btn-success">	
              <input type="reset" value = "cancel" class="btn btn-lg btn-warning">	
	 <button type="button" class="btn  btn-danger btn-lg text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
	</div>
	
            </div>
            <div class="col-md-6"><div id="dv"></div></div>
            <p id="fill_geo" hidden></p>
        </div>
    </div>
    
	
</form>

  
  <script type="text/javascript">
   var table;
   
   function fill_geo_data(table,query,insert){ 
       
        $.ajax({
   url:"fill_geo.php",
   method:"POST",
   data:{tab_geo:table,search_code:query},
   success:function(data)
   {
    $('#fill_geo').html(data);
    var fill =$('#fill_geo').text().split('~');
    if(insert ==='y'){
        $('#state_code').val(fill[0]);
    $('#state_name').val(fill[1]);
    }
    else{
       $('#geo_code').val(fill[0]);
    $('#geo_name').val(fill[1]);
    if(fill.length ===4){
        $('#state_code').val(fill[2]);
    $('#state_name').val(fill[3]);
    } 
    }
    
    }
        });
    }
    
    
   function load_geo(table,query='',insert='n'){ 
       
        $.ajax({
   url:"geo_fetch.php",
   method:"POST",
   data:{geo:table,search_key:query},
   success:function(data)
   {
    $('#dv').html(data);
    
    $('#geotable tbody').on('click', 'tr', function() {
           
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                 
               fill_geo_data(table,tableData[0],insert);
               
                if (table === 'state_master')
                   load_geo('district_master',tableData[0],insert);
                    
				});
    
    }
        });
    }
    
    
     $('.country, .state, .district').click(function() {
          table = $(this).val();
        load_geo(table);
       $("#geo_code, #geo_name ").prop('disabled', false);
       if ($('.district').is(':checked')){
         $('#_state').show();
    }
       else{
           $('#_state').hide();
       }
       
      
});

 $('.geo_search').keyup(function(){
           
  var search_geo = $(this).val();
  if(search_geo !== '')
  {
      
   load_geo(table,search_geo);
  }
  else
  {
   load_geo(table);
  }
 });       
 
 $('.state_search').keyup(function(){
           
  var search_geo = $(this).val();
  if(search_geo !== '')
  {
      
   load_geo('state_master',search_geo,'y');
  }
  else
  {
   load_geo('state_master','y');
  }
 });       
 
  
//   if($('.country').is(':checked')) {
//     $('#dv').text($(this).val());
//     
//    }
//    if ($('.state').is(':checked')){
//         $('#dv').text($(this).val());
//    }
//    if ($('.district').is(':checked')){
//         $('#dv').text($(this).val());
//    }
</script>