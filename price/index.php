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
							<span class="trans_wrap"><span class="trans_in">利用料金について</span></span>
						</h2>

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
			<h3 class="fadeup">今なら45分体験無料</h3>
			<p class="fadeup">セルフエステが今なら体験無料。<br>脱毛・痩身・フェイシャル・ホワイトニングから選べる！<br>MYTHELならではのトータルセルフエステを是非お試し下さい。</p>
			<div class="link white fadeup">
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
					<h2 class="kapital_t fadeup">PRICE</h2>
					<div class="type_b_shoplist fadeup">
						<!-- <ul>
							<li>京都烏丸店</li>
						</ul> -->
						<p>店舗によりメニュー・金額・導入機器は異なります。<br class="is_sp">詳しくは各店舗にお問い合わせくださいませ。</p>
					</div>
					<h3 class="sub_ttl fadeup">MONTHLY</h3>
					<p class="fadeup"><strong>月額利用料</strong></p>
				</div>
				<!-- 
				<div class="type_menu_tab fadeup">
					<ul>
						<li class="active">Aタイプ</li>
						<li>Bタイプ</li>
					</ul>
				</div> -->

				<div class="box monthly fadeup">
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
								<th>シルバー</th>
								<th>DayTime <span>Open〜15時まで</span><span>平日のみ利用可能</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">7,700<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">脱毛</span><br>
									<span class="txt">キャビテーション</span><br>
									<span class="txt">フェイシャル</span><br>
									<span class="txt">ホワイトニング</span>
								</td>
							</tr>
							<tr>
								<th>ゴールド</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">12,100<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">脱毛</span><br>
									<span class="txt">キャビテーション</span><br>
									<span class="txt">フェイシャル</span><br>
									<span class="txt">ホワイトニング</span>
								</td>
							</tr>

							<tr>
								<th>プラチナ</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">16,500<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">脱毛</span><br>
									<span class="txt">キャビテーション</span><br>
									<span class="txt">フェイシャル</span><br>
									<span class="txt">ホワイトニング</span><br>
									<span class="txt">セルバーン or MAGWAVE</span>
								</td>
							</tr>

							<tr>
								<th>ダイヤ<br class="is_tab">モンド</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">23,100<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">脱毛</span><br>
									<span class="txt">キャビテーション</span><br>
									<span class="txt">フェイシャル</span><br>
									<span class="txt">ホワイトニング</span><br>
									<span class="txt">MAGWAVE</span><br>
									<span class="txt">セルバーン</span>
								</td>
							</tr>

							<tr>
								<th>ホリデー<br class="is_tab">プラン</th>
								<th>AllTime <span>Open〜最終受付まで</span><span>土日祝のみ利用可能</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">12,100<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">脱毛</span><br>
									<span class="txt">キャビテーション</span><br>
									<span class="txt">フェイシャル</span><br>
									<span class="txt">ホワイトニング</span><br>
									<span class="txt">MAGWAVE</span><br>
									<span class="txt">セルバーン</span>
								</td>
							</tr>

							<tr>
								<th>セルバーン<br class="is_tab">プラン</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">12,100<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">※セルバーン</span><br>
									<span class="txt">使い放題</span>
								</td>
							</tr>

							<tr>
								<th>MAGWAVE<br class="is_tab">プラン</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">14,300<span class="middle">円(税込)</span></td>
								<td class="facility_contents">
									<span class="txt">※MAGWAVE</span><br>
									<span class="txt">使い放題</span>
								</td>
							</tr>

						</tbody>
					</table>
					<div class="scrollable is_sp">
						<i class="far fa-hand-point-up"></i>
						<span>スクロールできます</span>
					</div>
				</div>

				<!-- <div class="box monthly hide">
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
								<td class="purple">6,578<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>
							<tr>
								<th>Gold</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">10,978<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Silver Plus</th>
								<th>DayTime <span>Open〜15時までに入店</span><span>平日のみ利用可能</span></th>
								<td>75<span class="small">min</span></td>
								<td class="purple">14,080<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Gold Plus</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>75<span class="small">min</span></td>
								<td class="purple">18,480<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

							<tr>
								<th>Plutinum</th>
								<th>AllTime <span>Open〜最終受付まで</span></th>
								<td>100<span class="small">min</span></td>
								<td class="purple">21,780<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>

						</tbody>
					</table>
					<div class="scrollable is_sp">
						<i class="far fa-hand-point-up"></i>
						<span>スクロールできます</span>
					</div>
				</div> -->
			</div>


			<div class="price03_in">
				<div class="ttl">
					<h3 class="sub_ttl fadeup">VISITOR</h3>
					<p class="fadeup"><strong>都度払い料金</strong></p>
				</div>
				<div class="box fadeup">
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
								<th>AllTime <span>Open〜最終受付までに入店</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">4,400<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr>
							<!-- <tr>
								<th>NightTime <span>15時〜最終受付まで</span></th>
								<td>45<span class="small">min</span></td>
								<td class="purple">6,600<span class="middle">円(税込)</span></td>
								<td><span class="txt">全てのマシン</span></td>
							</tr> -->

						</tbody>
					</table>

					<div class="scrollable is_sp">
						<i class="far fa-hand-point-up"></i>
						<span>スクロールできます</span>
					</div>
				</div>
			</div>
			<div class="link purple fadeup"><a href="<?php echo $dir; ?>salonlist/">無料体験のお申込み ▶︎</a></div>
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