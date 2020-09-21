<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/fc/';
$meta_ttl = 'FC - FC加盟について | ';
include($root . "/include/header.php");

?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ fc01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="fc01">
		<div class="lower_ttl">
			<h1 class="ttl_in">FC</h1>
		</div>
		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="img"><img src="<?php echo $imgDir; ?>fc01_mv.png"></div>
					<div class="txt">
						<h2>MYTHEL <br class="is_pc">FC加盟店募集中</h2>
						<p>現在の事業以外に新規事業を探しているが、悩んでいる。<br class="is_pc">これから事業を立ち上げたい方。<br>大募集中です。<br class="is_pc">まずはお問い合わせください。
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

			<div class="box">
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
				<h2>個別説明会申込</h2>
				<p>「MYTHEL FC」に興味をお持ちいただきありがとうございます。<br>
					お問い合わせいただきました内容は、弊社の掲げる個人情報保護方針に沿って管理し、お客様の同意なく第三者に開示・提供することはございません。<br>
					詳細につきましては、当サイトの「プライバシーポリシー」をご参照ください。</p>
				<p><span class="red">*</span>は必須項目です。</p>
				<form action="mail.php" method="post" name="form1" id="contact_form">
					<div class="form_wrap">

						<div class="input_wrap">

							<div class="item">御社名<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="comp_name" id="comp_name" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">ご担当者様名<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="user" id="user" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">ふりがな<span class="red">*</span></div>
							<div class="input">
								<input type="text" name="user_kana" id="user_kana" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">メールアドレス<span class="red">*</span></div>
							<div class="input">
								<input type="email" name="email" id="email" required>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">電話番号<span class="red">*</span></div>
							<div class="input">
								<input type="tel" name="tel" id="tel" required>
							</div>
						</div>



						<div class="input_wrap">
							<div class="select">
								<label for="date01">説明会希望日1</label>
								<label class="cal"><input type="text" cmanCLDat="USE:ON,FORM:3" name="date01" id="date01" class="form_date"><span class="icon"><i class="far fa-calendar-alt"></i></span></label>
							</div>
						</div>

						<div class="input_wrap">
							<div class="select">
								<label for="date02">説明会希望日2</label>
								<label class="cal"><input type="text" cmanCLDat="USE:ON,FORM:3" name="date02" id="date02" class="form_date"><span class="icon"><i class="far fa-calendar-alt"></i></span></label>
							</div>
						</div>

						<div class="input_wrap">
							<div class="item">お問い合わせ内容<span class="red">*</span></div>
							<div class="input">
								<textarea name="msg" id="msg"></textarea>
							</div>
						</div>

						<div class="inner">
							<input type="checkbox" name="agree02" id="j13" value="チェック済み" class="ichk" required>
							<label for="j13">当社の個人情報取り扱いについて同意します。</label>
						</div>





						<div class="submit_btn">
							<input type="submit" class="submit_btn" value="送信する">
						</div>
				</form>
			</div>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ fc04 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->








</main>


<?php include($root . "/include/footer.php"); ?>