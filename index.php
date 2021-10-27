<!-- https://www.miricanvas.com/templates/presentation/1wo3 -->
<?php
include "commonpart.php";
$resumelink='<a href="index.php?id=resume" class="ms-5">다음</a>';
if($_GET['id']=="resume"){
	$resumelink='';
	$resume='';
}
?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&display=swap');
		</style>
		<?=$headpart?>
	</head>
	<body class="font">
		<h1 class="text-center">
			이현희
		</h1>
		<div class="d-flex justify-content-start">
			<?=$resumelink?>
			<br>
			<?=$resume?>
			<br>
			<div class='border-end border-5 border-primary p-3 w-350 text-center'>
			<img src="images/face.png" alt="My Image" class='m-5 rounded mx-auto d-block'>
				<br>조직의 일원이자 사업의 주인으로서 적극적으로 참여하는 개발자 이현희입니다.
				<br>
			</div>
			<div class='m-5'>
				<h2>
					이현희 / Lee Hyun Hee
				</h2>
				1998. 04. 23 / 서울특별시 성동구
				<br>
				Email : shavit0423@naver.com
				<h2>
					학력
				</h2>
				2017.2 건국대학교사범대학부속 고등학교 졸업<br>
				2018.3 ~ 한양대학교 산업공학과 재학 중<br>
				<h2>
					능력
				</h2>
				Python<br>
				PHP<br>
				MySQL<br>
				CSS<br>
				JavaScript<br>
			</div>
			<div class='m-5'>
				<h2>
					언어능력
				</h2>
				TOEIC 890<br>
				<h2>
					자격증
				</h2>
				ITQ 아래한글<br>
				ITQ 엑셀<br>
				컴퓨터활용능력 2급<br>
				워드프로세서<br>
				<h2>
					프로젝트
				</h2>
				<a href='project.php?id=brandtest1'>명품 브랜드 테스트</a><br>
				<a href='http://restandeat.dothome.co.kr'>강동경찰서 구내식당 홈페이지</a><br>
				포트폴리오 투자비율별 최대예상손실액<br>
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