# SMTPMailer

## Getting Started
1. Clone the repository
```bash
git clone https://github.com/TetsuakiBaba/SMTPMailer.git
cd SMTPMailer
```

2. Clone the PHPMailer repository in the SMTPMailer directory
```bash
git clone https://github.com/PHPMailer/PHPMailer.git
```

3. Create a file named `config.php` in the SMTPMailer directory
```bash
touch config.php
```
Here is an example of `config.php`
```php
<?php
$SMTP_SERVER = ''; // SMTPサーバーのアドレス
$SMTP_USERNAME = ''; // SMTPサーバーのユーザー名
$SMTP_SENDER_ADDRESS = ''; // 送信者のメールアドレス
$SMTP_PASSWORD = ''; // SMTPサーバーのパスワード
$SMTP_PORT = 465; // SMTPポート（TLSなら587, SSLなら465）
?>
```

4. Send an email on sample.html