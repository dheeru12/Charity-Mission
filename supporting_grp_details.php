<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container-fluid">
    <h1 style="text-align: center">Support Group Details </h1>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="supporting_grp_details_save.php">
                <div class="form-group">
                    <label>supporting group no.</label>
                    <input type="text" id="sup_grp_no" name="sup_grp_no" class="form-control ">
                </div>
                <div class="form-group ">
                    <label>Name</label>
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
                    <input type="text" id="name" name="name" class=" form-control ">
                </div>
                <div class="form-group">
                    <label>office code</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="ofcode_span"></span>
                    <input type="text" id="off_code" name="office_code" class="form-control" >
                    <div id="ofcodesuggest"></div>
                </div>
                <div class="form-group">
                    <label>district code</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="districtspan"></span>
                    <input type="text" id="dist_code" name="district_code" class="form-control">
                    <div id="distsuggest"></div>
                </div>
                <div class="form-group">
                    <label>leader 1</label>
                        <input type="text" id="leader1" name="leader_1" class="form-control">
                        <input type="text" readonly class="form-control " id="mem_name" name="mem_name" placeholder="leader 1 name">
                </div>
                <div class="form-group">
                    <label>leader 2</label>
                    <input type="text" id="leader2" name="leader_2" class="form-control" >
                    <input type="text" readonly class="form-control " id="mem_name_2" name="mem_name" placeholder="leader 2 name">
                  
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select name="status">
                        <option value="active">ACTIVE</option>
                        <option value="inactive">INACTIVE</option>
                    </select>
                </div>
                <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
            <button type="reset" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
        </div>
                
            </form>
            
            
        </div>
        <div class="col-md-6" id="memsuggest">
            
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#dist_code").keyup(function(){
                    var dist=$(this).val();
                    $.post("member_suggestions.php",{suggestion:dist},function(data,status){
                        $("#distsuggest").html(data);
                        $('#dtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("districtspan").innerHTML=tableData[1];
                                document.getElementById("dist_code").value=tableData[0];
                                
                                $("#dtable").hide();
                            }
                        });
                    });
        });
        
        $("#off_code").keyup(function(){
                    var ofcode=$(this).val();
                    console.log(ofcode)
                    $.post("member_suggestions.php",{ofcodesuggest:ofcode},function(data,status){
                        $("#ofcodesuggest").html(data);
                        $('#oftable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("ofcode_span").innerHTML=tableData[1];
                                document.getElementById("off_code").value=tableData[0];
                                $("#oftable").hide();
                            }
                        });
                        
                    });   
                });
        $("#leader1").keyup(function(){
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
                                document.getElementById("leader1").value=tableData[0];
                                
                                $("#mtable").hide();
                            }
                        });
                    });
                });
        $("#leader2").keyup(function(){
                    var dist=$(this).val();
                    console.log(dist);
                    $.post("memb_resp_suggestions.php",{suggestion:dist},function(data,status){
                        $("#memsuggest").html(data);
                        $('#mtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("mem_name_2").value=tableData[1];
                                document.getElementById("leader2").value=tableData[0];
                                
                                $("#mtable").hide();
                            }
                        });
                    });
                });
        
    });
</script>