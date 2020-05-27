<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container-fluid">
    <form action="memb_resp_save.php" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Member no.</label>
        <div class="col-md-3">
               <input type="text" class="form-control "id="member_no" name="mem_no">
                 </div>
        <div class="col-md-4">
        <input type="text" readonly class="form-control " id="mem_name" name="mem_name">
    </div>
    </div>
               
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Responsibility</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_resp" id="resp_cd" name="resp_cd" >
       
    </div>
    <div class="col-md-4">
        <input type="text" readonly class="form-control " id="resp_name" name="resp_name">
       
    </div>
    <div class="col-md-3">
       
        <div id="resp"></div>
    </div>
     
          </div>
        
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Active</label>
    <div class="col-sm-3">
        <select id="status" name="active">
                        <option value="y">YES</option>
                        <option value="n">NO</option>
                    </select>
    </div>
  </div>
         <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
            <button type="reset" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
        </div>
            </form>
            
       
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4" id="memsuggest">
             
        </div>
    </div>
   
</div>
<script>
    $(document).ready(function(){
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
                
                $("#resp_cd").keyup(function(){
                    var dist=$(this).val();
                    console.log(dist);
                    $.post("memb_resp_suggestions.php",{respsuggestion:dist},function(data,status){
                        $("#memsuggest").html(data);
                        $('#mtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("resp_name").value=tableData[1];
                                document.getElementById("resp_cd").value=tableData[0];
                                
                                $("#mtable").hide();
                            }
                        });
                    });
                });
                
    });
</script>