<!-- https://www.miricanvas.com/templates/presentation/1wo3 -->
<?php
include "commonpart.php";
$resumelink='<a href="index.php?id=resume" class="ms-5">이력서</a>';
if($_GET['id']=="brandtest1"){
	$contents='<h1 class="text-center">
			<a href=\'https://brandtest.site\'>명품 브랜드 테스트</a>
		</h1>
		<div class="d-flex flex-column bd-highlight mb-3 text-center">
			<div class=\'border-end border-5 border-primary p-3 text-center\'>
				<img src="images/brandtest1.png" alt="My Image" class=\'m-5 rounded\'>
				<img src="images/brandtest2.png" alt="My Image" class=\'m-5 rounded\'>
				<img src="images/brandtest3.png" alt="My Image" class=\'m-5 rounded\'>
			</div>
			사용자가 옷을 입고 있는 사진을 업로드하면, A.I.를 통해서 어떤 명품 브랜드의 스타일과 비슷한지 찾아주는 서비스입니다.
			<a class="text-end me-5" href=\'project.php?id=brandtest2\'>다음 페이지</a>
		</div>';}
if($_GET['id']=="brandtest2"){
	$contents='		<h1 class="text-center">
			<a href=\'https://brandtest.site\'>명품 브랜드 테스트</a>
		</h1>
		<div class="d-flex flex-column bd-highlight mb-3 text-center">
			<div class=\'d-flex text-center justify-content-center\'>
				<div class=\'d-flex flex-column\'>
					<img src="images/brandtest21.png" alt="My Image" class=\'m-5 rounded\'>
					<div>
						[사진 2-1]
					</div>
				</div>
				<div class=\'d-flex flex-column\'>
					<img src="images/brandtest22.png" alt="My Image" class=\'m-5 rounded\'>
					<div>
						[사진 2-2]
					</div>
				</div>
				<div class=\'d-flex flex-column\'>
					<img src="images/brandtest23.png" alt="My Image" class=\'m-5 rounded\'>
					<div>
						[사진 2-3]
					</div>
				</div>
			</div>
			<div class=\'m-3\'>
				[사진 2-1]과 같이 파이썬 셀레니움을 이용해서 구글 이미지를 크롤링했습니다. 크롤링을 한 키워드는 \'OO(브랜드 이름) 컬렉션\'을 입니다. 검색을 통해 나오는 [사진 2-2]와 같은 각 명품 브랜드의 컬렉션 사진을 각 브랜드당 200장 정도 자동으로 수집했습니다. 그리고 [사진 2-3]과 같이 직접 모든 사진을 가공했습니다. 사람의 얼굴이나 주변 배경에 의해서 결과가 바뀌는 것을 최대한 줄이기 위해서 배경과 사람의 머리를 최대한 제외한 부분을 학습 데이터로서 사용했습니다.<br>
			</div>
			<a class=\'text-start ms-5\' href="project.php?id=brandtest1">이전 페이지</a><a class=\'text-end me-5\' href=\'project.php?id=brandtest3\'>다음 페이지</a>
		</div>';
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
		<?=$contents?>

		
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>
	</body>
	<?=$endpart?>
</html>