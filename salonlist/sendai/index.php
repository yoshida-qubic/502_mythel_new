<?php
include("info.php");
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$root = str_replace('salonlist/', '', $root);
$dir = '../../';
$imgDir = '../../images/salon/' . $slug . '/';
$meta_ttl = $salonname . ' - ' . $area.' | ';
include($root . "/include/header.php");
?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロン01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="salon01">
		<div class="lower_ttl">
			<p class="ttl_in">SALONLIST</p>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロン01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロン02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<div class="salon02">
		<div class="container">
			<div class="box">
				<p>SALON</p>
				<h1><?php echo $salonname; ?></h1>

				<dl>
					<dt>営業時間：</dt>
					<dd><?php echo $buisiness_hours; ?></dd>
				</dl>
				
				<dl>
					<dt>定休日：</dt>
					<dd><?php echo $holiday; ?></dd>
				</dl>

				<dl>
					<dt>所在地：</dt>
					<dd><?php echo $address; ?></dd>
				</dl>

				<dl>
					<dt>アクセス：</dt>
					<dd><?php echo $access; ?></dd>
				</dl>

				<dl>
					<dt>施術ROOM：</dt>
					<dd><?php echo $room_number; ?>部屋</dd>
				</dl>

				<dl>
					<dt>MACHINE：</dt>
					<dd><?php echo $machine; ?></dd>
				</dl>

				<dl>
					<dt>TEL：</dt>
					<dd><?php echo $tel; ?></dd>
				</dl>


				<div class="slider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo $imgDir; ?>slider01.jpg">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo $imgDir; ?>slider02.jpg">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo $imgDir; ?>slider03.jpg">
							</div>

							<div class="swiper-slide">
								<img src="<?php echo $imgDir; ?>slider04.jpg">
							</div>
						</div>
					</div>
				</div>

				<script>
					window.onload = function() {
						let mySwiper = new Swiper('.swiper-container', {
							loop: true,
							slidesPerView: 4,
							spaceBetween: 20,
							// autoplay: {
							// 	delay: 6000,
							// },
							slideActiveClass: 'active',
							speed: 800,
							simulateTouch: false,
							breakpoints: {
								767: {
									slidesPerView: 2,
									spaceBetween: 10,
									autoplay: {
										delay: 6000,
									},
								}
							}
						});
					}
				</script>

				<div class="bottom">
					<div class="map">
						<?php echo $map; ?>
					</div>
					<div class="cta_zone">
						<div class="link purple is_sp"><a href="tel:<?php echo $tel_tag; ?>"><i class="far fa-mobile-android"></i> <?php echo $tel; ?></a></div>
						<div class="link purple"><a href="<?php echo $map_link; ?>" target="_blank">GoogleMap</a></div>
						<div class="link purple"><a href="<?php echo $reserved; ?>" target="_blank"><?php echo $salonname; ?>の予約はこちら ▶︎</a></div>
						<!-- <div class="link notice"><a><?php echo $schedule; ?>OPEN予定</a></div> -->
					</div>
				</div>
			</div>

		</div>


	</div>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロン02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロン03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="salon03">
		<div class="container">
			<div class="box">
				<div class="img">
					<img src="../../images/salon/salon03_img.png">
				</div>
				<div class="txt">
					<h2>TRIAL</h2>
					<h3>初回体験無料</h3>
					<p>最先端のトータルビューティーマシンを使い放題<br>
						脱毛・痩身・フェイシャル・ホワイトニング・ネイルが使い放題<br>
						さらに当日の入会申込で入会金・事務手数料無料！<br>
						さらにコロナ抗体検査キット or カーブシートをプレゼント！<br>
						まずは店舗でお試し下さい。
					</p>
				</div>
			</div>

		</div>

	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロン03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->









</main>


<?php include($root . "/include/footer.php"); ?>