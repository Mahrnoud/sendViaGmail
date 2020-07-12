<?php

namespace SendViaGmail\Send;

use Illuminate\Support\Facades\Mail;

class sendClass {

    public static function sendEmails($data, $message)
    {
        // Get Emails From $data Array  
        $emails = $data['emails'];

        // Get SMTP Info From $data Array
        $smtp = $data['smtp'];

        // Get Switch Limit 
        $limit = $data['limit'];

        $x = null; // Count Sent Emails
        $y = 0;    // SMTP By Index    

        foreach($emails as $email){

            /**
             * 
             * Setting Mail Driver at Runtime
             */

            $currentSmtp = $data['smtp'][$y];

            config([
                    
                'mail.driver'=> $currentSmtp->driver,
                'mail.host'=> $currentSmtp->host,
                'mail.port'=> $currentSmtp->port,
                'mail.username'=> $currentSmtp->username,
                'mail.password'=> $currentSmtp->password,
                'mail.encryption'=> $currentSmtp->encryption         
            
            ]);

            /**
             * 
             * Send Emails
             * 
             * ( $passData ) for passing data to your template 
             */

            $passData = [];

            Mail::send($message->view_template, $passData, function($msg) use ($currentSmtp, $email, $message){
                
                // From SMTP Email
                $msg->from($currentSmtp->username, 'Send Via Gmail SMTP');

                // To Email
                $msg->to($email->email, $email->name);

                // Reply To SMTP Email
                $msg->replyTo($currentSmtp->username, 'Send Via Gmail SMTP');

                // Message Subject
                $msg->subject($message->subject);

            });

            // Increase Counter By One
            $x++; 

            /**
             * 
             * Check limit
             * And Switch SMTP ( If $x == $limit )
             * 
             */

            if($x == $limit){

                $y++;
                $x = null;                
            }
            
        }

    }
    

}

?>

