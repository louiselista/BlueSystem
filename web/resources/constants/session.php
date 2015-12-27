<?php
class Session {
    static function CHECK_SESSION_TIMEOUT(){
        session_start();
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > Settings::SESSION_TIMEOUT)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

        if (!isset($_SESSION['CREATED'])) {
            $_SESSION['CREATED'] = time();
        } else if (time() - $_SESSION['CREATED'] > Settings::SESSION_TIMEOUT) {
            // session started more than 30 minutes ago
            session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
            $_SESSION['CREATED'] = time();  // update creation time
        }
    }
}