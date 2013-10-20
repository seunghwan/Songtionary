<?php 
  require_once ("includes/connect.php");

	$query = "CREATE TABLE IF NOT EXISTS definitions (id INT NOT NULL AUTO_INCREMENT, word VARCHAR(10), content TEXT, sound VARCHAR(50), PRIMARY KEY (id))";
	mysqli_query($conn, $query);
 ?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Project Gogi</title>

	<!-- All pre-requisited libraries such as jQuery, jQuery UI, and zepto -->
	<script src="lib/foundation/js/vendor/zepto.js"></script>
	<script src="lib/jquery/jquery-2.0.3.js"></script>
	<script src="lib/jquery/jquery-ui.custom.min.js"></script>

	<!-- Foundation 4.1.3 -->
	<!-- The main CSS library to use -->
	<link rel="stylesheet" href="lib/foundation/css/foundation.css">
	<link rel="stylesheet" href="lib/foundation/css/icons/general_foundicons.css">

	<script src="lib/foundation/js/vendor/custom.modernizr.js"></script>

	<!-- TagCanvas -->
	<script src="lib/tagcanvas.js" type="text/javascript"></script>

	<style type="text/css">
		.hidden {
			display: none;
		}

		.vertical-scroll {
			max-height: 600px;
			overflow-y: scroll;
		}

		.margin-top-7px {
			margin-top: 7px;
		}

		.th {
			height: 25px;
			width : 25px;
		}

		.tagFontStyle {
			font-weight: bold;
		}

	</style>
