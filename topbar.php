<nav class="navbar navbar-expand-lg navbar-dark  fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
<!--  				<i class="fa fa-prescription-bottle-alt"></i>-->
                <img src="assets/logo.png" style="width: 50px; height: 50px;" alt="">
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>The Federal Polytechnic Ede, Osun State</b></large>
      </div>
      <div class="float-right">
  	  	<div class=" dropdown mr-4">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
              <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
              <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
            </div>
      </div>
    </div>
  </div>
  </div>
  
</nav>
<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>