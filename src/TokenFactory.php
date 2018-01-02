<?php

namespace philwc;

class TokenFactory {
   /**
    * @param string $username
    * @param string $password
    * @return Token
    */
   public static function get(string $username, string $password): Token {
      return new Token($username, $password, self::generateSalt());
   }

   /**
    * @return string
    */
   private static function generateSalt(): string {
      $length = 32;
      $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

      $str = '';
      $max = mb_strlen($keyspace, '8bit') - 1;
      for ($i = 0; $i < $length; ++$i) {
         try {
            $str .= $keyspace[random_int(0, $max)];
         } catch (\Exception $e) {
            //noop
         }
      }

      return $str;
   }
}