<!DOCTYPE html>
<html>
<head>
	<title>NEW LIFE FITNESS GYMS</title>

	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-reboot.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

	<script src="{{ URL::asset('assets/js/bootstrap.js') }}" ></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" ></script>
	<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
	<script src="{{ URL::asset('assets/js/bootstrap.bundle.js') }}" ></script>

<body>


<div class = "row">

	<div >
	<img src="{{ URL::asset('assets/img/logo.jpg') }}"  class = "logo">

	<div class = "nav-bar">
	<ul>
	  <li><a href="#home">HOME</a></li>
	  <li><a href="#home">ABOUT US</a></li>
	  <li><a href="#news">FITNESS BLOG</a></li>
	  <li><a href="#contact">ONLINE STORE</a></li>
	  <li><a href="#about">ONLINE COACHING</a></li>
	  <li><a href="#about">CONTACT US</a></li>
	</ul>

	<div class = "social-icons">
		<img src="{{ URL::asset('assets/img/twitter.png') }}" width="30px" class="social-icon">
		<img src="{{ URL::asset('assets/img/instagram.png') }}" width="30px" class="social-icon">
		<img src="{{ URL::asset('assets/img/facebook.png') }}" width="30px" class="social-icon">
	</div>

	<div class = "credit">
		<p>All Rights Reserved | Developed by <br> Sandeepa Lokubaranige</p>
	</div>

	</div>
	</div>


	<div >

		<div class = "status-form">
			<div class = "status-items">
				<div class = "gym-status">
					<p>GYM OPEN</p>
				</div>
				<div class = "trainer-status">
					<p>TRAINER SANDEEPA</p>
				</div>
			</div>
		</div>

		<div class = "login-form">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="input-group form-group">
								<input type="text" class="form-control" placeholder="username">
							</div>
							<div class="input-group form-group">
								<input type="password" class="form-control" placeholder="password">
							</div>
							<div class="form-group">
								<input type="submit" value="Login" class="btn float-left login_btn"  >
							</div>
							<a href="#" class = "link">Forgot password?</a>
						</form>
					</div>
				</div>
		</div>

		<div class = "date-time-form">
			<p id = "dateTime"></p>
		</div>

	<img class= "bg-img" src="{{ URL::asset('assets/img/bg.jpg') }}">
	</div>

</div>

<script type="text/javascript">

		var today = new Date();
		var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
		var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

		var dateTime = date+' '+time;

		document.getElementById("dateTime").innerHTML = dateTime;

		// var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		// var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];

		// var today = new Date();
		// var date = today.getDate();
		// var day = days[ today.getDay() ];
		// var month = months[ today.getMonth() ];

		// var nowDate = date+''+day+''+month;



		// var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

		// var dateTime = nowdate+' '+time;

		// document.getElementById("dateTime").innerHTML = dateTime;

</script>

</body>
</html>
