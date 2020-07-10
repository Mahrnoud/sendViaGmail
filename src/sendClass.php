<?php

class sendClass {

    public static function sendEmails($data, $message)
    {
        // Get Emails From $data Array  
        $emails = $data['emails'];

        // Get SMTP Info From $data Array
        $smtp = $data['smtp'];

        // Get Switch Limit 
        $limit = $data['limit'];

        $x = null; // Limit
        $y = 1;    // SMTP By Index    

        foreach($emails as $email){

            echo 'SMTP Provider: '.$smtp[$y]['provider'].'<br>';
            echo 'SMTP Email: '.$smtp[$y]['email'].'<br>';

            echo 'Message To: '.$email['email'].'<br>';

            echo 'Message Title: '.$message['title'].'<br>';
            echo 'Message Body: '.$message['body'].'<br><br>';
            
            
            $x++; // Increase Limit By One

            /**
             * 
             * Check limit
             * And Switch SMTP
             * 
             */

            if($x == $limit){
                
                $y++;
                $x = 0;
                echo '=========== <br>';
                
            }
            
        }
    }
    

}



