<div class="container">
    <div class="text-center">
        <h1>Biography</h1>
        <h3><?php echo $data['bio']['subheading'] ??  '';?></h3>
    </div>
    <hr>
    <div id="profile-flex" class="d-flex flex-row align-items-center">
    <div class="p-2"><h2 class="profile-header">About Me</h2>
        <p> <?php echo $data['bio']['about'] ??  '';?></p>  
    </div>
    <div class="p-2"><img class="img-circle p-2" src="<?php echo VIEW_INCLUDE_PATH?>assets/images/me.jpg"></div> 
</div>