<?php

App::uses('CakeEmail', 'Network/Email');
class PurchasedController extends AppController
{
  public $components = array('Session','Paginator','Cookie');

  public function index()
  {
    $this->autoLayout = false;  // レイアウトをOFFにする
    $tmp = $this->Session->read('sendData');
    $email_addr = $tmp["email"];
    $name = $tmp["name"];
    $amount = $tmp["amount"];
    $summary = $tmp["summary"];

    if($tmp["period"]) $period = "(月額)";
    else $period = "";

    $this->Session->delete('sendData');
    //読み込む設定ファイルの変数名を指定
    $email = new CakeEmail('default');
    $email->from(array('info@nowall.co.jp'=>'ELITES事務局'));
    $email->to($email_addr);
    $email->subject('[ELITES]決済完了メール');
    //メール送信する
    $email->send($name. "様\n\nお世話になっております。\nELITES事務局です。\n\n以下の内容で決済しました。\n\n決済金額:".number_format($amount)."円".$period."\n決済内容:".$summary."\n\nまた本メールは自動送信のため、返信しないようお願いします。");

  }

}
