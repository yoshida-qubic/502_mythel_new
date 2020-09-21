<?php

header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

//【２】HTMLエンティティ変換


$comp_name = htmlspecialchars($_POST['comp_name'], ENT_QUOTES);
$user = htmlspecialchars($_POST['user'], ENT_QUOTES);
$user_kana = htmlspecialchars($_POST['user_kana'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
$date01 = htmlspecialchars($_POST['date01'], ENT_QUOTES);
$date02 = htmlspecialchars($_POST['date02'], ENT_QUOTES);
$msg = htmlspecialchars($_POST['msg'], ENT_QUOTES);
$agree02 = htmlspecialchars($_POST['agree02'], ENT_QUOTES);


$user_kana = mb_convert_kana($user_kana,"sKV");      //「名前」半角カナ→全角カナ
$msg = mb_convert_kana($msg,"sKV");  




//管理者受信用メール送信処理
function funcManagerAddress($comp_name, $user,$user_kana, $email, $tel, $date01, $date02, $msg, $agree02){

    $mailto = 'info@tree-co.net,tsukiyama@tree-co.net'; 
    // $mailto = 'register@qu-bic.jp'; 
    $subject = "個別説明会申込メール"; 

    $content = "MYTHEL FCページより、個別説明会申込がありました。\n\n";
    $content .= "内容を確認後、返信してください。\n\n";
    $content .= "--------------------------------\n\n";




    $content .= "【会社名】：".$comp_name."\n";
    $content .= "【ご担当者様名】：".$user."\n";
    $content .= "【ふりがな】：".$user_kana."\n";
    
    $content .= "【メールアドレス】：".$email."\n";
    $content .= "【電話番号】：".$tel."\n";
    


    $content .= "【説明会希望日1】：".$date01."\n";
    $content .= "【説明会希望日2】：".$date02."\n";

    $content .= "【お問い合わせ内容*】\n";
    $content .= $msg . "\n";

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


    $content .= "【会社名】：" . $comp_name . "\n";
    $content .= "【ご担当者様名】：" . $user . "\n";
    $content .= "【ふりがな】：" . $user_kana . "\n";

    $content .= "【メールアドレス】：" . $email . "\n";
    $content .= "【電話番号】：" . $tel . "\n";



    $content .= "【説明会希望日1】：" . $date01 . "\n";
    $content .= "【説明会希望日2】：" . $date02 . "\n";

    $content .= "【お問い合わせ内容*】\n";
    $content .= $msg . "\n";

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

    if(mb_send_mail($mailto,$subject,$content,$mailfrom) == true){
        $contactFlag = "○";
    }else{
        $contactFlag = "×";
    }
    return $contactFlag;
}


//送信者用自動返信メール送信
$contactAddress = funcContactAddress($comp_name, $user, $user_kana, $email, $tel, $date01, $date02, $msg, $agree02);
//管理者受信用メール送信
$managerAddress = funcManagerAddress($comp_name, $user, $user_kana, $email, $tel, $date01, $date02, $msg, $agree02);

if($contactAddress === "○" && $managerAddress === "○" ){
        header("Location: ./thanks/");
}

