<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/price/';
$meta_ttl = 'PRICE - 利用料金 | ';
include($root . "/include/header.php");

?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ プライス01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="price01">
		<div class="lower_ttl">
			<h1 class="ttl_in">PRICE</h1>
		</div>
		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="txt">
						<h2><span class="trans_wrap"><span class="trans_in">MYTHELの</span></span><br>
							<span class="trans_wrap"><span class="trans_in">利用料金について</span></span></h2>

						<p><span class="trans_wrap"><span class="trans_in">MYTHEL（ミセル）ではお客様ひとり一人に合わせて選べるコースをご用意しております。</span></span>
						</p>
					</div>
					<div class="img"><img src="<?php echo $imgDir; ?>price01_mv.png"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ プライス01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ プライス02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="top04 price02">
		<div class="container">
			<h3>今なら45分体験無料</h3>
			<p>月額5,980円のセルフエステが今なら体験無料。<br>脱毛・痩身・フェイシャル・ホワイトニングから選べる！<br>MYTHELならではのトータルセルフエステを是非お試し下さい。</p>
			<div class="link white">
				<a href="<?php echo $dir; ?>salonlist/">無料体験のお申込み ▶︎</a>
			</div>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ プライス02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ プライス03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="price03">
		<div class="container">
			<div class="price03_in">
				<div class="ttl">
					<h2 class="kapital_t">PRICE</h2>
					<h3 class="sub_ttl">VISITOR</h3>
					<p><strong>都度払い料金</strong></p>
				</div>
				<div class="box">
					<table>
						<thead>
							<tr>
								<th class="left">利用可能時間</th>
								<th>分数</th>
								<th>金額</th>
								<th>施術内容</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>DayTime <span>Open〜15時までに入店</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">4,000<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>
							<tr>
								<th>NightTime <span>15時〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">6,000<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

						</tbody>
					</table>

					<div class="scrollable is_sp">
						<i class="far fa-hand-point-up"></i>
						<span>スクロールできます</span>
					</div>
				</div>
			</div>
			<div class="price03_in">
				<div class="ttl">
					<h2 class="kapital_t">PRICE</h2>
					<h3 class="sub_ttl">MONTHLY</h3>
					<p><strong>月額利用料</strong></p>
				</div>
				<div class="box">
					<table>
						<thead>
							<tr>
								<th>会員コース</th>
								<th>利用可能時間</th>
								<th>分数</th>
								<th>金額</th>
								<th>施術内容</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Silver</th>
								<th>DayTime <span>Open〜15時までに入店</span><span>平日のみ利用可能</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">5,980<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>
							<tr>
								<th>Gold</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">9,980<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Silver Plus</th>
								<th>DayTime <span>Open〜15時までに入店</span><span>平日のみ利用可能</span></th>
								<td>75<span class="small">min</span></td>
								<td class="purple">12,800<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Gold Plus</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>75<span class="small">min</span></td>
								<td class="purple">16,800<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Plutinum</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>75<span class="small">min</span></td>
								<td class="purple">19,800<span class="middle">円(税別)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

						</tbody>
					</table>
					<div class="scrollable is_sp">
						<i class="far fa-hand-point-up"></i>
						<span>スクロールできます</span>
					</div>
				</div>
			</div>
			<div class="link purple"><a href="<?php echo $dir; ?>salonlist/">無料体験のお申込み ▶︎</a></div>
		</div>
	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ プライス03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->









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