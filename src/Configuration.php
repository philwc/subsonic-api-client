<?php

namespace philwc;
/**
 * Class Configuration
 * @package philwc
 */
class Configuration {
   /**
    * @var string
    */
   private $username;
   /**
    * @var string
    */
   private $password;
   /**
    * @var string
    */
   private $url;

   /**
    * Configuration constructor.
    * @param string $url
    * @param string $username
    * @param string $password
    */
   public function __construct(string $url, string $username, string $password) {
      $this->url = $url;
      $this->username = $username;
      $this->password = $password;
   }

   /**
    * @return string
    */
   public function getUsername(): string {
      return $this->username;
   }

   /**
    * @return string
    */
   public function getPassword(): string {
      return $this->password;
   }

   /**
    * @return string
    */
   public function getUrl(): string {
      return $this->url;
   }
}