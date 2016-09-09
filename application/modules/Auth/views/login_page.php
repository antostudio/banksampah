<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE | BANK SAMPAH</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/login.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/login/js/login.js"></script>
</head>
<body>
	<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1><strong>SI</strong> BASAH</h1>
                    <form role="form" action="<?php echo base_url($action)?>" method="post" id="login-form" autocomplete="off">
                    <p>
                    	<?php
                    		$msg = $this->input->get('msg');
                    		$msg = $this->encryption->decrypt($msg);
                    		if($msg=='GAGAL'){
                    			echo "<h6 align='center' style='color:red;'>Username & Password Salah</h6>";
                    		}else if($msg=='LOGOUT'){
                    			echo "<h6 align='center' style='color:red;'>Username & Password Salah</h6>";
                    		}
                    	?>
                    </p>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" id="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Let Me In!">
                    </form>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>© 2016 Bank Sampah - All Rights Reserved.
                <p>Powered by <strong><a href="http://www.facebook.com/yulianto20" target="_blank">AnDIO</a></strong></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>