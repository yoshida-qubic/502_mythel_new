
<?php
$root = __DIR__;
$dirname = basename(__DIR__);
$root = str_replace($dirname, '', $root);
$dir = '../';
$imgDir = '../images/term/';
$meta_ttl = '特商法取引について | ';
include($root . "/include/header.php");

?>

<main>
  <section class="trandsaction">
    <div class="container">
      <h1>特商法取引</h1>
      <div class="box">
        <table>
          <tr>
            <th>事業者名</th>
            <td>Tree company株式会社</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>〒550-0015 大阪市西区南堀江2丁目13-30 サンイーストビル9F</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>築山　誠</td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>info@mythel.jp</td>
          </tr>
          <tr>
            <th>サイトURL</th>
            <td>mythel.jp</td>
          </tr>
          <tr>
            <th>お問い合わせ</th>
            <td>info@mythel.jp</td>
          </tr>
          <tr>
            <th>提供価格</th>
            <td>プランにより異なります。詳しくはサイトの料金ページをご覧ください。</td>
          </tr>
          <tr>
            <th>お申し込み方法</th>
            <td>店頭</td>
          </tr>
          <tr>
            <th>支払い方法</th>
            <td>クレジットカード決済、金融機関による口座振替</td>
          </tr>
          <tr>
            <th>支払い時期</th>
            <td>クレジットカードの場合は1日に請求します。<br>口座振替の場合は毎月27日(入会月は翌月27日)に銀行口座から引き落としが行われます</td>
          </tr>
          <tr>
            <th>引き渡し時期</th>
            <td>会費ご入金次第</td>
          </tr>
          <tr>
            <th>お支払い期限</th>
            <td>入会時</td>
          </tr>
          <tr>
            <th>役務の提供時期</th>
            <td>入会後即時</td>
          </tr>
          <tr>
            <th>返品について</th>
            <td>サービスの特性上、返品不可</td>
          </tr>
          <tr>
            <th>その他</th>
            <td>Webサービス、専用アプリにかかる通信料などはお客様にてご負担ください。</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</main>


<?php include($root . "/include/footer.php"); ?>