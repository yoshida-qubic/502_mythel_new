<?php

header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

//【２】HTMLエンティティ変換


$user = htmlspecialchars($_POST['user'], ENT_QUOTES);
$user_kana = htmlspecialchars($_POST['user_kana'], ENT_QUOTES);
$zip1 = htmlspecialchars($_POST['zip1'], ENT_QUOTES);
$pref1 = htmlspecialchars($_POST['pref1'], ENT_QUOTES);
$addr1 = htmlspecialchars($_POST['addr1'], ENT_QUOTES);
$addr2 = htmlspecialchars($_POST['addr2'], ENT_QUOTES);
$addr3 = htmlspecialchars($_POST['addr3'], ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$type = htmlspecialchars($_POST['type'], ENT_QUOTES);
$opening_fund = htmlspecialchars($_POST['opening_fund'], ENT_QUOTES);
$opening_time = htmlspecialchars($_POST['opening_time'], ENT_QUOTES);
$agree02 = htmlspecialchars($_POST['agree02'], ENT_QUOTES);


$user_kana = mb_convert_kana($user_kana,"sKV");      //「名前」半角カナ→全角カナ
$msg = mb_convert_kana($msg,"sKV");  




//管理者受信用メール送信処理
function funcManagerAddress($user, $user_kana, $zip1, $pref1, $addr1, $addr2, $addr3, $tel, $email, $type, $opening_fund, $opening_time, $agree02){

    $mailto = 'info@tree-co.net,tsukiyama@tree-co.net,e-tamura@tree.co.net'; 
    // $mailto = 'register@qu-bic.jp'; 
    // $mailto = 'miura@qu-bic.jp'; 
    $subject = "個別説明会申込メール"; 

    $content = "MYTHEL FCページより、個別説明会申込がありました。\n\n";
    $content .= "内容を確認後、返信してください。\n\n";
    $content .= "--------------------------------\n\n";




    $content .= "【お名前】：".$user."\n";
    $content .= "【フリガナ】：".$user_kana."\n";

    $content .= "【郵便番号】：".$zip1."\n";
    $content .= "【都道府県】：".$pref1."\n";
    $content .= "【市区町村】：".$addr1."\n";
    $content .= "【番地】：".$addr2."\n";
    $content .= "【建物名】：".$addr3."\n";

    $content .= "【電話番号】：".$tel."\n";
    $content .= "【メールアドレス】：".$email."\n";
    $content .= "【種別】：".$type."\n";


    $content .= "【開業予定資金】：".$opening_fund."\n";
    $content .= "【開業予定時期】：".$opening_time."\n";

    $content .= "個人情報の取り扱いについて、プライバシーポリシーをご確認いただき、ご同意の上でご送信ください。：".$agree02."\n\n";


    
    $content .= "--------------------------------\n\n";

    $mailfrom="From:" .mb_encode_mimeheader($user) ."<".$email.">";
    if(mb_send_mail($mailto,$subject,$content,$mailfrom) == true){
        $managerFlag = "○";
    }else{
        $managerFlag = "×";
    }
    return $managerFlag;
}


//送信者用自動返信メール送信処理
function funcContactAddress($comp_name, $user, $user_kana, $email, $tel, $date01, $date02, $msg, $agree02){  
    $mailto = $email;

    $subject = "MYTHEL FCの個別説明会申込ありがとうございます。";
    $content = "この度は【MYTHEL FCの個別説明会】にお申し込みいただき、ありがとうございます。\n\n";
    $content .= "以下の内容でお申し込みを受け付けました。\n\n";

        
    //本文

    $content .= "--------------------------------\n\n";


    $content .= "【お名前】：".$user."\n";
    $content .= "【フリガナ】：".$user_kana."\n";

    $content .= "【郵便番号】：".$zip1."\n";
    $content .= "【都道府県】：".$pref1."\n";
    $content .= "【市区町村】：".$addr1."\n";
    $content .= "【番地】：".$addr2."\n";
    $content .= "【建物名】：".$addr3."\n";

    $content .= "【電話番号】：".$tel."\n";
    $content .= "【メールアドレス】：".$email."\n";
    $content .= "【種別】：".$type."\n";


    $content .= "【開業予定資金】：".$opening_fund."\n";
    $content .= "【開業予定時期】：".$opening_time."\n";

    $content .= "個人情報の取り扱いについて、プライバシーポリシーをご確認いただき、ご同意の上でご送信ください。：" . $agree02 . "\n\n";


    
    $content .= "--------------------------------\n\n\n";

    $content .= "内容確認のため、後日スタッフより確認のお電話させていただきます。\n";
    $content .= "※お申し込みされた希望日の3日前までにご連絡がつかない場合は、大変恐縮ですがキャンセルとさせていただきますのでご了承くださいませ。\n\n";
    $content .= "--------------------------------\n\n";
    $content .= "Tree Company株式会社\n";
    $content .= "【住所】 〒550-0015 大阪府大阪市西区南堀江2-13-30 SUNEASTBldg.901 \n";
    $content .= "【電話番号】 06-6684-9193 \n";
    $content .= "【MAIL】 info@tree-co.net\n";
    $content .= "【営業時間】平日 10:00～18:00\n\n";
    $content .= "--------------------------------\n";


    $mailfrom="From:" .mb_encode_mimeheader("MYTHEL FC本部") ."<'info@tree-co.net'>";
    // $mailfrom="From:" .mb_encode_mimeheader("MYTHEL FC本部") . "<'register@qu-bic.jp'>";
    // $mailfrom="From:" .mb_encode_mimeheader("MYTHEL FC本部") . "<'miura@qu-bic.jp'>";

    if(mb_send_mail($mailto,$subject,$content,$mailfrom) == true){
        $contactFlag = "○";
    }else{
        $contactFlag = "×";
    }
    return $contactFlag;
}


//送信者用自動返信メール送信
$contactAddress = funcContactAddress($user, $user_kana, $zip1, $pref1, $addr1, $addr2, $addr3, $tel, $email, $type, $opening_fund, $opening_time, $agree02);
//管理者受信用メール送信
$managerAddress = funcManagerAddress($user, $user_kana, $zip1, $pref1, $addr1, $addr2, $addr3, $tel, $email, $type, $opening_fund, $opening_time, $agree02);

if($contactAddress === "○" && $managerAddress === "○" ){
        header("Location: ./thanks/");
}

