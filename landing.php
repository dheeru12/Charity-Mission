<?php
include 'navbar.php';
 if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
      

?>
<div class="container-fluid" id="panel" >
     <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
             <button type="button" class="btn btn-primary btn-lg btn-block">Member Details</button>
<button type="button" class="btn btn-primary btn-lg btn-block">Accounts</button>
<button type="button" class="btn btn-primary btn-lg btn-block">User Creation</button>
<button type="button" class="btn btn-primary btn-lg btn-block">Exit</button>

         </div>
     </div>
 </div>

<script>
 $(document).ready(function(){
     $('nav').hide();
     
 )};
 </script>