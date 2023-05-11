<!DOCTYPE html>
<html>
<head>
	<title> Delivery Signup Page</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverysignup.css">
    <script src="<?=ROOT?>/assets/js/multiselect-dropdown.js"></script>

</head>
<body>
	<header>
		<div class="logo">
			<img  src="<?=ROOT?>/assets/images/deliverysignup/logo.png" alt="Logo">
		</div>
		<div class="back-btn">
			<button onclick="document.location='deliverylogin'"><img src="<?=ROOT?>/assets/images/deliverysignup/arrow-left-circle.svg" alt="Back"></button>
		</div>
	</header>
	<main>
		<div class="left-side">
			<h2>Register to CropFello</h2>
			<form method="post" >


				<label for="firstName">First Name:</label>
				<input type="text" id="firstName" name="fname"><br>

				<label for="lastName">Last Name:</label>
				<input type="text" id="lastName" name="lname"><br>

				<!-- <label for="address">Address:</label>
				<input type="text" id="address" name="address"><br> -->

                <label>Available Area *</label>
        <select name="field2" id="field2" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3" >
          <option value="2">Ampara</option>
          <option value="3">Anuradhapura</option>
          <option value="4">Badulla</option>
          <option value="5">Batticaloa</option>
          <option value="6">Colombo</option>
          <option value="7">Galle</option>
          <option value="8">Gampaha</option>
          <option value="9">Hambantota</option>
		  <option value="10">Jaffna</option>
		  <option value="11">Kalutara</option>
		  <option value="12">Kandy</option>
		  <option value="13">Kegalle</option>
		  <option value="14">Kilinochchi</option>
		  <option value="15">Kurunegala</option>
		  <option value="16">Mannar</option>
		  <option value="17">Matale</option>
		  <option value="18">Matara</option>
		  <option value="19">Monaragala</option>
		  <option value="20">Mullaitivu</option>
		  <option value="21">Nuwara Eliya</option>
		  <option value="22">Polonnaruwa</option>
		  <option value="23">Puttalam</option>
		  <option value="24">Ratnapura</option>
		  <option value="25">Trincomalee</option>
		  <option value="26">Vavuniya</option>

          
        </select> 
		<!-- <form method="POST">
		<select id="items" name="items[]" multiple>
            <?php foreach ($listItems as $item): ?>
                <option value="<?= $item['id'] ?>" <?php if (in_array($item['id'], $selectedItems)) echo 'selected' ?>><?= $item['name'] ?></option>
            <?php endforeach; ?>
        </select>
		</form> -->
		<br> 

                <!-- <div class="vehicle-info1">
                    <label for="vehicleNo">Vehicle  Number</label>
				    <input type="text" id="vehicleNumber" name="vnumber" placeholder="Vehicle Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				    


                </div> -->

                <!-- <div class="vehicle-info2">
                    <label for="vehicleCapacity">Vehicle Capacity</label>
                    <input type="text" id="vehicleCapacity" name="vehicleCapacity">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
    
                    <label for="contactNo">Contact No:</label>
                    <input type="text" id="contactNo" name="cnum">
                </div>


			
		</div>
		<div class="right-side">
			<!-- <h2>Register</h2> -->
            <br><br>
			
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>

				<label for="password">Password:</label>
				<input type="password" id="password" name="password_hash"><br>

				<label for="confirmPassword">Confirm Password:</label>
				<input type="password" id="confirmPassword" name="confirmPassword"><br>

				<button type="submit">Register</button>
                </form>
			
		</div>
	</main>
	<footer>
		<img class="img2" src="<?=ROOT?>/assets/images/deliverysignup/register-corner2.png" alt="">
        <img class="img3" src="<?=ROOT?>/assets/images/deliverysignup/register-corner.png" alt="">
	</footer>


<script>
    const selectElement = document.getElementById("field2");
	const selectedOptions = Array.from(selectElement.selectedOptions).map(option => option.value);
	console.log(selectedOptions);
</script>


</body>
</html>
