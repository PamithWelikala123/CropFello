<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="images/logo.png" alt="Logo">
		</div>
		<div class="back-btn">
			<button><img src="images/arrow-left-circle.svg" alt="Back"></button>
		</div>
	</header>
	<main>
		<div class="left-side">
			<h2>Register to CropFello</h2>
			<form>
				<label for="firstName">First Name:</label>
				<input type="text" id="firstName" name="firstName"><br>

				<label for="lastName">Last Name:</label>
				<input type="text" id="lastName" name="lastName"><br>

				<!-- <label for="address">Address:</label>
				<input type="text" id="address" name="address"><br> -->

                <label>Available Area *</label>
        <select name="field2" id="field2" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
          <option>Kottawa</option>
          <option>Pannipitiya</option>
          <option>Maharagama</option>
          <option>Nugegoda</option>
          <option>Kirulapana</option>
          <option>Panadura</option>
          <option>Moratuwa</option>
          <option>Gampaha</option>
          
        </select><br>

                <div class="vehicle-info1">
                    <!-- <label for="vehicleNo">Vehicle  Number</label> -->
				    <input type="text" id="vehicleNo" name="vehicleNo" placeholder="Vehicle Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				    <!-- <label for="vehicleType">Vehcle Type </label>
				    <input type="text" id="vehicleType" name="vehicleType"><br> -->
                    <select>
                        <option value="0">Select Vehicle Type</option>
                        <option value="1">Lorry</option>
                        <option value="2">Van</option>
                        <option value="3">Car</option>
                        <option value="4">3 Wheeler</option>
                        <option value="5">Motorcycle</option>
                        <option value="6">Tractor</option>
                        <option value="7">Truck</option>
                      </select>
                </div>

                <div class="vehicle-info2">
                    <label for="vehicleCapacity">Vehicle Capacity</label>
                    <input type="text" id="vehicleCapacity" name="vehicleCapacity">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
                    <label for="contactNo">Contact No:</label>
                    <input type="text" id="contactNo" name="contactNo">
                </div>


			</form>
		</div>
		<div class="right-side">
			<!-- <h2>Register</h2> -->
            <br><br>
			<form>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>

				<label for="password">Password:</label>
				<input type="password" id="password" name="password"><br>

				<label for="confirmPassword">Confirm Password:</label>
				<input type="password" id="confirmPassword" name="confirmPassword"><br>

				<button type="submit">Register</button>
			</form>
		</div>
	</main>
	<footer>
		<img class="img2" src="images/register-corner2.png" alt="">
        <img class="img3" src="images/register-corner.png" alt="">
	</footer>

    <!-- <script src="multiselect-dropdown.js"></script> -->


</body>
</html>
