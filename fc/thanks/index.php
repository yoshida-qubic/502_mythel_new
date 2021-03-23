<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$root = str_replace('fc/', '', $root);
$dir = '../../';
$imgDir = '../../images/fc/';
$meta_ttl = 'FC個別説明会へのお申し込みありがとうございます | ';
include($root . "/include/header.php");
?>





<main>
	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ thanks01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="thanks01">
		<div class="lower_ttl">
			<h1 class="ttl_in">THANKS</h1>
		</div>

		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="img"><img src="<?php echo $imgDir; ?>fc01_mv.png"></div>
					<div class="txt">
						<h2>FC個別説明会へのお申込み<br>ありがとうございます。</h2>
						<p>返信メールをお送りいたしましたので、ご確認お願いします。<br class="is_pc">担当者より、2営業日以内に返信いたします。
						</p>
					</div>
				</div>
			</div>

		</div>


		
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ thanks01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

</main>


<?php include($root . "/include/footer.php"); ?>