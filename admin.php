<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>S_cube tours & travels</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="style.css">
			
    </head>
	
    <body>
       <div id="hd">
			<center><h3><div style="margin: 16px 0px;">S<sup>3</sup> tours & travels<sup>&reg</sup></div></h3></center>

		</div><hr>
        
		
		<!-----------------------------------------------DIVISIONS------------------------------------------------>

				<hr class="style1" style="margin: 7px 0px;"><h5 class="text-center font-weight-bolder">Bookings</h5><hr class="style1" style="margin: 7px 0px;">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Tour</th>
					      <th scope="col">Name</th>
					      <th scope="col">Address</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Email</th>
					      <th scope="col">Nationality</th>
					      <th scope="col">Adults</th>
					      <th scope="col">Child</th>
					      <th scope="col">From</th>
					      <th scope="col">To</th>
					      <th scope="col">Passport</th>
					      <th scope="col">Stay</th>
					      <th scope="col">Days</th>
					      <th scope="col">Remark</th>
						</tr>
					  </thead>
						<tbody>
						<?php


						$username="root";
						$database="s_cubedb";
						$servername="localhost";
						$password="";

						$conn = mysqli_connect($servername, $username, $password, $database);

						$sql = "SELECT * FROM booking";

						$result = $conn ->query($sql);

						while($row = $result->fetch_assoc()){
						$id = $row['id'];
						$tour = $row['tour'];
						$name = $row['name'];
						$address = $row['address'];
						$phone = $row['phone'];
						$email = $row['email'];
						$nationality = $row['nationality'];
						$adults = $row['adults'];
						$child = $row['child'];
						$datefrom = $row['datefrom'];
						$dateto = $row['dateto'];
						$passport = $row['passport'];
						$stay = $row['stay'];
						$days = $row['days'];
						$remark = $row['remark'];
		
						?>
					  
					    <tr>
					      <td><?php echo $id; ?></td>
					      <td><?php echo $tour; ?></td>
					      <td><?php echo $name; ?></td>
					      <td><?php echo $address; ?></td>
					      <td><a style="text-decoration:none; color:green;" href="tel:<?php  echo $phone; ?>"><?php echo $phone; ?></a></td>
					      <td><a style="text-decoration:none; color:green;" href="mailto:<?php  echo $email; ?>"><?php echo $email; ?></td>
					      <td><?php echo $nationality; ?></td>
					      <td><?php echo $adults; ?></td>
					      <td><?php echo $child; ?></td>
					      <td><?php echo $datefrom; ?></td>
					      <td><?php echo $dateto; ?></td>
					      <td><?php echo $passport; ?></td>
					      <td><?php echo $stay; ?></td>
					      <td><?php echo $days; ?></td>	
					      <td><?php echo $remark; ?></td>
					      <td>
					      </td>
					    </tr>
					    <?php } ?>					    
					  </tbody>
					</table>
				</div>	
		

		<br><br>
		<hr class="style1" style="margin: 7px 0px;"><h5 class="text-center font-weight-bolder">Inquiries & feedbacks</h5><hr class="style1" style="margin: 7px 0px;">
			<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Phone</th>
						  <th scope="col">Message</th>
						</tr>
					  </thead>
						<tbody>




		
						<?php

						$username="root";
						$database="s_cubedb";
						$servername="localhost";
						$password="";

						$conn = mysqli_connect($servername, $username, $password, $database);

						$sql = "SELECT * FROM contactus	";

						$result = $conn ->query($sql);

						while($row = $result->fetch_assoc()){
						 $id = $row['id'];
						 $name = $row['name'];
						 $email = $row['email'];
						 $phone = $row['phone']; 
						 $messaage = $row['message'];
							
							
						?>


					<tr>
					    <td><?php echo $id; ?></td>
					    <td><?php echo $name; ?></td>
					    <td><a style="text-decoration:none; color:green;" href="mailto:<?php  echo $email; ?>"><?php echo $email; ?></a></td>
					    <td><a style="text-decoration:none; color:green;" href="tel:<?php  echo $phone; ?>"><?php echo $phone; ?></td>
					    <td  style="height:100px;"><?php echo $messaage; ?></td>
					    </tr>
					    <?php } ?>					    
					  </tbody>
					</table>
		

		
	
		
      
	  
	  
	  
	  
	  







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>