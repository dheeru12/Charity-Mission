<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
       <?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
        <div class="container">
	<form action="member_save.php" method="POST">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="mno">Memberno</label>
				<input type="text" class="form-control" name="mno" placeholder="code" required>
			</div>
			<div class="form-group col-md-2">
				<label>Title</label>
				<select name="title" class="form-control">
					<option value="Mr">Mr</option>
					<option value="Mrs">Mrs</option>
					<option value="Dr">Dr</option>
					<option value="Er">Er</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="name"  required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label>address</label>
]				<textarea type="text"class="form-control" name="address" placeholder="address"  required></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>post office</label>
				<input type="text" class="form-control" name="postoffice" placeholder="postoffice" id="cityid" required>
                                <div id="citysuggest"></div>
			</div>
			<div class="form-group col-md-4">
				<label>pincode</label>
				<input type="text"class="form-control" name="pincode" placeholder="pincode" id="pincodeid" required>
			</div>
			<div class="form-group col-md-4">
				<label>District</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="districtspan"></span>
				<input type="text" class="form-control" name="district" placeholder="district" id="districttxt" required>
                                <div id="distsuggest"></div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>mobile</label>
				<input type="text" class="form-control" name="mobile" placeholder="mobile"  required>
			</div>
			<div class="form-group col-md-4">
				<label>email</label>
				<input type="text" class="form-control" name="email" placeholder="email"  required>
			</div>
			<div class="form-group col-md-4">
                            <label>profession</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="profession_span"></span>
				<input type="text" class="form-control" name="profession" placeholder="profession"  id="profession_input" required>
                                <div id="professionsuggest"></div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label>qualification</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="qualification_span"></span>
                                <input type="text" class="form-control" name="qualifictaion"  id="qualification_input" placeholder="qualificationc" required>
                                <div id="qualificationsuggest"></div>
			</div>
			<div class="form-group col-md-4">
				<label>Date of Birth</label>
				<input type="text" class="form-control" name="dob" placeholder="dd/mm/yy"  required>
			</div>
			<div class="form-group col-md-4">
				<label>Subscription</label>
				<input type="text" class="form-control" name="subs" placeholder="subscription"  required>
		</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
                            <label>supporting grp no</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="sgn_span"></span>
				<input type="text" class="form-control" name="sgn" placeholder="group no"  id="sgn_input" required>
                                <div id="sgnsuggest"></div>
			</div>
			<div class="form-group col-md-3">
				<label>hundino</label>
				<input type="text" class="form-control" name="hundi" placeholder="hundinumber"  required>
			</div>
			

			<div class="form-group col-md-3">
				<label>office code</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="ofcode_span"></span>
				<input type="text" class="form-control" name="ofcode" placeholder="office code" id="ofcode_input"  required>
                                <div id="ofcodesuggest"></div>
	
			</div>
			<div class="form-group col-md-3">
				<label>prem staff</label>
				<input type="text" class="form-control" name="staff" placeholder="staff"  required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Magazine requires</label>
				<select name="magazine" class="form-control">
					<option value="yes">yes</option>
					<option value="no">no</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>no of magazines</label>
				<input type="text" class="form-control" name="nom" placeholder="10"  required>
			</div>
		</div>
		<div class="form-row">  
			<div class="form-group col-md-4">
				<input type="submit" value="save" class="btn btn-sm btn-success">
			</div>
			<div class="form-group col-md-4">
				<input type="reset" value="cancel" class="btn btn-sm btn-danger">
			</div>
			<div class="form-group col-md-4" >
				 <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
			</div>
			
		</div>
	</form>
	
</div>
    </body>
    <script>
            $(document).ready(function(){
                $("#districttxt").keyup(function(){
                    var dist=$("#districttxt").val();
                    $.post("member_suggestions.php",{suggestion:dist},function(data,status){
                        $("#distsuggest").html(data);
                        
                        $('#dtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("districtspan").innerHTML=tableData[1];
                                document.getElementById("districttxt").value=tableData[0];
                                
                                $("#dtable").hide();
                            }
                        });
                    });
                });
                
                $("#profession_input").keyup(function(){
                    var profession=$(this).val();
                    console.log(profession)
                    $.post("member_suggestions.php",{professionsuggest:profession},function(data,status){
                        console.log(status)
                        $("#professionsuggest").html(data);
                        $('#ptable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("profession_span").innerHTML=tableData[1];
                                document.getElementById("profession_input").value=tableData[0];
                                $("#ptable").hide();
                            }
                        });
                        
                    });
                    
                });
                
                 $("#qualification_input").keyup(function(){
                    var qualification=$(this).val();
                    console.log(qualification)
                    $.post("member_suggestions.php",{qualificationsuggest:qualification},function(data,status){
                        $("#qualificationsuggest").html(data);
                        $('#qtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("qualification_span").innerHTML=tableData[1];
                                document.getElementById("qualification_input").value=tableData[0];
                                $("#qtable").hide();
                            }
                        });
                        
                    });
                    
                });
                 $("#ofcode_input").keyup(function(){
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
                                document.getElementById("ofcode_input").value=tableData[0];
                                $("#oftable").hide();
                            }
                        });
                        
                    });   
                });
                $("#sgn_input").keyup(function(){
                    var ofcode=$(this).val();
                    console.log(ofcode)
                    $.post("member_suggestions.php",{sgnsuggest:ofcode},function(data,status){
                        $("#sgnsuggest").html(data);
                        $('#sgtable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("sgn_span").innerHTML=tableData[1];
                                document.getElementById("sgn_input").value=tableData[0];
                                $("#sgtable").hide();
                            }
                        });
                        
                    });
                });
                
                $("#cityid").keyup(function(){
                    var ofcode=$(this).val();
                    console.log(ofcode)
                    $.post("member_suggestions.php",{citysuggest:ofcode},function(data,status){
                        $("#citysuggest").html(data);
                        $('#citytable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("cityid").value=tableData[0];
                                document.getElementById("pincodeid").value=tableData[1];
                                document.getElementById("districttxt").value=tableData[2];
                                $("#citytable").hide();
                            }
                        });
                        
                    });
                });
                    
                    
                 $("#pincodeid").keyup(function(){
                    var ofcode=$(this).val();
                    console.log(ofcode)
                    $.post("member_suggestions.php",{pincodesuggest:ofcode},function(data,status){
                        $("#citysuggest").html(data);
                        $('#citytable tr').click(function(){
                            var tableData = $(this).children("td").map(function() {
                                return $(this).text();
                            }).get();
                            if (tableData.length>0){
                                document.getElementById("cityid").value=tableData[0];
                                document.getElementById("pincodeid").value=tableData[1];
                                document.getElementById("districttxt").value=tableData[2];
                                $("#citytable").hide();
                            }
                        });
                        
                    });
                });
                

                
    });  
     </script>
</html>