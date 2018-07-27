<div class="header">
	<div class="header-bottom navbar-fixed-top" >
		<nav class="navbar navbar-default navbar-expand-sm">
		  	<div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?= base_url() ?>"><h1>Kenji-Shop <span style="margin-top: 10px;">Shop anywhere</span></h1></a>
			    </div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      
			      <ul class="nav navbar-nav navbar-right">
			      	<form class="navbar-form navbar-left">
				        <div class="input-group input-group-lg">
				          	<input type="text" class="form-control" placeholder="Search product, brand and store">
		                    <span class="input-group-btn">
		                      <button type="button" class="btn btn-info"><i class="glyphicon glyphicon-search"></i></button>
		                    </span>	
				        </div>
				      </form>
			        <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
			        <?php if(isset($this->session->UserData)){ ?>
		        	<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= base_url(); ?>Home/logoutUser">Log Out</a></li>
						</ul>
			        </li>
			        <?php } else{?>
			        <li><a href="#registerModal" data-toggle="modal" data-target="#registerModal">Register</a></li>
			        <li><a href="#loginModal" data-toggle="modal" data-target="#loginModal">Login</a></li>
			        <?php } ?>
			      </ul>
			    </div>
			  </div>
		</nav>
	</div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-info">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div>
        <div class="modal-body">
            <div class="news-gr">
	            <div class="col-md-5 new-grid1">
	            	<img src="http://www.kenji-martialarts.com/cni-content/uploads/modules/produk/20140630103648.jpg" class="img-responsive" onerror="this.src='/assets/images/imagenotfound.png'">
	            </div>
              <div class="col-md-7 new-grid">                
				<div class="form-group">
					<h3 style="margin-bottom: 20px;">Login</h3>
		          	<form class="formModalLogin" method="post">      
			            <div class="form-group has-feedback">
			              <label for="username">Username</label>
			              <input name="username" type="text" class="form-control input-lg" placeholder="Username / Email">
			              <span class="glyphicon glyphicon-user form-control-feedback"></span>
			            </div>
			            <div class="form-group has-feedback">
			              <label for="password">Password</label>
			              <input name="password" type="password" class="form-control input-lg" placeholder="Password">
			              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			            </div>
			            <div class="row">
			            	<div class="col-md-6">
				            	<div className="col-md-3">
					            	<div style="min-height: 35px; text-align: center;">Don't have an account? <a href="#" id="btnregister">  Register</a></div>
					        	</div>
				            </div>
				            <div class="col-md-6">
				            	<div className="col-md-3">
					            	<div style="min-height: 35px; text-align: center;">Forgot password? <a href="#" id="btnresetpass">  Reset password</a></div>
					        	</div>
				            </div>
				        </div>
			            <button type="submit" class="btn btn-block btn-lg">Log In</button>
		          	</form>
			    </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-info">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div>
        <div class="modal-body">
            <div class="news-gr">
	            <div class="col-md-5 new-grid1">
	            	<img src="http://www.kenji-martialarts.com/cni-content/uploads/modules/produk/20140630103648.jpg" class="img-responsive" onerror="this.src='/assets/images/imagenotfound.png'">
	            </div>
              <div class="col-md-7 new-grid">                
				<div class="form-group">
					<h3 style="margin-bottom: 20px;">Register</h3>
		          	<form class="formModalRegistrasi" method="post">  
		          		<div class="form-group has-feedback">
			              <label for="email">Username</label>
			              <input name="username" type="text" class="form-control input-lg" placeholder="Username">
			              <span class="glyphicon glyphicon-user form-control-feedback"></span>
			            </div>    
			            <div class="form-group has-feedback">
			              <label for="email">Email</label>
			              <input name="email" type="email" class="form-control input-lg" placeholder="Email">
			              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			            </div>
			            <div class="form-group has-feedback">
			              <label for="password">Password</label>
			              <input name="password" type="password" class="form-control input-lg" placeholder="Password">
			              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			            </div>
			            <div class="form-group has-feedback">
			              <label for="confirmpassword">Confirm Password</label>
			              <input name="confirmpassword" type="password" class="form-control input-lg" placeholder="Confirm Password">
			              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			            </div>
			            <div class="row">
			            	<div class="col-md-6">
				            	<div className="col-md-3">
					            	<div style="min-height: 35px; text-align: center;">Don't have an account? <a href="#" id="btnregister">  Register</a></div>
					        	</div>
				            </div>
				            <div class="col-md-6">
				            	<div className="col-md-3">
					            	<div style="min-height: 35px; text-align: center;">Forgot password? <a href="#" id="btnresetpass">  Reset password</a></div>
					        	</div>
				            </div>
				        </div>
			            <button type="submit" class="btn btn-block btn-lg">Register</button>
		          	</form>
			    </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$(".formModalLogin").submit(function(e){
			if(e.target.username.value==''||e.target.password.value==''){$.jGrowl("Please fill username and password");toastr.warning('Please fill username and password','Warning');}
			e.preventDefault();
			$.ajax({              
				url: "<?= base_url() ?>Home/loginUser/",
				dataType: "json",
				type:"POST",
				data:{'login':true,'user':e.target.username.value,'pass':e.target.password.value},
				success:function(response) {
					if(response.length>0){toastr.info('Login is success'); location.reload();}
					else{toastr.warning('Login failed, please try again');}
				},
				error:function(error) {
					console.log(error);
				}
			});
		});
		$(".formModalRegistrasi").submit(function(e){
			e.preventDefault();
			if(e.target.username.value==''||e.target.email.value==''||e.target.password.value==''){toastr.warning('Please fill username, email and password','Warning');}
			else if(e.target.password.value!=e.target.confirmpassword.value){toastr.warning('Password is not match','Warning');}
			else
			{
				$.ajax({              
					url: "<?= base_url() ?>Home/registrasiUserz/",
					dataType: "json",
					type:"POST",
					data:{'login':true,'user':e.target.username.value,'email':e.target.email.value,'pass':e.target.password.value},
					success:function(response) {
						if(response.length>0){toastr.warning("Username / Email already registered",'Warning');}
						console.log(response);
					}
				});
			}
		});
	});
</script>