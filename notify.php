<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Notify Me</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	  <style>
		.red{
			color:red;
		}
		</style>
   </head>
   <body>
      <div class="container contact">
         <div class="row">
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="logo.png" alt="image" width="40%"/>
				  <video src="./assets/video/outro/1.mp4" autoplay playsinline muted loop style="width: 100%;position: absolute; opacity: 0.2;bottom:0;left:0;"></video>
                  <h2 class="zi">Get Notified</h2>
                  <h4 class="zi">Don't miss a beat... <br>Join us now!<br /></h4>
               </div>
            </div>
            <div class="col-md-9">
               <form method="post" id="frmContactus">
					<div class="contact-form">
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="name">Name<span class="red">*</span></label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email<span class="red">*</span></label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-4" for="refferal">Refferal ID</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="refferal" placeholder="Refferal Code (Optional)" name="refferal" >
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="mobile">Mobile<span class="red">*</span></label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
						 </div>
					  </div>
					  
					  <div class="form-group">
						 <label class="control-label col-sm-6" for="comment">Your Field of Interest<span class="red">*</span></label>
						 <div class="col-sm-10">
							<textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
						 </div>
					  </div>
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
						 </div>
					  </div>
				   </div>
			   </form>
            </div>
         </div>
      </div>
	  <script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  <?php

        
if(isset($_GET["refferal"])) {
	$pack = $_GET["refferal"];
	echo "var refferal = document.getElementById('refferal');\n";
	echo "refferal.value = '" . $_GET['refferal']."';";

}
?>
	  </script>
	      <script>
window.addEventListener('popstate', function(event) {
    // The popstate event is fired each time when the current history entry changes.

    var r = setTimeout(confirm("Are you sure you want to go back ?"),200);

    if (r == true) {
        // Call Back button programmatically as per user confirmation.
        window.location.href = "https://www.kollabo.in";
        // Uncomment below line to redirect to the previous page instead.
        // window.location = document.referrer // Note: IE11 is not supporting this.
    } else {
        // Stay on the current page.
        history.pushState(null, null, window.location.pathname);
    }

    history.pushState(null, null, window.location.pathname);

}, false);
    </script>

   </body>
</html>