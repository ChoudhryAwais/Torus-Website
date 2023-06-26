<!DOCTYPE html>
<html>
<head>
	<title>Student form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		if (empty($_POST['test1'])) 
		{
			$sserial = $_POST['sserial'];
			$sid     = $_POST['sid'];
			$sname   = $_POST['sname'];
			$fname   = $_POST['fname'];
			$batch   = $_POST['batch'];
			$gender  = $_POST['gender'];
			$ssubject= $_POST['ssubject'];
			$snsubject= $_POST['snsubject'];
			$majorsub = $_POST['majorsub'];
			$address  = $_POST['address'];
			$gname    = $_POST['gname'];
			$grelation= $_POST['grelation'];
			$contact1 = $_POST['contact1'];
			$contact2 = $_POST['contact2'];
			$contact3 = $_POST['contact3'];
			echo $sserial;
			echo $sid;
			echo $sname;
			echo $fname;
			echo $batch;	
			echo $gender;
			echo $ssubject;
			echo $snsubject;
			echo $majorsub;
			echo $address;
			echo $gname;
			echo $grelation;
			echo $contact1;
			echo $contact2;
			echo $contact3;
		} 	
		elseif (!empty($_POST['test1'])) 
		{
		 	$class = $_POST['class'];
		 	echo $class;
		 	$majorsub = "none";
		} 
		 else
		{

		}
	 ?>
	<div class="row">
		<div class="col-lg-12 display-3 text-center text-white font-weight-bold bg-secondary border ">Student Form</div>
	</div>
	<div class="row mt-3 mb-3">
		<div class="col-lg-3"></div>
		<div class="col-lg-3 process text-center font-weight-bold p-lg-2">50%</div>
		<div class="col-lg-6"></div>
	</div>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 bg-dark" style="height:170px;border-radius: 5px">
			<form  class="form-group" action="studentform1.php" method="post">
				<?php
					if($majorsub=="Junior") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">CLASS</option>
							<option value="Class_1">Class 1</option>
							<option value="Class_2">Class 2</option>
							<option value="Class_3">Class 3</option>
							<option value="Class_4">Class 4</option>
							<option value="Class_5">Class 5</option>
							<option value="Class_6">Class 6</option>
							<option value="Class_7">Class 7</option>
							<option value="Class_7">Class 7</option>
						</select>';	
					}
					elseif ($majorsub=="Matric") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">Year</option>
							<option value="Ninth">Ninth (9th)</option>
							<option value="Tenth">Tenth (10th)</option>
							<option value="Composite_9_10">Composite</option>
						</select>';	
					}
					elseif ($majorsub=="Intermediate") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">YEAR</option>
							<option value="First_year">First year</option>
							<option value="Second_year">Second Year</option>
							<option value="Composite_inter">Composite</option>
						</select>';	
					}
					elseif ($majorsub=="Bachelors") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">YEAR</option>
							<option value="Third_year">Third year</option>
							<option value="Fourth_year">Fourth Year</option>
							<option value="Composite_Bachelors">Composite</option>
						</select>';	
					}
					elseif ($majorsub=="Masters") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">SEMESTER</option>
							<option value="Semester_1">Semester 1</option>
							<option value="Semester_2">Semester 2</option>
							<option value="Semester_3">Semester 3</option>
							<option value="Semester_4">Semester 4</option>
							<option value="Semester_5">Semester 5</option>
							<option value="Semester_6">Semester 6</option>
						</select>';	
					}
					elseif ($majorsub=="Entry_test") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">ENTRY TEST SUBJECT</option>
							<option value="Medical">Medical</option>
							<option value="Engineering">Engineering</option>
							<option value="Commerce">Commerce</option>
							<option value="Comp_Sci">Computer Science</option>
						</select>';	
					}
					elseif ($majorsub=="Courses") 
					{
						echo ';<select name="class" class="form-control mt-3">
							<option value="none">COURSES</option>
							<option value="Language">Language</option>
							<option value="Technical">Technical</option>
							
						</select>';	
					}
					else
					{
						echo ';<select name="class" class="form-control mt-3">	
						</select>';
					}

				?>
				<div class="row mt-4">
					<div class="col-lg-2">
						<a href="studentform.php" style="text-decoration: none" class="btn-danger form-control text-center">Back</a>
					</div>
					<div class="col-lg-8"></div>
					<div class="col-lg-2">
						<input class="btn-success form-control" type="submit" value="Next">
						<input type="hidden" name="test1" value="true">
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-3"></div>
</body>
</html>