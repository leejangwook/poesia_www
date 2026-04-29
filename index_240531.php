<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Author" content="FUZ UI.DEV.">
	<meta name="Keywords" content="포에시아">
	<meta name="Description" content="가치있는 비즈니스를 만든다.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<title>포에시아 | AI 기술로 일상을 혁신 합니다.</title>
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	
   	<script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=clnznt1xqm" type="text/javascript"></script>
	<script>
		/* 스크롤이 설정한 높이 이상 내려갔을때 헤더고정 */
		if (jQuery(window).width() > 0) {
	    jQuery(window).on("scroll",function(ev){
	        if(jQuery(window).scrollTop() > 300) { /* 헤더가 고정 높이 지정 */
	            jQuery('#header').addClass('fixed');  /* 헤더 고정 높이 이상에서 .fixed 클래스를 추가  */
	        }
	        else{
				jQuery('#header').removeClass('fixed'); /* 헤더 고정 높이 이하에서 .fixed 클래스를 제거  */
				jQuery("nav a").removeClass("on");
	        }
	        return false;
	    });
		}
	
		/* 페이지내 Section 이동**/
		$(function(){
		   $('a[href^=#]').click(function() {
			  var speed = 500; /* 섹션 이동시 롤 스피드 */
			  var href= $(this).attr("href");
			  var target = $(href == "#" || href == "" ? 'html' : href);
			  //var position = target.offset().top;
			  var position = target.offset().top - 90; /* GNB 높이 계산 */
			  $('body,html').animate({scrollTop:position}, speed, 'swing');/* 섹션 이동시 효과 */
			  return false;
		   });
		});
		/* GNB 스크롤 이벤트 */
		$(window).on('scroll', function() {
			$('.section').each(function() {
				if($(window).scrollTop() + 90 >= $(this).offset().top) {
					var id = $(this).attr('id');
					$('nav a').removeClass('on');
					$('nav a[href=#'+ id +']').addClass('on');
				}
			});
		});
	</script>
</head>
<body>
<!-- Skip Navigation... -->
<div id="skipnavi"><a href="#contents">본문 바로가기</a></div>
<!-- //Skip Navigation -->

<div id="wrap">

	<!-- 해더 -->
	<div id="header">
		<div class="inner">
			<!-- GNB -->
			<div class="gnb">
				<a href="#intro"><h1>포에시아</h1></a>
				<nav>
					<ul id="menu">
						<li><a href="#products">PRODUCTS</a></li>
						<li><a href="#contact">SAY HELLO</a></li>
					</ul>
				</nav>
			</div>
			<!--// GNB -->
		</div>
	</div>
	<!--// 해더 -->

	<div id="intro" class="section intro">
		<div class="inner">
			<!-- 메인카피 -->
			<div class="main_copy">
				<h3 class="animated slideInLeft">AI기반의 서비스 / 엔진 / 솔루션 전문기업</h3>
				<p class="animated slideInUp">AI 기술로 일상을 혁신 합니다.</p>
			</div>
			<!--// 메인카피 -->
		</div>
	</div>

	<!-- PRODUCTS -->
	<div id="products" class="section products">
		<div class="inner">
			<div class="content right">
				<h3 class="blue">PRODUCTS</h3>
				<p>혁신적인 기술과 뛰어난 성능으로 비즈니스의 경쟁력을 한 단계 끌어올립니다.</p>
			</div>
			<ul class="products_portfolio">
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>음성인식(PoA-STT)</dt>
								<dd>- E2E 기반 자체보유 엔진</dd>
								<dd>- 90% 이상의 인식율</dd>
								<dd>- 4만5천시간 학습</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>챗봇(PoA-ChatBot)</dt>
								<dd>- 폐쇄망 자체 SLM</dd>
								<dd>- RAG 기반 시스템</dd>
								<dd>- 하이브리드 방식</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>녹취시스템(PoA-Record)</dt>
								<dd>- 자동 녹취</dd>
								<dd>- 정보보호 시스템 연동</dd>
								<dd>- 다양한 연동기능 제공</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>화자분리(PoA-ConvoSplit)</dt>
								<dd>- 편리한 관리기능</dd>
								<dd>- 현황 및 관제기능</dd>
								<dd>- 확장 용이</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>상담지원(PoA-Counsel Assist)</dt>
								<dd>- 실시간 상담지원</dd>
								<dd>- 상담후처리 지원</dd>
								<dd>- 자동평가 제공</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>메신저(PoA-Messenger)</dt>
								<dd>- 업무용 메신저</dd>
								<dd>- 사용하기 쉽고 직관적인 인터페이스</dd>
								<dd>- 다양한 기능 제공</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="list_slide_up">
						<figcaption>
							<div class="list_line"></div>
							<dl>
								<dt>정보보호(PoA-InfoGuard)</dt>
								<dd>- 다양한 보안 정책 적용</dd>
								<dd>- 실시간 모니터링</dd>
								<dd>- 시스템 연계 제공</dd>
							</dl>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
	</div>
	<!--// PRODUCTS -->


	<!-- CONTACT -->
	<div id="contact" class="section contact">
		<div class="inner">
			<div class="content">
				<h3>SAY HELLO</h3>
				<h5 class="tit_con">일상의 혁신을 함께 열어갈 파트너를 기다립니다.</h5>
				<ul class="contact_info">
					<li class="tel">02-3012-0302</li>
					<li class="fax">0303-3443-0302</li>
					<li class="email">
						제품문의: hello@smilewithpoesia.com</br>
						고객센터: help@smilewithpoesia.com</br>
						제휴문의: partnerships@smilewithpoesia.com
					</li>
				</ul>
				<h5 class="tit_con">Address</h5>
				<p class="addr">(05854) 서울특별시 송파구 법원로 128 SKV1 B동 420호</p>
			</div>
		</div>
	</div>
	<!--// CONTACT -->

	<!-- footer -->
	<div id="footer">
		<div class="inner">© 포에시아 Corp. All Rights Reserved.</div>
	</div>
	<!--// footer -->

</div>
</body>
</html>








