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
    public function index()
    {
      sendClass::sendEmails(
      [
      'emails' => array(),
      'smtp' => array(),
      'limit' => 500 // Google SMTP Limit is 500 Email Per Email Daily Also you Can Change This Value
      ],

      array('subject' => 'New Test Email', 'view_template' => 'emails.test')
      );
      ...
```

## If you have any question get in touch

```
me@mahmoud-mohsen.com
```

