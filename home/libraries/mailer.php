<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Mailer {
 
    var $mail;
 
    public function __construct()
    {
        require_once('PHPMailer_5.2.2/class.phpmailer.php');
 
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);
 
        $this->mail->IsSMTP(); // telling the class to use SMTP
 
        $this->mail->CharSet = "utf-8";                  // 一定要設定 CharSet 才能正確處理中文
      //  $this->mail->SMTPDebug  = 0;                     // enables SMTP debug information
        $this->mail->SMTPAuth   = true;                  // enable SMTP authentication
      //  $this->mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $this->mail->Host       = "smtp.163.com";      // sets 163 as the SMTP server
        //$this->mail->Port       = 465;                   // set the SMTP port for the 163 server
        $this->mail->Username   = "it6780@163.com";// 163 username
        $this->mail->Password   = "jxz252069993";       // 163 password
       /// $this->mail->AddReplyTo('@163.com', 'YOUR_NAME');	 //回复地址(可填可不填)
        //$this->mail->SetFrom('YOUR_GAMIL@163.com', 'YOUR_NAME'); 
    }
 
    public function sendmail($to, $to_name, $subject, $body){
        try{
            $this->mail->From = 'it6780@163.com';
            $this->mail->FromName = 'Charles';
            $this->mail->AddAddress($to, $to_name);
            
            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            $this->mail->IsHTML(true);                                  // 使用html格式

            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;

 
            $this->mail->Send();
                echo "Message Sent OK</p>\n";
 
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
}
 
/* End of file mailer.php */