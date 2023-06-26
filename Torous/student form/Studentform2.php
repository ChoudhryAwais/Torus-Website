<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
</head>
<body>
	<?php  
		// $class = $_POST['class'];
		// $batch = $_POST['batch'];
		// $status = $_POST['status'];
		// $group = $_POST['group'];
		// $board = $_POST['board'];

		// student data
		// $majorsub = $_POST['majorsub'];
		// $sname   = $_POST['sname'];
		// $sfname   = $_POST['sfname']; 
		// $gender  = $_POST['gender'];
		// $dob  = $_POST['dob'];
		// $sdomicile = $_POST['sdomicile'];
		// $sreligion = $_POST['sreligion'];
		// $scnic = $_POST['scnic'];
		// $snationality = $_POST['snationality'];
		// $sphone = $_POST['sphone'];
		// $scell = $_POST['scell'];
		// $semail = $_POST['semail'];
		// $saddress = $_POST['saddress'];

		// // guardian data
		// $ginfo = $_POST['ginfo'];
		// $relaion = $_POST['relation'];
		// $gname = $_POST['gname'];
		// $gcnic = $_POST['gcnic'];
		// $gemail = $_POST['gemail'];
		// $gphone = $_POST['gphone'];
		// $gcell = $_POST['gcell'];

		// echo "Student Info"; echo "<br>";
		// // student
		// echo $majorsub; echo "<br>";
		// echo $sname; echo "<br>";
		// echo $sfname; echo "<br>";
		// echo $gender; echo "<br>";
		// echo $dob; echo "<br>";
		// echo $sdomicile; echo "<br>";
		// echo $sreligion; echo "<br>";
		// echo $scnic; echo "<br>";
		// echo $snationality; echo "<br>";
		// echo $saddress; echo "<br>";
		// echo $sphone; echo "<br>";
		// echo $scell; echo "<br>";
		// echo $semail; echo "<br>";

		// echo "Guardian's Info"; echo "<br>";
		// // guardian's
		// echo $ginfo; echo "<br>";
		// echo $gname; echo "<br>";
		// echo $gcnic; echo "<br>";
		// echo $gemail; echo "<br>";
		// echo $gphone; echo "<br>";
		// echo $gcell; echo "<br>";

		// echo "Academic Info"; echo "<br>";
		// echo $class; echo "<br>";
		// echo $batch; echo "<br>";
		// echo $status; echo "<br>";
		// echo $group; echo "<br>";
		// echo $board; echo "<br>";
		$majorsub = "Matric";
		$class    = "Tenth";
		$group    = "Sci_Bio";
	?>

	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F">
			ADMISSION FORM
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row mt-4">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 border border-dark border-left-0 border-right-0">


			<!-- Form starts here -->
			<form class="form-group form1 mb-5" id="subj">
				<!-- Pervious data -->
				<div class="text-uppercase mt-3 text-white h3 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Applying for 
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							discipline you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" id="snamei" name="sname" placeholder="<?php echo $majorsub ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							Class you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" id="snamei" name="sname" placeholder="<?php echo $class ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							Group you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" id="snamei" name="sname" placeholder="<?php echo $group ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
					</div>
				</div>
				<!-- Pervious data -->
				<div class="text-uppercase mt-5 text-white h3 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Select your subjects 
				</div>
				<?php


				// Matric subjects starts
					if((($class=="Ninth")||($class=="Tenth"))&&($group=="Sci_Bio"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub2" name="sub[]" value="Bio">
									<label for="sub2">Biology</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub3" name="sub[]" value="English">
									<label for="sub3">English</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub4" name="sub[]" value="Chem">
									<label for="sub4">Chemistry</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub5" name="sub[]" value="P.St">
									<label for="sub5">Pak Studies</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub6" name="sub[]" value="Phy">
									<label for="sub6">Physics</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub7" name="sub[]" value="Urdu">
									<label for="sub7">Urdu</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub8" name="sub[]" value="Math">
									<label for="sub8">Maths</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub9" name="sub[]" value="Isl">
									<label for="sub9">Islamiat</label>
								</div>
							</div>
							';
					}
					elseif((($class=="Ninth")||($class=="Tenth"))&&($group=="Sci_Comp"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub2" name="sub[]" value="Comp">
									<label for="sub2">Computer</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub3" name="sub[]" value="English">
									<label for="sub3">English</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub4" name="sub[]" value="Chem">
									<label for="sub4">Chemistry</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub5" name="sub[]" value="P.St">
									<label for="sub5">Pak Studies</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub6" name="sub[]" value="Phy">
									<label for="sub6">Physics</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub7" name="sub[]" value="Urdu">
									<label for="sub7">Urdu</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub8" name="sub[]" value="Math">
									<label for="sub8">Maths</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub9" name="sub[]" value="Isl">
									<label for="sub9">Islamiat</label>
								</div>
							</div>
							';
					}
					elseif((($class=="Ninth")||($class=="Tenth"))&&($group=="Arts"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub2" name="sub[]" value="Civics">
									<label for="sub2">Civics</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub3" name="sub[]" value="English">
									<label for="sub3">English</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub4" name="sub[]" value="Phy-Edu">
									<label for="sub4">Phy.Edu</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub5" name="sub[]" value="P.St">
									<label for="sub5">Pak Studies</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub6" name="sub[]" value="Eco">
									<label for="sub6">Economics</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub7" name="sub[]" value="Urdu">
									<label for="sub7">Urdu</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="checkbox" id="sub8" name="sub[]" value="Math">
									<label for="sub8">General Maths</label>
								</div>
								<div class="col-lg-6">
									<input type="checkbox" id="sub9" name="sub[]" value="Isl">
									<label for="sub9">Islamiat</label>
								</div>
							</div>
							';
					}
					elseif(($class=="Composite_Matric")&&($group=="Sci_Bio"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub2" name="sub[]" value="Bio-I">
									<label for="sub2">Biology-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub3" name="sub[]" value="Bio-II">
									<label for="sub3">Biology-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub4" name="sub[]" value="English-I">
									<label for="sub4">English-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub5" name="sub[]" value="English-II">
									<label for="sub5">English-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub6" name="sub[]" value="Chem-I">
									<label for="sub6">Chemistry-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub7" name="sub[]" value="Chem-II">
									<label for="sub7">Chemistry-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub8" name="sub[]" value="P.St-I">
									<label for="sub8">Pak Studies-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub9" name="sub[]" value="P.St-II">
									<label for="sub9">Pak Studies-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub10" name="sub[]" value="Phy-I">
									<label for="sub10">Physics-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub11" name="sub[]" value="Phy-II">
									<label for="sub11">Physics-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub12" name="sub[]" value="Urdu-I">
									<label for="sub12">Urdu-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub13" name="sub[]" value="Urdu-II">
									<label for="sub13">Urdu-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub14" name="sub[]" value="Math-I">
									<label for="sub14">Maths-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub15" name="sub[]" value="Math-II">
									<label for="sub15">Maths-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub16" name="sub[]" value="Isl-I">
									<label for="sub16">Islamiat-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub17" name="sub[]" value="Isl-II">
									<label for="sub17">Islamiat-II</label>
								</div>
							</div>
							';
					}
					elseif(($class=="Composite_Matric")&&($group=="Sci_Comp"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub2" name="sub[]" value="Comp-I">
									<label for="sub2">Computer-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub3" name="sub[]" value="Comp-II">
									<label for="sub3">Computer-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub4" name="sub[]" value="English-I">
									<label for="sub4">English-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub5" name="sub[]" value="English-II">
									<label for="sub5">English-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub6" name="sub[]" value="Chem-I">
									<label for="sub6">Chemistry-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub7" name="sub[]" value="Chem-II">
									<label for="sub7">Chemistry-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub8" name="sub[]" value="P.St-I">
									<label for="sub8">Pak Studies-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub9" name="sub[]" value="P.St-II">
									<label for="sub9">Pak Studies-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub10" name="sub[]" value="Phy-I">
									<label for="sub10">Physics-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub11" name="sub[]" value="Phy-II">
									<label for="sub11">Physics-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub12" name="sub[]" value="Urdu-I">
									<label for="sub12">Urdu-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub13" name="sub[]" value="Urdu-II">
									<label for="sub13">Urdu-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub14" name="sub[]" value="Math-I">
									<label for="sub14">Maths-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub15" name="sub[]" value="Math-II">
									<label for="sub15">Maths-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub16" name="sub[]" value="Isl-I">
									<label for="sub16">Islamiat-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub17" name="sub[]" value="Isl-II">
									<label for="sub17">Islamiat-II</label>
								</div>
							</div>
							';
					}
					elseif(($class=="Composite_Matric")&&($group=="Arts"))
					{
						echo ' 
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input type="checkbox" id="sub1" name="sub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub2" name="sub[]" value="Civics-I">
									<label for="sub2">Civics-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub3" name="sub[]" value="Civics-II">
									<label for="sub3">Civics-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub4" name="sub[]" value="English-I">
									<label for="sub4">English-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub5" name="sub[]" value="English-II">
									<label for="sub5">English-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub6" name="sub[]" value="Phy-Edu-I">
									<label for="sub6">Phy-Edu-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub7" name="sub[]" value="Phy-Edu-II">
									<label for="sub7">Phy-Edu-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub8" name="sub[]" value="P.St-I">
									<label for="sub8">Pak Studies-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub9" name="sub[]" value="P.St-II">
									<label for="sub9">Pak Studies-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub10" name="sub[]" value="Eco-I">
									<label for="sub10">Economics-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub11" name="sub[]" value="Eco-II">
									<label for="sub11">Economics-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub12" name="sub[]" value="Urdu-I">
									<label for="sub12">Urdu-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub13" name="sub[]" value="Urdu-II">
									<label for="sub13">Urdu-II</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<input type="checkbox" id="sub14" name="sub[]" value="G-Maths-I">
									<label for="sub14">General Maths-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub15" name="sub[]" value="G-Maths-II">
									<label for="sub15">General Maths-II</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub16" name="sub[]" value="Isl-I">
									<label for="sub16">Islamiat-I</label>
								</div>
								<div class="col-lg-3">
									<input type="checkbox" id="sub17" name="sub[]" value="Isl-II">
									<label for="sub17">Islamiat-II</label>
								</div>
							</div>
							';
					}


				 // Matric Subjects ends


				 ?>

			</form>
			<!-- Form ends here -->


		</div>
		<div class="col-lg-1"></div>	
	</div>	
	<div style="margin-top: 100px;"></div>
</body>
</html>