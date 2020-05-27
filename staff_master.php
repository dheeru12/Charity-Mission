<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container">
	<form action="staffsave.php" method="POST">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="mno">Staffno</label>
				<input type="text" class="form-control" name="sno" placeholder="code" required>
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
			<div class="form-group col-md-3">
				<label>staff type</label>
				<select name="type" class="form-control">
					<option value="full time">full time</option>
					<option value="honourary">honourary</option>
					<option value="part time">part time</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label>Sex</label>
				<input type="text" class="form-control" name="sex" placeholder="M/F/Other">
			</div>
			<div class="form-group col-md-3">
				<label>dob</label>
                                <input type="date" class="form-control" name="dob" placeholder="dob"  required>
			</div>
			<div class="form-group col-md-3">
				<label>doj</label>
                                <input type="date" class="form-control" name="doj" placeholder="doj"  required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label>martial st</label>
				<select name="mstatus" class="form-control">
					<option value="married">married</option>
					<option value="unmarried">unmarried</option>
					<option value="divorced">divorced</option>
					<option value="widowed">widowed</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label>spouseno</label>
				<input type="text" class="form-control" name="spno" placeholder="code">
			</div>
			<div class="form-group col-md-3">
				<label>dom</label>
				<input type="date" class="form-control" name="dom" placeholder="dd/mm/yyyy">
			</div>
			<div class="form-group col-md-3">
                            <label>blood grp</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="blood_grp_span"></span>
				<input type="text" class="form-control" name="bgrp" placeholder="blood group" id="blood_grp_input" required>
                                <div id="bloodgrpsuggest"></div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-2">
                            <label>office code</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ofcode_span"></span>
				<input type="text" class="form-control" name="ofcode" id="ofcode_input" placeholder="code">
                                <div id="ofcodesuggest"></div>
			</div>
			<div class="form-group col-md-3">
				<label>designation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="designation_span"></span>
				<input type="text" class="form-control" name="designation" id="designation_input" placeholder="designation">
                                <div id="designationsuggest"></div>
			</div>
			<div class="form-group col-md-3">
				<label>mothertongue</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="mtongue_span"></span>
				<input type="text" class="form-control" name="mtongue" id="mtongue_input" placeholder="mother tongue">
                                <div id="mtonguesuggest"></div>
			</div>
			<div class="form-group col-md-2">
				<label>magazine lang</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="mag_span"></span>
                                <input type="text" class="form-control" name="magazinelang" id="mag_input" placeholder="">
                                <div id="magsuggest"></div>
			</div>
			<div class="form-group col-md-2">
                            <label>qualification</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="qualification_span"></span> 
				<input type="text" class="form-control" name="qualification" id="qualification_input" placeholder="qualification code">
                                <div id="qualificationsuggest"></div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12" >
				<label>present address</label>
				<textarea name="preadd"  class="form-control" placeholder="address" ></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3" >
				<label>present city</label>
				<input type="text" name="precity"  class="form-control" id="cityid" placeholder="city" >
			</div>
			<div class="form-group col-md-3">
				<label>District</label>
                                <input type="text" name="predistrict"  class="form-control" id="districttxt" placeholder="district" >
			</div>
			<div class="form-group col-md-3">
				<label>pincode</label>
				<input type="text" name="prepincode"  class="form-control" id="pincodeid" placeholder="pincode">
			</div>
		</div>
            <div class="form-row">
                <div class="form-group col-md-12">
                   <div id="presuggest"></div>
                </div>
            </div>
		<div class="form-row">
			<div class="form-group col-md-6" >
				<label>state</label>
				<input type="text" name="prestate"  class="form-control" id="stateid" placeholder="state" >
			</div>
			<div class="form-group col-md-6">
				<label>phone</label>
				<input type="text" name="prephone"  class="form-control" placeholder="phoneno" >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label>permenent address</label>
				<textarea name="permadd"  class="form-control" placeholder="address" ></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label>permenent city</label>
				<input type="text" name="percity"  class="form-control" id="percityid" placeholder="city" >
			</div>
			<div class="form-group col-md-3">
				<label>District</label>
				<input type="text" name="perdistrict"  class="form-control" id="perdistrictid" placeholder="district" >
			</div>
			<div class="form-group col-md-3">
				<label>pincode</label>
                                <input type="text" name="perpincode"  class="form-control" id="perpincodeid" placeholder="pincode" >
			</div>
		</div>
            <div class="form-row">
                <div class="form-group col-md-12">
                   <div id="persuggest"></div>
                </div>
            </div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>state</label>
				<input type="text" name="perstate"  class="form-control" id="perstateid" placeholder="state" >
			</div>
			<div class="form-group col-md-6" >
				<label>phone</label>
				<input type="text" name="perphone"  class="form-control" placeholder="phoneno" >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3" >
				<label>mobile no 1</label>
				<input type="text" name="mno1" class="form-control" pplaceholder="number" >
			</div>
			<div class="form-group col-md-3" >
				<label>mobile no 2</label>
				<input type="text" name="mno2"  class="form-control" placeholder="number" >
			</div>
			<div class="form-group col-md-3" >
				<label>email</label>
                                <input type="email" name="email"  class="form-control" placeholder="email" >
			</div>
			<div class="form-group col-md-3" >
				<label>working status</label>
				<select name="status" class="form-control">
					<option value="working">working</option>
					<option value="left">left the organisation</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="submit" value="save" class="btn btn-sm btn-success">
			</div>
			<div class="form-group col-md-4">
				<input type="reset" value="cancel" class="btn btn-sm btn-warning">
			</div>
			<div class="form-group col-md-4" >
				 <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
			</div>
		</div>
	</form>