</head>
<body>

	<!-- Nav Bar -->
	<div class="row">
		<div class="large-12 columns">
			<h1>Min Kyong "Rachel" Song</h1>
			<hr />
		</div>
	</div>
	<!-- End Nav -->
 
 
	<!-- Main Page Content and Sidebar -->
	<div class="row">
 
	    <!-- Main Calendar content -->
		<div class="large-5 columns" role="content">
			<div id="myCanvasContainer">
				<canvas width="400" height="400" id="myCanvas">
				</canvas>
			</div>
			<div id="tags" class="tagFontStyle">
				<a href="#" id="smart">송똑똑</a>
				<a href="#" id="gambler">송타짜</a>
				<a href="#" id="madam">송여사</a>
				<a href="#" id="meeting">송미팅</a>
				<a href="#" id="ditcher">송파토</a>
				<a href="#" id="bully">송불량</a>
				<a href="#" id="uhggae">송어깨</a>
				<a href="#" id="shoulder">송숄더</a>
				<a href="#" id="late">송지각</a>
				<a href="#" id="rich">송갑부</a>
				<a href="#" id="friendzone">송밀당</a>
				<a href="#" id="shepherd">송목자</a>
			</div>
		</div>
		<!-- End Main Content -->

		<!-- Sidebar -->
	    <aside id="sidebar" class="large-6 columns vertical-scroll">

	 		<div class="row">
	 			<div class="small-6 large-10 columns">
					<h4>Definition</h4>
	 			</div>
	 		</div>
			<div class="panel">
				<h5 id="name"></h5>
				<h5 id="pronounciation"></h5>
				<div class="row">
					<div id="definition"class="large-12 columns">
						<p id="smart" class='hidden'>
							새누리 교회 전체가 인정하는 송민경 자매의 지식/지혜는 상상을 초월한다. 그 깊이와 넓이는 우리 자신으로 하여금 태평양
							한 가운데에서 헤엄치는 한 마리의 멸치 정도의 존재로 전락하게 만들어 버린다.
							<br />
							<br />
							이를 기리기 위하여 새누리 청년 공동체에서는 송민경 자매를 <strong>똑똑</strong>으로 지칭하기로 하였다.
						</p>

						<p id="gambler" class='hidden'>
							"민경아; 우리 재미로 포커 칠 껀데 올래?"
							<br />
							"어... 무슨 포커죠?"
							<br />
							<br />
							<strong>무슨 포커죠?</strong> 라는 질문은 널리 알려져 있는 "텍사스 홀덤" 포커밖에 모르는 범인들은 감히 던질 수 없는
							깊은 질문이다. 글쓴이는 송민경 자매가 혹시 "바둑이", "세븐포커", "하이로우" 등등의 종목들을 꿰차고 있는 지에 대한
							끝없는 고찰을 할 수 밖에 없었다.
							<br />
							<br />
							그 한없는 지혜와 끝없는 쿨함 덕분일까, 송민경 자매의 배짱 역시도 타의 추종을 불허한다. 어느샌가 자매 앞에 쌓여잇는
							자신의 포커 칩들을 보며 이겸손(25, 솔로, 익명) 씨는 "내가 이기고 있다고 생각했는데 사실은 농락당하고 있는 내 자신을
							발견했다" 라며 울분에 하늘을 쳐다보곤 했다.
						</p>

						<p id="madam" class='hidden'>
							귀찮다. 나중에 업데이트 해야지
						</p>

						<p id="meeting" class='hidden'>
							사람과의 인연을 중요시 하는 송민경 자매의 삶은 미팅으로 가득 차 있다.
						</p>

						<p id="ditcher" class='hidden'>
							송민경 자매의 영향력은 너무나도 강력하다. 혹시 어떤 일을 하고 싶거나 어딜 가고 싶은데 그의 정당성을 입증하려면
							그녀의 참여 의사를 물어보면 간단하다. 그녀의 지혜가 우리를 바른 길로 인도해 주기는 커녕 야 이건 솔직히 어떻게
							써야 할 지 모르겠다. 베가스나 가야지 어휴
						</p>

						<p id="bully" class='hidden'>
							ㅈㄱㄹ... 나중엔 스크린샷도 찍어야겠다.
						</p>

						<p id="uhggae" class='hidden'>
							송민경 자매의 자신의 어깨 사이즈에 대한 간증을 들은 후 청년공동체는 자매의 어깨 포텐셜에 감탄을 금치 못하여
							자매 어깨를 탁! 치곤 했다.
						</p>

						<p id="shoulder" class='hidden'>
							After listening to Sister Song's confession about the size of her shoulder, the whole community was awed
							by the infinite amount of potential witnessed of her shoulder.
						</p>

						<p id="late" class='hidden'>
							ㅈ...절대 내가 1시간 기다려서 삐져서 이런 거 만드는거 아니라능! 흥!
						</p>

						<p id="rich" class='hidden'>
							...이건 언제 나왔었지?
						</p>

						<p id="friendzone" class='hidden'>
							송민경 자매는 섭외하기가 매우 어려우므로 항상 미팅을 잡도록 합니다.
						</p>

						<p id="shepherd" class='hidden'>
							송민경 자매는 새누리 청년 공동체에서 "두번째로" 좋은 목자님이시다.
						</p>
					</div>
				</div>
			</div>
	 
	    </aside>
	    <!-- End Sidebar -->

	</div>

  <!-- End Main Content and Sidebar -->
 
 
  <!-- Footer -->
 
	<footer class="row">
		<div class="large-12 columns">
			<hr />
			<div class="row">
				<div class="large-6 columns">
					<p>&copy; Copyright by #WELOVERACHEL</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="lib/foundation/js/foundation.min.js"></script>
	<script>
		$(document).foundation();
		$(document).ready(function() {
			// Word bank
			var nickname_pron_bank = {
				'smart'		: '똑똑',
				'gambler'   : '탓:짜',
				'madam'     : '여사',
				'meeting'   : 'mee-ting',
				'ditcher'   : '팟:호',
				'bully'     : '불량',
				'uhggae'    : '억:개',
				'shoulder'  : 'shohl-der',
				'late'      : '지각',
				'rich'      : '가:뿌',
				'friendzone': '밀당',
				'shepherd'  : '목:자'
			};
			// Instantiate TagCanvas object
			$('#myCanvas').tagcanvas({
				textHeight		: 20,
				textColour		: '#2E9AFE',
				outlineColour	: '#F5A9F2',
				outlineThickness: 5,
				outlineOffset	: 1,
				outlineMethod	: "block",
				reverse			: true,
				maxSpeed		: 0.04,
				depth			: 0.95,
				pulsateTo		: 0.2,
				pulsateTime		: 0.75,
				decel			: 0.9,
				shadow			: '#ccf',
				shadowBlur		: 3,
				wheelZoom		: false
			}, 'tags');

			$('div#tags > a').click(function(e) {
				var $target  = $(e.target);
				var nickname = $target.attr('id');

				$('#name').html($target.text());
				$('#pronounciation').html('(송:' + nickname_pron_bank[nickname] + ')');
				$('#definition > p').hide();
				$('#definition').find('#' + nickname).show();
			});
		});
	</script>
</body>
</html>
