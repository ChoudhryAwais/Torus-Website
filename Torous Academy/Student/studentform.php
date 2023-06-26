
<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="row">
		<div class="col-lg-12 display-3 text-center text-white font-weight-bold bg-secondary border ">Student Form</div>
	</div>
	<div class="row mt-3 mb-3">
		<div class="col-lg-3"></div>
		<div class="col-lg-1 process text-center font-weight-bold p-lg-2">0%</div>
		<div class="col-lg-8"></div>
	</div>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 bg-dark" style="border-radius: 5px;">
				<form class="form-group" action="studentform1.php" method="post">
					<div class="row">
						<div class="col-lg-6">
							<input class="form-control mt-3 p-4" type="Number" name="sserial" placeholder="Student Serial Number">
						</div>
						<div class="col-lg-6">
							<input class="form-control mt-3 p-4" type ="Number" name="sid" placeholder="Student Serial ID">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<input class="form-control mt-3 p-4" type ="text" name="sname" placeholder="Student Name">
						</div>
						<div class="col-lg-6">
							<input class="form-control mt-3 p-4" type ="text" name="fname" placeholder="Student Father Name">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<select name="batch" class="form-control mt-4">
								<option>Batch</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>							
							</select>
						</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-1"></div>
						<div class="col-lg-3">
							<select name="gender" class="form-control mt-4">
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-1">
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-12">
							<input class="form-control mt-3 p-3" type ="text" name="ssubject" placeholder="Subject">
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-6">
							<input type="Number" class="form-control" name="snsubject" placeholder="No. of Subject">
						</div>
					</div>
					<div>
						<select name="majorsub" class="form-control mt-3">
							<option>Major Discipline</option>
							<option value="Junior">Junior</option>
							<option value="Matric">Matric</option>
							<option value="Intermediate">Intermediate</option>
							<option value="Bachelors">Bachelors</option>
							<option value="Masters">Masters</option>
							<option value="Entry_Test">Entry Test</option>
							<option value="Courses">Courses</option>
						</select>						
					</div>
					<div class="row mt-3">
						<div class="col-lg-12">
							<label class="text-secondary font-weight-bold ml-1">Address</label>
							<textarea class="form-control text-center" rows="3" cols="10" name="address"></textarea>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-6">
							<input class="form-control mt-3 p-3" type ="text" name="gname" placeholder="Guardian Name">
						</div>
						<div class="col-lg-6">
							<input class="form-control mt-3 p-3" type ="text" name="grelation" placeholder="Relation">
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-4">
							<input class="form-control mt-3 p-3" type ="text" name="contact1" placeholder="Contact 1">
						</div>
						<div class="col-lg-4">
							<input class="form-control mt-3 p-3" type ="text" name="contact2" placeholder="Contact 2">
						</div>
						<div class="col-lg-4">
							<input class="form-control mt-3 p-3" type ="text" name="contact3" placeholder="Contact 3 if Available">
						</div>
					</div>	
					<div class="row mt-4">
						<div class="col-lg-9"></div>
						<div class="col-lg-3">
							<input type="submit" class="form-control btn-info"value="Next" name="submit">
							<input type="hidden" value="True" name="test">
						</div>
					</div>			
				</form>
		</div>
		<div class="col-lg-3"></div>
	</div>
</body>
</html>
