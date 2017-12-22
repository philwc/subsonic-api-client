<?php

namespace philwc;

use GuzzleHttp\Client;
use philwc\Client\ClientInterface;

class ClientFactory {

   private static $configuration;

   /**
    * @param Configuration $configuration
    */
   public static function setConfiguration(Configuration $configuration) {
      self::$configuration = $configuration;
   }

   /**
    * @param string $class
    * @param Configuration $configuration
    * @return ClientInterface
    */
   public static function get(string $class, Configuration $configuration = null): ClientInterface {
      if ($configuration === null) {
         $configuration = self::$configuration;
      }

      $client = new Client();
      $token = TokenFactory::get($configuration->getUsername(), $configuration->getPassword());

      return new $class($client, $token, $configuration->getUrl());
   }
}