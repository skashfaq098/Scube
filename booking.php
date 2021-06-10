<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>S_cube tours & travels</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">  
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Open Sans", sans-serif;
    }
  	</style>
</head>
<body>
	<!-- navbar -->

	<nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="" alt="S_Cubelogo" style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="packages.html">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
        </ul>
    </div>
  </nav>
  <!-- nav ends -->

<div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 m-auto">
            <div class=""><br>
              <h1 align="center">ONLINE BOOKING FORM</h1> <br>
              <form action="book.php" method="post">
                <h3>Personal Info</h3>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group required">
                      <label for="name">Full Name *</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group required">
                      <label for="no">Phone no. *</label>
                      <input type="tel" name="phone" class="form-control" id="no" required maxlength="10">
                    </div>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputEmail" class="control-label">Email Address *</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" required>
                </div>           
                <div class="form-group ">
                  <label for="address">Full Address</label>
                  <input type="text" name="address" class="form-control" id="address" required>
                </div>
                <div class="form-group required">
                  <label for="Nationality">Nationality *</label>
                  <input type="text" name="nationality" class="form-control" id="nationality" required>
                </div>
                
                
                <br><h3>Select Tour</h3>
                <div class="form-group required col-sm-6">
				  <select class="form-control" name="tour" id="sel1">
				  	<option>Select</option>
				    <option value="Goa">Goa</option>
					<option value="Golden_Triangle">Golden Triangle</option>
					<option value="Kashmir">Kashmir</option>
					<option value="Europe">Europe</option>
					<option value="Dubai">Dubai</option>
					<option value="Singapore">Singapore</option>
				  </select>
				</div>


				<br><h3>Total persons </h3>
						<div class="row">
							<div class="form-group required col-sm-6">
							 <label for="sel2">Adults *</label>
							 	<select class="form-control" name="adults" id="sel2">
							 			<option>Select</option>
							    		<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10 & above</option>
							 	</select>
							</div>

							<div class="form-group col-sm-6">
							 <label for="sel3">Child </label>
							 	<select class="form-control" name="child" id="sel3">
							 			<option>Select</option>
							    		<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10 & above</option>
							 	</select>
							</div>
						</div>
				

				<br><h3>Tentative Tours Dates</h3>
					<div class="row">
						<div class="form-group required col-sm-6">
							<tr>	
								<td>From<br>
								<input type="date" id="Date1" name="datefrom"> 
								</td>
						</div>		
						<div class="form-group required col-sm-6">
								<td>To<br>
								<input type="date" id="Date2" name="dateto"> 
								</td>
							</tr>
						</div>
					</div>

				
				<br><h3>Other info.</h3>
                <div class="form-group required col-sm-6">
                	<label for="sel4">Passport *</label>
				  <select class="form-control" name="passport" id="sel4">
				    <option>Select</option>
				    <option value="Yes">Yes</option>
					<option value="No">No</option>
				  </select>
				</div>	


				<div class="form-group required col-sm-6">
                	<label for="sel5">Stay Type *</label>
				  <select class="form-control" name="stay" id="sel5">
				    <option>Select</option>
				    <option value="Standard">Standard</option>
					<option value="Delux">Delux</option>
					<option value="Premium">Premium</option>
				  </select>
				</div>


				<div class="form-group required col-sm-6">
                	<label for="sel6">Number of days *</label>
				  	<select class="form-control" name="days" id="sel6">
				    <option>Select</option>
				    <option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10 & above</option>
				  	</select>
				</div>

				<div class="form-group">
                  <label for="inputMessage">Remarks *</label>
                  <textarea class="form-control" name="remark" rows="3" cols="20" required></textarea>
                </div>	

			




                <center>
                <input type="submit" class="btn btn-primary" value="submit" name="submit">
                <input class="btn btn-primary" type="reset" value="Reset">
            </center>
              </form>
            </div>
          </div>
        </div>
      </div>

	





<!--------------------------------------------footer----------------------------------------------------->
        
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    <!-- Footer -->
        <footer class="pt-5 pb-4 bg-light top-marg" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                <p class="mb-4">S_Cube tours Pvt. Ltd is a leading provider of travel related services and offer tour packages.</p>
                <ul class="f-address">
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="fas fa-map-marker"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0">Address:</h6>
                        <p>Andheri west Mumbai 400102 maharashtra</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="far fa-envelope"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                        <p><a href="#">Support@S_cube.com</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0"></h6>
                        <p><a href="#">+91-9768011041</a></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold"> &nbsp &nbsp &nbsp  &nbsp CONNECT WITH US</h5>
                <ul class="social-pet mt-4">
                  <li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com" title="twitter" target="blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.aboutme.google.com" title="google-plus" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="https://www.instagram.com" title="instagram" target="blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        
        <!-- Copyright -->
        <section class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12 ">
                <div class="text-center text-white">
                  &copy; 2019 S_cube All Rights Reserved.
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- copyright ends -->
    <!-- Footer ends -->

    <!-- script for date -->
		    <script>
					var date = new Date();
					var day = date.getDate();
					var month = date.getMonth()+1;
					var year = date.getFullYear();
					
					if (month < 10) month = "0" + month;
					if (day < 10) day = "0" + day;
					
					var today = year + "-" + month + "-" + day;
					document.getElementById("Date1").value = today;
				</script>
		        
					 <script>
					var date = new Date();
					var day = date.getDate()+1;
					var month = date.getMonth()+1;
					var year = date.getFullYear();
					
					if (month < 10) month = "0" + month;
					if (day < 10) day = "0" + day;
					
					var today = year + "-" + month + "-" + day;
					document.getElementById("Date2").value = today;
				</script>

	<!--script ends  -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>