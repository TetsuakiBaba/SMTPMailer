# SMTPMailer

## Getting Started
1. Clone the repository
```bash
git clone https://github.com/TetsuakiBaba/SMTPMailer.git
cd SMTPMailer
```

2. Clone the PHPMailer repository in the SMTPMailer directory. 
```bash
git clone https://github.com/PHPMailer/PHPMailer.git
```

SMTPMailer uses only PHPMailer/src directory. So, you can remove other files and directories.
```bash
find PHPMailer -mindepth 1 ! -path "PHPMailer/src*" -exec rm -rf {} +
```

3. Create a file named `config.php` in the SMTPMailer directory
```bash
touch config.php
```
Here is an example of `config.php`
```php
<?php
$SMTP_SERVER = ''; // SMTP server address
$SMTP_USERNAME = ''; // SMTP server username
$SMTP_SENDER_ADDRESS = ''; // example: no-reply@your_domain.com
$SMTP_PASSWORD = ''; // SMTP server password
$SMTP_PORT = 465; // TLS:587, SSL:465

$TEST_RECIEVE_MAIL = 'your_address@for.test.com'; // uses sample.php just for a sending a test email
?>
```

4. Send an email on sample.html or sample.php

sample.html is a template for inquiries. For other uses, please refer to sample.php.
