<?php 
session_start();

?>;

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
}

body {
  /* The image used */
  background-image: url("https://images.unsplash.com/photo-1515248137880-45e105b710e0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=771&q=80");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head>


<div class="container-fluid">
     
    <div class="row">
       
        <h1 style="text-align: center" class="display-4">User Login</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="login.php" id="login">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User ID</label>
        <div class="col-sm-3">
            <input type="text" class="form-control "id="user_id" name="user_id" required >
                 </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-3">
            <input type="password" class="form-control "id="pass" name="pass" required>
                 </div>
                </div>
                <input type="submit" value="login" class="btn btn-primary btn-lg"  name="login">
                       </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <?php
if (isset($_SESSION['msg'])) {?>
            <b><?php echo $_SESSION['msg']; ?></b>
<?php
            $_SESSION['msg'] = "";
}
?>
    </div>
    </div>
</div>

 <br> <br>

 
 

 
 <script>
 $(document).ready(function(){
     
     
 )};
 </script>