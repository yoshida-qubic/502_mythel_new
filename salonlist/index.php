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
				<!-- <a href="#area01">北海道</a> -->
				<a href="#area02">東北</a>
				<a href="#area03">関東</a>
				<a href="#area04">北陸・甲信越</a>
				<a href="#area05">東海</a>
				<a href="#area06">関西</a>
				<a href="#area07">中国・四国</a>
				<a href="#area08">九州・沖縄</a>
				<!-- <a href="#area09">OPEN予定</a> -->
			</div>
		</div>
	</div>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ サロンリスト02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ サロンリスト03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="salonlist03">
		<div class="container">

			<!-- <div class="box" id="area01"> -->
			<!-- <h3>北海道エリア</h3> -->

			<!-- 札幌店 -->
			<!-- 2022/06/03 削除 -->
			<?php //include("./sapporo/info.php"); 
			?>
			<?php //include("./template.php"); 
			?>
			<!-- 札幌店 -->



			<!-- </div> -->

			<div class="box" id="area02">
				<h3>東北エリア</h3>

				<!-- 仙台駅前店 -->
				<!-- 2022/06/03 削除 -->
				<?php //include("./sendai/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 仙台駅前店 -->


				<!-- 仙台国分町店 -->
				<!-- 2022/03/01 削除 -->
				<?php //include("./sendaikokubuncho/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 仙台国分町店 -->

				<!-- 盛岡菜園店 -->
				<?php include("./morioka_saien/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 盛岡菜園店 -->

			</div>

			<div class="box" id="area03">
				<h3>関東エリア</h3>

				<!-- キュープラザ原宿店 -->
				<?php include("./qplaza_harajyuku/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- キュープラザ原宿店-->

				<!-- モザイクモール港北店 -->
				<!-- 2022/08/04 削除 -->
				<?php //include("./mosaicmall_kouhoku/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- モザイクモール港北店 -->

				<!-- トレッサ横浜店 -->
				<?php include("./tressa_yokohama/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- トレッサ横浜店-->

				<!-- ドン・キホーテ二俣川店 -->
				<?php include("./donki_futamatagawa/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- ドン・キホーテ二俣川店 -->

				<!-- 鹿島店 -->
				<?php include("./kashima/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 鹿島店 -->

				<!-- 水戸店 -->
				<!-- 2022/01/31 削除 -->
				<?php //include("./mito/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 水戸店 -->

				<!-- ひたちの店 -->
				<!-- 2022/06/03 削除 -->
				<?php //include("./hitachino/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- ひたちの店 -->
			</div>

			<div class="box" id="area04">
				<h3>北陸・甲信越エリア</h3>

				<!-- イオンモール白山店 -->
				<?php include("./aeonmall_hakusan/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- イオンモール白山店 -->

				<!-- ながの東急百貨店内 -->
				<!-- 2022/06/03 削除 -->
				<?php //include("./nagano_tokyu/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- ながの東急百貨店内 -->
			</div>

			<div class="box" id="area05">
				<h3>東海エリア</h3>




				<!-- 栄店 -->
				<!-- 2022/03/01 削除 -->
				<?php //include("./sakae/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 栄店 -->

				<!-- 星ヶ丘店 -->
				<?php include("./hoshigaoka/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 星ヶ丘店 -->

				<!-- イオン三好店 -->
				<?php include("./aeon_miyoshi/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- イオン三好店 -->

				<!-- イーアス春日井店 -->
				<?php include("./iias_kasugai/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- イーアス春日井店 -->

				<!-- mozoワンダーシティ店 -->
				<?php include("./mozo_wondercity/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- mozoワンダーシティ店 -->

				<!-- MEGAドン・キホーテ豊橋店 -->
				<?php include("./megadonki_toyohashi/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- MEGAドン・キホーテ豊橋店 -->

				<!-- 新静岡セノバ店 -->
				<!-- 2022/06/03 削除 -->
				<?php //include("./shinshizuoka_cenova/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 新静岡セノバ店-->


				<!-- モレラ岐阜店 -->
				<?php include("./malera_gifu/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- モレラ岐阜店 -->




			</div>




			<div class="box" id="area06">
				<h3>関西エリア</h3>

				<!-- あべのキューズモール店 -->
				<?php include("./abeno_qs_mall/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- あべのキューズモール店-->

				<!-- 豊中駅前店 2022/03/01 削除-->
				<?php //include("./toyonaka/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 豊中駅前店 -->

				<!-- アリオ鳳 2022/01/31削除 -->
				<?php //include("./ario_otori/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- アリオ鳳 -->

				<!-- アルザ泉大津店 -->
				<?php include("./alzar_izumiotsu/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- アルザ泉大津店 -->

				<!-- 守口店 -->
				<?php include("./moriguchi/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 守口店 -->

				<!-- 枚方店 2022/12/6削除 -->
				<?php //include("./hirakata/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 枚方店 -->

				<!-- ららぽーと堺店 -->
				<?php include("./lalaport_sakai/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- ららぽーと堺店 -->

				<!-- あまがさきキューズモール店 -->
				<?php include("./amagasaki_qs_mall/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- あまがさきキューズモール店 -->

				<!-- 京都烏丸店 2023/1/6削除 -->
				<?php //include("./kyotokarasuma/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 京都烏丸店 -->

				<!-- 阪急東向日駅前店 -->
				<?php include("./higashi_muko_ekimae/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 阪急東向日駅前店 -->

				<!-- MENS京都西院店 2022/02/01削除 -->
				<?php //include("./kyotosaiin/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- MENS京都西院店 -->
				<!-- <div class="bottom"> -->
				<!-- <p>※京都烏丸店と西院店で入会の方はどちらの店舗でもご使用頂けます。</p> -->
				<!-- </div> -->


			</div>



			<div class="box" id="area07">
				<h3>中国・四国エリア</h3>

				<!-- 島根出雲店 -->
				<?php include("./shimane_izumo/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 島根出雲店 -->



			</div>



			<div class="box" id="area08">
				<h3>九州・沖縄エリア</h3>

				<!-- 小倉南守恒店 -->
				<!-- 2022/11/08 削除 -->
				<?php //include("./kokuraminami_moritsune/info.php"); 
				?>
				<?php //include("./template.php"); 
				?>
				<!-- 小倉南守恒店 -->

				<!-- 山鹿店 -->
				<?php include("./yamaga/info.php"); ?>
				<?php include("./template.php"); ?>
				<!-- 山鹿店 -->



			</div>



			<!-- <div class="box" id="area09">
				<h3>OPEN予定</h3>

				<div class="item openplans">
					<div class="inner">
						<h4>北海道エリア</h4>
						<p>札幌3店舗</p>
						<h4>東北エリア</h4>
						<p>青森1店舗、仙台3店舗、山形1店舗</p>
						<h4>関東エリア</h4>
						<p>東京5店舗、横浜2店舗、茨城4店舗、埼玉1店舗、群馬1店舗</p>
						<h4>甲信越エリア</h4>
						<p>新潟2店舗、金沢1店舗</p>
						<h4>東海エリア</h4>
						<p>静岡2店舗、名古屋5店舗、岐阜1店舗</p>
						<h4>関西エリア</h4>
						<p>京都3店舗、大阪3店舗</p>
						<h4>中国・四国エリア</h4>
						<p>広島1店舗、岡山1店舗、愛媛1店舗</p>
						<h4>九州・沖縄エリア</h4>
						<p>博多2店舗、小倉2店舗、鹿児島1店舗、宮崎1店舗、長崎1店舗</p>
						</h4>
					</div>
					<div class="link notice">
						<a>OPEN予定</a>
					</div>
				</div>



			</div> -->







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