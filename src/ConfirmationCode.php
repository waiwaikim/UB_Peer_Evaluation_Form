<?php
  final class ConfirmationCode {
    private static $encrypt_method = "AES-256-CBC";
    private static $key = hash("sha256", "what is this owo");
    private static $iv = substr(hash("sha256", "what is that uwu"), 0, 16);

    // generates a confirmation code
    public static function get_code() {
      return openssl_encrypt(strval(time()), $encrypt_method, $key, 0, $iv);
    }

    // get the time when $code is generated (Unix Epoch)
    public static function get_time($code) {
      return openssl_decrypt($code, $encrypt_method, $key, 0, $iv);
    }
  }
?>
