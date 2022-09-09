<?php

session_start();
ini_set('session.use_trans_sid', true); //use_cookies - в куках, trans_sid в URL

class ExampleSessionCookie
{
    public string $car = 'BMW';

    public function __construct() {
        $_SESSION["car"] = "Lotus";
        $_SESSION["car_body"] = "sedan";
        $_SESSION["car_transmission"] = "automaton";
    }

    public function setCookie() {
        //setcookie(name, value, expire, path, domain, secure, httponly);
        //cookie будут доступны только через HTTP-протокол
        setcookie('car', $this->car, time() + 300, "/", false, true);
    }

    public function getCookieSessionInfo() {
        echo $_COOKIE['car'] !== '' ? 'Ваша машина, ' . $_COOKIE['car'] : 'Ваша машина, ' . $_SESSION["car"];
        echo "</br>";
        echo 'идентификатор сессии' . $_COOKIE["PHPSESSID"] . ' / ' . 'имя - PHPSESSID' . session_name();;
    }

    public function clearCookie() {
        setcookie('car', '');
    }

    public function clearSessionData(bool $all, array $sessionData = null) {
        if ($all === false && $sessionData) {
            foreach ($sessionData as $key) {
                unset($_SESSION[$key]); //ломать руки за unset($_SESSION)
            }
        }
        session_destroy();
    }

    public function closeSession() {
        session_write_close();
        sleep(10); // пример блокировки
    }
}