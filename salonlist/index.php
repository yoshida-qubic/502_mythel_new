<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/salonlist/';
$meta_ttl = 'SALONLIST - サロン選択 | ';
include($root . "/include/header.php");

?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロンリスト01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="salonlist01">
		<div class="lower_ttl">
			<h1 class="ttl_in">SALONLIST</h1>
		</div>
		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="img"><img src="<?php echo $imgDir; ?>salonlist01_mv.png"></div>
					<div class="txt">
						<h2><span class="trans_wrap"><span class="trans_in">MYTHELの</span></span><br class="is_pc"><span class="trans_wrap"><span class="trans_in">全国店舗の紹介</span></span></h2>
						<p><span class="trans_wrap"><span class="trans_in">下記より体験したい店舗をお選び頂き</span></span><br>
							<span class="trans_wrap"><span class="trans_in">ご希望の日時・基本情報を入力して、</span></span><br>
							<span class="trans_wrap"><span class="trans_in">体験予約を行ってください。</span></span>
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロンリスト01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロンリスト02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<div class="salonlist02">

		<div class="container">
			<div class="box">
				<a href="#area01">北海道</a>
				<a href="#area02">東北</a>
				<a href="#area03">関東</a>
				<!-- <a href="#area04">甲信越</a> -->
				<a href="#area05">東海</a>
				<a href="#area06">関西</a>
				<!-- <a href="#area07">中国・四国</a> -->
				<a href="#area08">九州・沖縄</a>
			</div>
		</div>
	</div>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロンリスト02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロンリスト03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="salonlist03">
		<div class="container">

			<div class="box" id="area01">
				<h3>北海道エリア</h3>

				<!-- 札幌店 -->
				<?php include("./sapporo/info.php"); ?>
				<?php include("./template_notice.php"); ?>
				<!-- 札幌店 -->



			</div>

			<div class="box" id="area02">
				<h3>東北エリア</h3>

				<!-- 仙台駅前店 -->
				<?php include("./sendai/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 仙台駅前店 -->

			</div>


			<div class="box" id="area03">
				<h3>関東エリア</h3>

				<!-- 水戸店 -->
				<?php include("./mito/info.php"); ?>
				<?php include("./template_notice.php"); ?>
				<!-- 水戸店 -->

			</div>





			<div class="box" id="area05">
				<h3>東海エリア</h3>




				<!-- 栄店 -->
				<?php include("./sakae/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 栄店 -->




			</div>




			<div class="box" id="area06">
				<h3>関西エリア</h3>

				<!-- 京都烏丸店 -->
				<?php include("./kyotokarasuma/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 京都烏丸店 -->
				<div class="bottom">
					<p>※京都烏丸店と西院店で入会の方はどちらの店舗でもご使用頂けます。</p>
				</div>


				<!-- MENS京都西院店 -->
				<?php include("./kyotosaiin/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- MENS京都西院店 -->
				<div class="bottom">
					<p>※京都烏丸店と西院店で入会の方はどちらの店舗でもご使用頂けます。</p>
				</div>

			


				<!-- 豊中駅前店 -->
				<?php include("./toyonaka/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 豊中駅前店 -->


			</div>



			<div class="box" id="area08">
				<h3>九州・沖縄エリア</h3>

				<!-- 札幌店 -->
				<?php include("./ogurakita/info.php"); ?>
				<?php include("./template_notice.php"); ?>
				<!-- 札幌店 -->



			</div>







		</div>
	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロンリスト03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->






	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ トップ06 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="top06">

		<h2 class="sub_ttl">TRIAL</h2>
		<h3>初回無料体験</h3>
		<p>お近くの店舗を選択してください。<br>店舗ごとにご予約可能です。</p>
		<div class="link purple">
			<a href="<?php echo $dir; ?>salonlist/">RESERVED</a>
		</div>

	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ トップ06 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->



</main>


<?php include($root . "/include/footer.php"); ?>