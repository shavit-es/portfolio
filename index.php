<?php
include "commonpart.php";
$resumelink='<a href="index.php?id=resume" class="ms-5">이력서</a>';
if($_GET['id']=="resume"){
	$resumelink='';
	$resume='';
}
?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<?=$headpart?>
	</head>
	<body>
		<h1 class="text-center">
			이현희
		</h1>
		<div class="d-flex justify-content-start">
			<?=$resumelink?>
			<?=$resume?>
			<br>
			<div class='border-end border-5 border-primary p-3'>
			<img src="images/face.png" alt="My Image" class='w-30 h-40 m-5'>
				<br>한양대학교 산업공학과 입학
				<br>
			</div>
			
		</div>
		
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>
	</body>
	<?=$endpart?>
</html>