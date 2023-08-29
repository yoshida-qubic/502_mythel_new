<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/fc/';
$meta_ttl = '全国FC加盟店募集中！ | ';
include($root . "/include/header.php");

?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ fc01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="fc01">
		<div class="lower_ttl">
			<h1 class="ttl_in">全国FC加盟店募集中！</h1>
		</div>
		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="img"><img src="<?php echo $imgDir; ?>fc01_mv.png"></div>
					<div class="txt">
						<h2><span class="trans_wrap"><span class="trans_in">MYTHEL </span></span><br class="is_pc"><span class="trans_wrap"><span class="trans_in">FC加盟店募集中</span></span></h2>
						<p><span class="trans_wrap"><span class="trans_in">現在の事業以外に新規事業を探しているが、<br class="is_sp">悩んでいる。</span></span><br class="is_pc">
							<span class="trans_wrap"><span class="trans_in">これから事業を立ち上げたい方。</span></span><br>
							<span class="trans_wrap"><span class="trans_in">大募集中です。</span></span><br class="is_pc">
							<span class="trans_wrap"><span class="trans_in">まずはお問い合わせください。</span></span>
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ fc01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ fc02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<div class="fc02">

		<div class="container">
			<div class="link white">
				<a href="#contact">個別説明会申込 ▶︎</a>
			</div>
		</div>
	</div>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ fc02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ fc03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="fc03">
		<div class="container">

			<div class="box fadeup">
				<h2>MYTEHL FCのコンセプト</h2>
				<div class="item">
					<p class="number">POINT<br>1</p>
					<h3>プロの美容マシン使い放題</h3>
					<p>セルフエステとはお客様がご自身で行うエステです。応援するスタッフはできる限り近い距離でお客様に接して
						親近感のあるお店作りを目指します。</p>
				</div>

				<div class="item">
					<p class="number">POINT<br>2</p>
					<h3>お客様への丁寧な接客</h3>
					<p>丁寧・親身な接客×適切なプラン提案により効果を出せるような店舗づくりを目指しています。</p>
				</div>

				<div class="item">
					<p class="number">POINT<br>3</p>
					<h3>業界一の低価格とトータルセルフエステで通い放題</h3>
					<p>当社では幅広いお客様が安心して通えるサービスを追求しております。</p>
				</div>

				<div class="item">
					<p class="number">POINT<br>4</p>
					<h3>広告・集客を全力でサポート</h3>
					<p>SNS・CM・WEB広告など店舗運営から集客までFC加盟店様を全力でサポート致します。</p>
				</div>

			</div>

		</div>
	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ fc03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ fc04 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="fc04" id="contact">
		<div class="container">
			<div class="box">
				<h2>個別説明会問い合わせ</h2>
				<p>「MYTHEL FC」に興味をお持ちいただきありがとうございます。<br>
					お問い合わせいただきました内容は、弊社の掲げる個人情報保護方針に沿って管理し、お客様の同意なく第三者に開示・提供することはございません。<br>
					詳細につきましては、当サイトの「プライバシーポリシー」をご参照ください。</p>

				<!-- フォームから問い合わせ送信 -->
				<!-- <p><span class="red">*</span>は必須項目です。</p> -->
				<!-- <form action="mail.php" method="post" name="form1" id="contact_form">
					<div class="form_wrap">

						<div class="input_wrap">
							<div class="item">お名前<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="user" id="user" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">フリガナ<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="user_kana" id="user_kana" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">郵便番号<span class="red">*</div>
							<div class="input">
								<input type="text" name="zip1" id="zip1" maxlength="8">
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">都道府県<span class="red">*</div>
							<div class="input">
								<input type="text" name="pref1" id="pref1" required>
							</div> 
						</div>

						<div class="input_wrap">
							<div class="item">市区町村<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="addr1" id="addr1" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">番地<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="addr2" id="addr2" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">建物名</div>
							<div class="input">
								<input type="text" name="addr3" id="addr3">
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">電話番号<span class="red">*</span></div>
							<div class="input">
								<input type="tel" name="tel" id="tel" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">メールアドレス<span class="red">*</span></div>
							<div class="input">
								<input type="email" name="email" id="email" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">種別<span class="red">*</span></div>
							<div class="radio">
								<label class="label02"><input type="radio" name="type" id="type1" value="個人" checked><span>個人</span></label>
								<label class="label02"><input type="radio" name="type" id="type2" value="法人"><span>法人</span></label>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">開業予定資金<span class="red">*</div>
							<div class="select02">
								<select name="opening_fund" id="opening_fund" required>
									<option value="300~500万円">300~500万円</option>
									<option value="500~700万円">500~700万円</option>
									<option value="501〜1,000万円">700〜1,000万円</option>
									<option value="1,000万円以上">1,000〜1,500万円</option>
								</select>
								<span class="icon"><i class="far fa-angle-down"></i></span>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">開業予定時期<span class="red">*</div>
							<div class="select02">
								<select name="opening_time" id="opening_time" required>
									<option value="3ヶ月以内">3ヶ月以内</option>
									<option value="6ヶ月以内">6ヶ月以内</option>
									<option value="1年以内">1年以内</option>
									<option value="3年以内">3年以内</option>
									<option value="5年以内">5年以内</option>
									<option value="まだ決めていない">まだ決めていない</option>
								</select>
								<span class="icon"><i class="far fa-angle-down"></i></span>
							</div>
						</div>


						<div class="inner">
							<input type="checkbox" name="agree02" id="j13" value="チェック済み" class="ichk" required>
							<label for="j13">当社の個人情報取り扱いについて同意します。</label>
						</div>





						<div class="submit_btn">
							<input type="submit" class="submit_btn" value="送信する">
						</div>
				</form> -->

				<!-- mailerから問い合わせ送信 -->
				<div class="submit_btn">
					<a href="mailto:info@tree-co.net?subject=%E3%80%8CMYTHEL%20FC%E3%80%8D%E5%80%8B%E5%88%A5%E8%AA%AC%E6%98%8E%E4%BC%9A%E7%9B%B8%E8%AB%87&
					body=%E3%80%8CMYTHEL%20FC%E3%80%8D%E3%81%AE%E5%80%8B%E5%88%A5%E8%AA%AC%E6%98%8E%E4%BC%9A%E7%9B%B8%E8%AB%87%E3%81%AB%E3%80%81%E4%BB%A5%E4%B8%8B%E3%81%AE%E5%86%85%E5%AE%B9%E3%81%A7%E7%94%B3%E8%BE%BC%E3%81%BF%E3%81%BE%E3%81%99%E3%80%82%0D%0A%0D%0A%E3%80%90%E5%85%A5%E5%8A%9B%E5%89%8D%E3%81%AB%E3%81%94%E7%A2%BA%E8%AA%8D%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%91%0D%0A%E3%80%8C%E7%A8%AE%E5%88%A5%E3%80%8D%E3%80%8C%E9%96%8B%E6%A5%AD%E4%BA%88%E5%AE%9A%E8%B3%87%E9%87%91%E3%80%8D%E3%80%8C%E9%96%8B%E6%A5%AD%E4%BA%88%E5%AE%9A%E6%99%82%E6%9C%9F%E3%80%8D%E3%81%AB%E3%81%A4%E3%81%84%E3%81%A6%E3%81%AF%E3%80%81%0D%0A%E9%81%B8%E6%8A%9E%E3%81%95%E3%82%8C%E3%81%9F%E7%95%AA%E5%8F%B7%E4%BB%A5%E5%A4%96%E3%82%92%E5%89%8A%E9%99%A4%E3%81%97%E3%81%A6%E3%81%84%E3%81%9F%E3%81%A0%E3%81%8D%E3%81%BE%E3%81%99%E3%82%88%E3%81%86%E3%81%8A%E9%A1%98%E3%81%84%E3%81%84%E3%81%9F%E3%81%97%E3%81%BE%E3%81%99%E3%80%82%0D%0A%0D%0A%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%0D%0A%E3%81%8A%E5%90%8D%E5%89%8D%EF%BC%9A%0D%0A%E3%83%95%E3%83%AA%E3%82%AC%E3%83%8A%EF%BC%9A%0D%0A%E9%83%B5%E4%BE%BF%E7%95%AA%E5%8F%B7%EF%BC%9A%E3%80%92%0D%0A%E9%83%BD%E9%81%93%E5%BA%9C%E7%9C%8C%EF%BC%9A%0D%0A%E5%B8%82%E5%8C%BA%E7%94%BA%E6%9D%91%EF%BC%9A%0D%0A%E7%95%AA%E5%9C%B0%EF%BC%9A%0D%0A%E5%BB%BA%E7%89%A9%E5%90%8D%EF%BC%9A%0D%0A%E9%9B%BB%E8%A9%B1%E7%95%AA%E5%8F%B7%EF%BC%9A%0D%0A%E3%83%A1%E3%83%BC%E3%83%AB%E3%82%A2%E3%83%89%E3%83%AC%E3%82%B9%EF%BC%9A%0D%0A%E7%A8%AE%E5%88%A5%EF%BC%9A%E2%91%A0%E5%80%8B%E4%BA%BA%E3%80%80%E2%91%A1%E6%B3%95%E4%BA%BA%0D%0A%E9%96%8B%E6%A5%AD%E4%BA%88%E5%AE%9A%E8%B3%87%E9%87%91%EF%BC%9A%E2%91%A0500%E3%80%9C700%E4%B8%87%E5%86%86%E3%80%80%E2%91%A1700%E3%80%9C1%2C000%E4%B8%87%E5%86%86%E3%80%80%E2%91%A21%2C000%E3%80%9C1%2C500%E4%B8%87%E5%86%86%0D%0A%E9%96%8B%E6%A5%AD%E4%BA%88%E5%AE%9A%E6%99%82%E6%9C%9F%EF%BC%9A%E2%91%A03%E3%83%B6%E6%9C%88%E4%BB%A5%E5%86%85%E3%80%80%E2%91%A16%E3%83%B6%E6%9C%88%E4%BB%A5%E5%86%85%E3%80%80%E2%91%A21%E5%B9%B4%E4%BB%A5%E5%86%85%E3%80%80%E2%91%A33%E5%B9%B4%E4%BB%A5%E5%86%85%E3%80%80%E2%91%A45%E5%B9%B4%E4%BB%A5%E5%86%85%E3%80%80%E2%91%A5%E3%81%BE%E3%81%A0%E6%B1%BA%E3%82%81%E3%81%A6%E3%81%84%E3%81%AA%E3%81%84%0D%0A%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%EF%BC%9D%0D%0A%0D%0A%E4%B8%8A%E8%A8%98%E3%81%AB%E5%85%A5%E5%8A%9B%E3%81%97%E3%81%A6%E9%80%81%E4%BF%A1%E3%81%97%E3%81%A6%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%82%0D%0A%E7%A2%BA%E8%AA%8D%E5%BE%8C%E3%80%81%E6%8B%85%E5%BD%93%E8%80%85%E3%82%88%E3%82%8A%E8%AA%AC%E6%98%8E%E4%BC%9A%E6%97%A5%E6%99%82%E3%81%AB%E3%81%A4%E3%81%84%E3%81%A6%E3%81%AE%E3%81%94%E9%80%A3%E7%B5%A1%E3%82%92%E3%81%95%E3%81%9B%E3%81%A6%E3%81%84%E3%81%9F%E3%81%A0%E3%81%8D%E3%81%BE%E3%81%99%E3%80%82">問い合わせる</a>
				</div>

			</div>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ fc04 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->








</main>


<?php include($root . "/include/footer.php"); ?>