<?php

class Hash 
{

    public static function getHash($algoritimo, $dados, $key)
    {
        $hash = hash_init($algoritimo, HASH_HMAC, $key);
         hash_update($hash,$dados);
         
         return hash_final($hash);
    }
}

?>