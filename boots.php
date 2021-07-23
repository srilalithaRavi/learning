<html>
<head>
<!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type='text/javascript'>
function preimage(event)
{
	var reader = new FileReader();
	reader.onload = function()
	{
		var output = document.getElementById('output_image');
		output.src = reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}
</script>

<style>
.bg{
	background-color: #80808085;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
 max-width:300px;
}
</style>
</head>
<body>
<div class="container" style="background-image: linear-gradient(to right, rgb(51 51 51 / 0%), rgb(148 177 242));">
<h2 style="text-align:center">Registration Form</h2>
<form class="form-horizontal" role="form" method="POST" action="connect.php" enctype="multipart/form-data">
	<div class="form-group row">
		<label for="name" class="col-sm-3 control-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" name="name" class="form-control" required>
		</div>
	</div>
	
	<div class="form-group row">
		<label for="contact" class="col-sm-3 control-label">Contact</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" name="contact" required>
		</div>
	</div>
	
	<div class="form-group row">
		<label for="email" class="col-sm-3 control-label">E-mail Id</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="email" placeholder="myemailid@example.com" required>
		</div>
	</div>
	
	<div class="form-group row">
		<label for="gender" class="col-sm-3 control-label">Gender</label>
		<div class="col-sm-6 form-check" style="margin-top :0.5%">
			<input class="form-check-input" type="radio" name="gender" value="Female" id="gender" required>
			<label class="form-check-label" for="flexRadioDefault1">
			Female
			</label>
		
		<div class="col-sm-6 form-check" style="margin-top :0.5%">
			<input class="form-check-input" type="radio"  name="gender" id="gender" value="Male" required>
			<label class="form-check-label" for="flexRadioDefault1">
			Male
			</label>
		</div>
		</div>
	</div>
	<div class="form-group row">
		<label for="blood" class="col-sm-3 control-label">Blood Group</label>
		<div class="col-sm-6">
		<div class="dropdown">
   <select class="form-control" name="blood" id="blood" required>
        <option>B+</option>
        <option>AB+</option>
        <option>O+</option>
        <option>B-</option>
      </select>
		</div>
		</div>
	</div>
	<div class="form-group row">
		<label for="file" class="col-sm-3 control-label">Profile Picture</label>
		<div id="wrapper">
		<div class="col-sm-6 file-loading">	
		  <input type="file" name="propic" accept="image/*"  onchange="preimage(event)" class="btn" required>
		<img id="output_image"/>
		</div>
	</div>
</div>	<br>
	
	<div class="form-group row">
		<label for="address" class="col-sm-3 control-label">Address</label>
		<div class="col-sm-6">
		  <textarea  class="form-control" name="address" id="address" rows="3" required>
		  </textarea>
		</div>
	</div>
	<center><input type="submit" value ="SUBMIT" class="btn"></button></center>
</form>

</div>


<script src="./js/bootstrap.min.js" ></script>


</body>
</html>