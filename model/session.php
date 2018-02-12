<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 12.02.2018
 * Time: 12:20
 */

class session
{
    // sessiooni klassi muutujad
    var $sid = false; // Sessiooni id
    var $vars = array(); // Sessiooni ajal tekkinud andmed
    var $http = false; // Otseühendus $http objektiga
    var $db = false;

    var $timeout = 1800; // Sessiooni pikkus - 30 minutit
    var $anonymous = true; // Kas on lubatud anonüümne kasutamine
    /**
     * session constructor.
     * @param bool $http
     * @param bool $db
     */
    public function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
    } // Otseühendus $db objektiga

    // Sessiooni loomine
    function createSession($user = false){
        // Kui kasutaja on anonüümne
        if(user == false){
            $user = array(
                'user_id' => 0,
                'role_id' => 0,
                'username' => 'Anonüümne'
            );
        }
        // Loome sessiooni id
        $sid = md5(uniqid(time().mt_rand(1, 1000), true));
        // päring sessiooni andmete sisestamiseks andmebaasi
        $sql = 'INSERT INTO session SET sid= '.fixDB($sid).', '.
            'user_id='.fixDB($user['user_id']).', '.
            'user_data='.fixDB(serialize($user)).', '.
            'login_ip'.fixDB(REMOTE_ADDR).', '.
            'created=NOW()';
        // Saadame päringu andmebaasi
        $this->db->query($sql);
        // määrame sessioonile loodud id
        $this->sid = $sid;
        // Paneme antud väärtus ka veebi andmete sisse
        $this->http->set('sid', $sid);
    }

    // Sessiooni tabeli puhastamine vananenud sessioonidest
    function clearSessions(){
        $sql = 'DELETE FROM session WHERE '.
            time().'- UNIX_TIMESTAMP(changed) > '.
            $this->timeout;
        $this->db->query($sql);
    }
}