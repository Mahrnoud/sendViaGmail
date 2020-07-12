## Send Emails Via Gmail SMTP

Laravel Package To Send Bulk Emails Using Gmail SMTP

## How to install

- 1st Step

```
$ composer require sendviagmail/send
```

- 2nd Step

( in composer.json ) @ autoload
```
"autoload": {
        "psr-4": {
            "App\\": "app/",
            "SendViaGmail\\Send\\": "vendor/sendviagmail/send/src"
        },
```

## How to use it

in controller use

```
use SendViaGmail\Send\sendClass;
```

in function

```
      sendClass::sendEmails(
      [
      'emails' => array(),
      'smtp' => array(),
      'limit' => 500 // Google SMTP Limit is 500 Email Per Email
      ],

      array('subject' => 'New Test Email', 'view_template' => 'emails.test')
      );
```

## Try it and if you have any question Get in Touch

```
Email: me@mahmoud-mohsen.com
```

