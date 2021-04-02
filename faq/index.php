<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/faq/';
$meta_ttl = 'Q&A - よくある質問 | ';
include($root . "/include/header.php");

?>


<main>

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ faq01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="faq01">
		<div class="lower_ttl">
			<h1 class="ttl_in">Q&A</h1>
		</div>
		<div class="lower_ttl_bg">

			<div class="container">
				<div class="box">
					<div class="txt">
						<h2><span class="trans_wrap"><span class="trans_in">よくある質問</span></span></h2>
						<p><span class="trans_wrap"><span class="trans_in">MYTHELご来店時に、<br class="is_sp">いただくご質問にお答えします。</span></span><br>
							<span class="trans_wrap"><span class="trans_in">料金からマシンのことまで、<br class="is_sp">不明な点がございましたら、</span></span><br class="is_pc">
							<span class="trans_wrap"><span class="trans_in">スタッフ、またはお問い合わせフォームより</span></span><br class="is_pc">
							<span class="trans_wrap"><span class="trans_in">お気軽にお問い合わせください。</span></span></p>
					</div>
					<div class="img"><img src="<?php echo $imgDir; ?>faq01_mv.png"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ faq01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ faq02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<div class="faq02 section">
		<div class="container">
			<div class="box">
				<div class="link white">
					<a href="#biginner">初めての方へ</a>
				</div>
				<div class="link white">
					<a href="#member">会員様へ</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ faq02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ faq03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="faq03" id="biginner">
		<div class="container">

			<div class="box">
				<h2 class="fadeup">初めての方へ</h2>

				<div class="item fadeup">
					<div class="que">
						<p>MYTHELってなんですか？</p>
					</div>
					<div class="ans">
						<p>サブスクリプション型の最新トータルセルフエステサロンです。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>トータルセルフエステってなんですか？</p>
					</div>
					<div class="ans">
						<p>エステサロンで使用している業務用の脱毛機・キャビテーション・フェイシャルマシン ・ホワイトニング・ネイルプリンターなどを好きなだけ使ってお客様ご自身でお手入れができる最新のセルフエステです。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>体験はできますか？</p>
					</div>
					<div class="ans">
						<p>お住まいのエリアをご選択いただき初回は無料で体験できます。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>セルフエステ初めてなので、上手くできますか？</p>
					</div>
					<div class="ans">
						<p>各部屋に施術動画マニュアルを完備しておりますのでご安心ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>入会を検討しているのですが、どうすればいいですか？</p>
					</div>
					<div class="ans">
						<p>ご来店後、スタッフが丁寧にご説明させて頂きます。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>部屋数は何部屋ですか？</p>
					</div>
					<div class="ans">
						<p>各エリアごとに部屋数が異なります。詳細は各エリア店のページでご確認ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>1日に何回通えますか？</p>
					</div>
					<div class="ans">
						<p>１日にご利用頂ける回数はプランによって異なりますが、１枠（４０分）もしくは１枠（７５分）となります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>体験の際には何を持っていけばいいですか？</p>
					</div>
					<div class="ans">
						<p>年齢認やご本人確認をさせていただく場合がありますので、免許証・保険証・学生証など生年月日や写真付きの身分証明書をご持参ください。体験後に定額制で通う手続きをお考えの方はクレジットカードか口座振替登録手続に必要なキャッシュカードをお持ちくださいませ。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>何分前にお店に行けばいいですか？</p>
					</div>
					<div class="ans">
						<p>初回のお客様はご予約時間の１０分前にはお越しください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>体験当日は、どれくらい時間がかかりますか？</p>
					</div>
					<div class="ans">
						<p>体験前と施術、体験後に入会のお手続きを希望される時は2時間ほど空けておいて下さい。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>予約は何回分できますか？</p>
					</div>
					<div class="ans">
						<p>施術後次回来店のご予約はお一人様1回のご予約とさせて頂いております。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>友達（家族）同士で体験に行くことは可能ですか？</p>
					</div>
					<div class="ans">
						<p>可能です。ペア利用のお部屋もございます。ペアルームが開いてない場合は別々の個室へご案内となりますのでご了承くださいませ。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>見学はできますか？</p>
					</div>
					<div class="ans">
						<p>見学のみは受け付けておりません。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>クレジットカードを持ってない場合の支払い方法は？</p>
					</div>
					<div class="ans">
						<p>銀行口座から引き落としに対応しております。（一部金融機関は除く）</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>妊娠中や授乳中に体験はできますか？</p>
					</div>
					<div class="ans">
						<p>妊娠中や授乳中の方は安全面からご利用頂くことができません。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>入会は何歳から可能ですか？</p>
					</div>
					<div class="ans">
						<p>成人（２０歳）であれば可能です。未成年のお客様につきましては親権者の同意書が必要になります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>入会金はかかりますか？</p>
					</div>
					<div class="ans">
						<p>定額制の会員入会には初回のみ11,000円（税込）と事務手数料3,300円（税込）がかかります。ただし、キャンペーン適用で初回体験後にその日の内に会員になられた方は入会金と事務手数料は無料となります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>月会費はいくらですか？</p>
					</div>
					<div class="ans">
						<p><a href="../price/">ご利用料金表</a>をご覧ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>使用できるクレジットカードの種類を教えてください。</p>
					</div>
					<div class="ans">
						<p>現在利用可能なクレジットカードはVISA、MasterCard、JCB、ダイナースクラブ、ディスカバーカード、アメリカン・エキスプレスが使用できます。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>自分の名義ではないクレジットカードでも登録は可能ですか？</p>
					</div>
					<div class="ans">
						<p>ご本人様のクレジットカードのみとなります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>都度払いの利用はできますか？</p>
					</div>
					<div class="ans">
						<p>ビジター料金となります。詳しくは<a href="../price/">料金表</a>をご覧ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>営業時間を教えてください</p>
					</div>
					<div class="ans">
						<p>各エリアの店舗詳細をご覧ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>子供を連れて行ってもいいですか？</p>
					</div>
					<div class="ans">
						<p>申し訳ございません。お子様の待合スペースがなく精密機械なども多いためご遠慮いただいております。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>清掃はきちんとされていますか？</p>
					</div>
					<div class="ans">
						<p>お客様が退室されましたら、スタッフが清掃消毒し清潔な状態で気持ちよくご利用出来るようにしております。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>どうしてこんなに安く通えるのですか？</p>
					</div>
					<div class="ans">
						<p>予約・来店・施術・退店まで全てお客様自身とAIによるセルフサービスで行って頂いている為、大幅に人件費を節約しており実現しております。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>勧誘はありますか？</p>
					</div>
					<div class="ans">
						<p>勧誘はありませんが、お客様にとってお得な限定キャンペーンの紹介や説明をさせていただいております。
						</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>初めてですが業務用のマシンを使用して大丈夫ですか？</p>
					</div>
					<div class="ans">
						<p>資格や免許がなくてもエステティックサロンで扱える美容機器は誰でも操作ができるものです。セルフ用に簡単に安全に使えるようにしています。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>怪我や火傷などが心配です</p>
					</div>
					<div class="ans">
						<p>初回体験時に専門スタッフより指導があります。正しい使用方法でお使いくだされば大丈夫です。
						</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>効果はありますか？</p>
					</div>
					<div class="ans">
						<p>個人差はありますがどのマシンも最新の業務用機器を導入しておりますのでしっかり効果があります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>男性の利用は可能ですか？</p>
					</div>
					<div class="ans">
						<p>申し訳ございません。当店は女性専用のセルフエステサロンとなります。</p>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ faq03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

	<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ faq03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
	<section class="faq03" id="member">
		<div class="container">

			<div class="box">
				<h2 class="fadeup">会員様へ</h2>


				<div class="item fadeup">
					<div class="que">
						<p>予約なしでも大丈夫ですか？</p>
					</div>
					<div class="ans">
						<p>完全予約制となっております。WEBからのご予約が必須となります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>当日予約はできますか？</p>
					</div>
					<div class="ans">
						<p>ご予約1時間前にお部屋が空いていれば可能です。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>予約の変更・キャンセルはできますか？</p>
					</div>
					<div class="ans">
						<p>6時間前までに行って頂ければ可能です。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>キャンセル料はかかりますか？</p>
					</div>
					<div class="ans">
						<p>キャンセル料はありません。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>遅刻するとどうなりますか？</p>
					</div>
					<div class="ans">
						<p>施術時間は少なくなります。延長などはできません。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>今月一度も通っていませんが、翌月の月会費に充ててもらえますか？</p>
					</div>
					<div class="ans">
						<p>大変申し訳ございません。ご利用回数に関わらず月会費は発生しております。翌月への繰越はできませんので予めご了承ください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>予約メールが届きません。</p>
					</div>
					<div class="ans">
						<p>ドメイン指定受信許可または拒否設定をしている可能性があります。<br>info@lovees-self.comからのメールを受信できるよう、設定変更をお願いします。それでもメールが届かない場合、ご登録のメールアドレスが間違っている可能性がございます。登録店舗にてメールアドレス変更申請を行ってください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>アプリのパスワードを忘れてしましました。</p>
					</div>
					<div class="ans">
						<p>会員登録した店舗にてパスワード再発行を行ってください。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>プラン変更は可能ですか？</p>
					</div>
					<div class="ans">
						<p>初回プラン変更は無料です。2回目以降は事務手数料3,300円（税込）が必要となります。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>退会・休会はいつまでに申請すればいいですか？</p>
					</div>
					<div class="ans">
						<p>退会日・休会日に2ヶ月前までに登録店舗にて申請をお願い致します。</p>
					</div>
				</div>

				<div class="item fadeup">
					<div class="que">
						<p>店舗変更は可能ですか？</p>
					</div>
					<div class="ans">
						<p>登録店舗にて可能です。</p>
					</div>
				</div>


			</div>

			<div class="link purple fadeup"><a href="<?php echo $dir; ?>salonlist/">無料体験のお申込み ▶︎</a></div>

		</div>
	</section>

	<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ faq03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->









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