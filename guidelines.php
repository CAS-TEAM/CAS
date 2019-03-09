<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';

?>

	
	<div class="container">
		<div class="row">       
		<div class="col offset-md-2 parta">

			
			<header class="heading"><b>'Guidelines to Fill Application Form'</b></header>
			<hr style="border: 0.5px solid #c8c8c8"><br>

			<div class="row">
				<div class="col-md-12 text-left ml-2">
					<p>Though the application form for Cas is self-explanatory, this note gives requisite guidelines which will help faculty members while filling application form for CAS(Career Advancement Scheme) and during calculation of Performance Index(PI).</p>
				</div>
			</div>
		<div class="row">
			<div class="col-md-12 text-left ml-2">
				<p style="font-size: 18px"><b>Application Form</b></p>
			</div>
			<div class="row">
				<div class="col-md-12 text-left ml-5">
					<ul>
						<li><p>Form is divided in 2 parts</p></li>
						<div class="row">
							<div class="col-md-11 text-left ml-5">
									<li><p>The part A collects general information about a faculty member and is associated with General Performance Index (GPI); the maximum value for which is assigned as 50</p></li>
									<li><p>Part B is divided in four categories with total PI of 450.</p></li>
								</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<li><p>Maximum PI is 500.</p></li>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-12 text-left ml-2">
				<p style="font-size: 18px"><b>Submission Form</b></p>
			</div>
			<div class="row">
				<div class="col-md-11 text-left ml-5">
					<ul>
						<li><p>Calculation of PI for CAS will be based on cumulative PI score for academic year 2017-18.(Weightage of 75%)</p></li>
						<li><p>PI Score for academic year 2016-17(Weightage of 25%). However, faculty members who have applieed for CAS 2017 and submitted the PI form of 2016-17 need not submit form again as the same would be considered during CAS 2018.</p></li>
						<li><p>Hence faculty members are requested to fill application form(s) and attach relevant documents for academic year(s) 2017-18 and 2016-17 wherever applicable.</p></li>
						<li><p>Completed handwritten (in legible handwriting) application form along with necessary and relevant documents will have to be routed through Head of Department for the evaluation of applications.</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-left ml-2">
				<p style="font-size: 18px"><b>Evaluation of Form</b></p>
			</div>
			<div class="row">
				<div class="col-md-12 text-left ml-5">
					<ul>
						<li><p>Internal as well as external members(s) comprise the "Scrutiny and Evaluation Committee."</p></li>
						<li><p>This committee will verify the details in the application form based on the documents submitted.</p></li>
					</ul>
				</div>
			</div>
		</div>
	

			
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12">
					<p style="font-size: 18px"><b>'PartA'</b></p>
				</div>
			</div>

		<div class="row">
			<div class="col-md-12 text-left ml-2">
				<p style="font-size: 18px"><b>General Information and General Performance Index (GPI): Max.GPI 50</b></p>
			</div>				
			<div class="row">
				<div class="col-md-12 text-left ml-5">
					<ul>
						<li><p>This part collects general information about a faculty member.</p></li>
						<li><p>If a faculty has achieved higher qualifications during said period, then he/she will get max. 20 GPI. The clarification about higher qualification is given in application.</p></li>
						<li><p>If a faculty member has attented any STTP/workshop, then GPI will be calculated as 03 per day of duration of the activity. Maximum GPI is 30. (e.g. GPI for 2 weeks STTP=10 days*3=30)</p></li>
						<li><p>For completion of online course, the GPI will be 30. As the no of hours of any online course normally exceeds 10 hours, maximum 01 course will be considered. The course completion certificate needs to be submitted.</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-left ml-2">
				<p><b>GPI:_________ out of 50</b></p>
			</div>
		</div>

			
			<hr style="border: 0.5px solid #c8c8c8">

		<div class="col-md-12">
			<p style="font-size: 18px"><b>'PartB'</b></p>

				<div class="row">
					<div class="col-md-12 text-left">
						<p style="font-size: 18px"><i class="fas fa-arrow-right" style="color: green;font-size: 20px"></i><b> Category I: Teaching and Learning(Max.PI 100)</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI 1</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
						<li><p><b>Maximum PI is 40</b></p>
						<li><p>This is to evaluate the lectures/practical/tutorial taken during the semester</p></li>
						<li><p>The maximum hours (B) need to be calculated as (no. of hrs. per week)*(13 weeks)</p></li>
						<li><p>Average of even and odd semester to be considered</p></li>
						<li><p>In case faculty member is on leave/not available in the college during complete/part of any semester, then in such case the maximum hours(B) will change accordingly</p></li>
						<li><p>The denominator in average (AVC) calculation will be total of no of attributes listed in course column in even and odd semester together</p></li>
						<li><p>The attendance record/attendance sheets will be considered for verification</p></li>
					</ul>
				</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI 2</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI is 40</b></p></li>
							<li><p>This is to evaluate the no. of examination duties the faculty member has done during last academic year</p></li>
							<li><p>If duty is assigned and carried out, then one will get PI as 100%</p></li>
							<li><p>In case faculty member is on leave/not available in the college during complete/part of any semester, then in such case the denominator will be the number of weeks of presence in the College.</p></li>
							<li><p>If some duties are not assigned, then they will not be accounted for during calculation of average.</p></li>
							<li><p>If duty was assigned and but not done fully / done partially, then proportionately the PI need to be calculated. The CAS committee reserves the final decision.</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI 3</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI is 10</b></p></li>
							<li><p>This is for any initiative taken for additional resources provided to the students to enrich courde content / syllabus</p></li>
							<li><p>Each initiative will carry 02 PI</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI 4</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI is 10</b></p></li>
							<li><p>This is to evaluate initiative of a faculty member for participatory / innovative Teaching-Learning Methodologies</p></li>
							<li><p>Each initiative will carry 02 PI</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
					<p><b>Category I = PI1+PI2+PI3+PI4 = _______ out of 100</b></p>
				</div>
				</div><br>

				<div class="row">
					<div class="col-md-12 text-left">
						<p style="font-size: 18px"><b><i class="fas fa-arrow-right" style="color: green;font-size: 20px"></i> Category II: Co-curricular and administrative activities done in college(Max.PI 100)</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PII 1</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 40</b></p></li>
							<li><p>This is to account for the contribution of a faculty member holding any administrative post yearlong activities</p></li>
							<li><p>Only Vice-Principal / Deans / HODs are considered for max. PI 40 and list of activities / attributes for contribution need to be mentioned in application</p></li>
							<li><p>Associate HOD, NBA/NAAC coordinator, IQAC coordinator, purchase committee member will be eligible to get maximum PI of 20 and list of activities / attributes for contribution need to be mentioned in application</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PII 2</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 20</b></p></li>
							<li><p>Extension, Co-curricular and Field based activities / internships initiated by faculty members in the college</p></li>
							<li><p>Each initiative will carry 05 PI</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PII 3</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 20</b></p></li>
							<li><p>Extra-curricular and social activities initiated by faculty member in the college</p>
							<li><p>Each initiative will carry 05 PI</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PII 4</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 20</b></p></li>
							<li><p>Contribution of a faculty member in the college administration with short term activities such as organizing committee member for certain events, statutory committee member, admission committee, sports committee, member of Symphony committee etc.</p></li>
							<li><p>Each contribution will carry 05 PI</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>Category II: PII1+PII2+PII3+PII4 ___ out of 100</b></p>
					</div>
				</div><br>

				<div class="row">
					<div class="col-md-12 text-left">
						<p style="font-size: 18px"><b><i class="fas fa-arrow-right" style="color: green;font-size: 20px"></i>  Category III: Publication, research / thesis supervisor, project guide, research, consultancy and intellectual properties</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 175</b></p></li>
							<li><p>Only peer reviewed journal will be considered. Online / paid journals will not be taken into account.</p></li>
							<li><p>Publications of a faculty member in other than peer reviewed journals will be evaluated by committee.</p></li>
							<li><p>The project / research work / consultancy are divided in three categories(Avoid entry of any project in more than one category)</p></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>Category III: PI = ___ out of 175</b></p>
					</div>
				</div><br>

				<div class="row">
					<div class="col-md-12 text-left">
						<p style="font-size: 18px"><b><i class="fas fa-arrow-right" style="color: green;font-size: 20px"></i>  Category IV: Curricular / Co-curricular / Administrative activities done outside college</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-left ml-5">
						<ul>
							<li><p><b>Maximum PI = 75</b></p></li>
							<li><p>This category is for faculty member's contribution outside KJSCE</p></li>
							<li><p>This includes invited talks/session chair/reviewer/panel discussion etc.</p></li>
							<li><p>Proof for invitation along with attendance needs to be attached</p></li>
						</ul>
					</div>
				</div>
			<div class="row">
					<div class="col-md-12 text-left">
						<p><b>Category IV: PI = ___ out of 75</b></p>
					</div>
				</div>
				<hr style="border: 0.5px solid #c8c8c8">


				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI of 2016-17 = A</b></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>PI of 2017-18 = B</b></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-left">
						<p><b>Total PI for CAS evaluation = (0.25*A)+(0.75*B)</b></p>
					</div>
				</div>
			</div>
			

		</div>
</div>
</div>
<br><br>













