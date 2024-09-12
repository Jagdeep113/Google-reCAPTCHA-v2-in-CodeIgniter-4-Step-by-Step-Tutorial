<?php 
function verifyCaptcha($remoteIp, $response){
    $secret='6Lfm4w8qAAAAAKwF_WSrIU-59sH06_r2yhSNm27C';

    $recaptchaUrl='https://www.google.com/recaptcha/api/siteverify';
    $recatchaResponse = file_get_contents($recaptchaUrl.'?secret='.$secret.'&response='.$response.'&remoteip='.$remoteIp);
    $recaptcha = json_decode($recatchaResponse);
    if($recaptcha->success){
        return true;
    }
    return false;

}

?>