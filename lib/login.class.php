<?php

class login
{
 

    /**
     * changePasswort.
     *
     * @param  string $key
     * @return array<string>
     */
    public static function changePassword($key)
    {
        $ok = 1;
        $error = [];
        $kunde = rex_sql::factory();
        $kunde->setTable('rex_rexstansqltest');
        $kunde->setWhere('pw_vergesskey = '.$kunde->escape($key).' and pw_date >= '.(time() - (60 * 60 * 72)).' '); //
        // $kunde->setDebug(true);
        $kunde->select();

        if (0 == $kunde->getRows()) {
            $error[] = '{{key_is_not_valid}}';
        }        
        return $error;
    }
}
