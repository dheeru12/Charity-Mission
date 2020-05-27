<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container-fluid">
    <form action="life_sponsor_save.php" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Member no.</label>
        <div class="col-md-3">
               <input type="text" class="form-control "id="member_no" name="mem_no">
                 </div>
        <div class="col-md-4">
        <input type="text" readonly class="form-control " id="mem_name" name="mem_name">
    </div>
        <div id="memsuggest">
            
        </div>
    </div>
    
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Special Occasion</label>
    <div class="col-sm-3">
        <select id="status" name="active">
                        <option value="birthday">Birthday</option>
                        <option value="wedding day">Wedding day</option>
                        <option value="memorial day">Memorial day</option>
                        <option value="other celebration">Other celebration</option>
                        <option value="none">NOne</option>
                    </select>
    </div>
  </div>
        
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Relationship</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="rel_name" name="relation" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-3">
        <label>title</label>
                    <select  name="title">
                        <option value="Mr">Mr.</option>
                        <option value="Dr">Dr.</option>
                        <option value="Pastor">Pastor</option>
                        <option value="Ms">Ms.</option>
                        <option value="Er">Er.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Mr_Mrs">Mr&Mrs</option>
                        <option value="Miss">Miss.</option>
                        
                    </select>
        <input type="text" class="form-control search_rel" id="name" name="name" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-3">
        <input type="date" class="form-control search_rel" id="date" name="date" >
       
    </div>
     <label  class="col-sm-2 col-form-label">Day and Month</label>
    <div class="col-sm-1">
        <input type="number" class="form-control search_rel" id="day" name="day" min="1" max="31">
       
    </div>
     <div class="col-sm-2">
         <input type="month" class="form-control search_rel" id="month" name="month" >
       
    </div>
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Amount</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="amt" name="amount" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Remark</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="remark" name="remark" >
       
    </div>
     
          </div>
        
         <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
            <button type="reset" class="btn  btn-warning btn-md " >Cancel</button>
         <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
        </div>
            </form>
            
       
</div>
<script>
    $("#member_no").keyup(function(){
                    var dist=$(this).val();
                    console.log(dist);
                    $.post("memb_resp_suggestions.php",{suggestion:dist},function(data,status){
                        $("#memsuggest").html(data);
                        $('#mtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("mem_name").value=tableData[1];
                                document.getElementById("member_no").value=tableData[0];
                                
                                $("#mtable").hide();
                            }
                        });
                    });
                });
</script>