</div>
<script>
    $(document).ready(function(){
        $("#qualification_input").keyup(function(){
            var qual=$(this).val();
            $.post("member_suggestions.php",{qualificationsuggest:qual},function(data,status){
                $("#qualificationsuggest").html(data);
                
                $("#qtable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("qualification_input").value=tableData[0];
                 document.getElementById("qualification_span").innerHTML=tableData[1];
                 
                 $("#qtable").hide();
                });
            });
        });
        
        $("#blood_grp_input").keyup(function(){
            var qual=$(this).val();
            console.log(qual);
            $.post("staffsuggestions.php",{bldgrpsuggest:qual},function(data,status){
                
                $("#bloodgrpsuggest").html(data);
                
                $("#bgtable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("blood_grp_input").value=tableData[0];
                 document.getElementById("blood_grp_span").innerHTML=tableData[1];
                 
                 $("#bgtable").hide();
                });
            });
        });
        
        $("#ofcode_input").keyup(function(){
            var qual=$(this).val();
            $.post("member_suggestions.php",{ofcodesuggest:qual},function(data,status){
                $("#ofcodesuggest").html(data);
                
                $("#oftable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("ofcode_input").value=tableData[0];
                 document.getElementById("ofcode_span").innerHTML=tableData[1];
                 
                 $("#oftable").hide();
                });
            });
        });
        
        $("#designation_input").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{dsgnsuggest:qual},function(data,status){
                $("#designationsuggest").html(data);
                
                $("#dgtable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("designation_input").value=tableData[0];
                 document.getElementById("designation_span").innerHTML=tableData[1];
                 
                 $("#dgtable").hide();
                });
            });
        });
        
        $("#mtongue_input").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{mtonguesuggest:qual},function(data,status){
                $("#mtonguesuggest").html(data);
                
                $("#mtable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("mtongue_input").value=tableData[0];
                 document.getElementById("mtongue_span").innerHTML=tableData[1];
                 
                 $("#mtable").hide();
                });
            });
        });
        
        $("#mag_input").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{magsuggest:qual},function(data,status){
                $("#magsuggest").html(data);
                
                $("#magtable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("mag_input").value=tableData[0];
                 document.getElementById("mag_span").innerHTML=tableData[1];
                 
                 $("#magtable").hide();
                });
            });
        });
        
        $("#cityid").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{cityid:qual},function(data,status){
                $("#presuggest").html(data);
                
                $("#pretable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("cityid").value=tableData[0];
                 document.getElementById("pincodeid").value=tableData[1];
                 document.getElementById("districttxt").value=tableData[2];
                 document.getElementById("stateid").value=tableData[3];
                 
                 $("#pretable").hide();
                });
            });
        });
        $("#pincodeid").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{pincodeid:qual},function(data,status){
                $("#presuggest").html(data);
                
                $("#pretable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("cityid").value=tableData[0];
                 document.getElementById("pincodeid").value=tableData[1];
                 document.getElementById("districttxt").value=tableData[2];
                 document.getElementById("stateid").value=tableData[3];
                 
                 $("#pretable").hide();
                });
            });
        });
        
        $("#percityid").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{percityid:qual},function(data,status){
                $("#persuggest").html(data);
                
                $("#pertable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("percityid").value=tableData[0];
                 document.getElementById("perpincodeid").value=tableData[1];
                 document.getElementById("perdistrictid").value=tableData[2];
                 document.getElementById("perstateid").value=tableData[3];
                 
                 $("#pertable").hide();
                });
            });
        });
        
        $("#perpincodeid").keyup(function(){
            var qual=$(this).val();
            $.post("staffsuggestions.php",{perpincodeid:qual},function(data,status){
                $("#persuggest").html(data);
                
                $("#pertable tr").click(function(){
                    var tableData=$(this).children("td").map(function(){
                            return $(this).text();
                        }).get();
                        
                 document.getElementById("percityid").value=tableData[0];
                 document.getElementById("perpincodeid").value=tableData[1];
                 document.getElementById("perdistrictid").value=tableData[2];
                 document.getElementById("perstateid").value=tableData[3];
                 
                 $("#pertable").hide();
                });
            });
        });
        
    });
</script>