<?php

namespace philwc\Call\System;

use philwc\Client\Client;
use philwc\Response\SubsonicResponse;

/**
 * Class Ping
 * @package philwc\Call\System
 */
class Ping extends Client {

   /**
    * @param array $params
    * @return SubsonicResponse
    * @throws \philwc\Client\Exception\MissingRequiredParameterException
    */
   public function __invoke(array $params = []): SubsonicResponse {
      return $this->call('/ping');
   }

   /**
    * @return array
    */
   public function getRequiredFields(): array {
      return [];
   }

   /**
    * @return array
    */
   public function getAvailableFields(): array {
      return [];
   }

   /**
    * @return string
    */
   public function getResponseClass(): string {
      return SubsonicResponse::class;
   }
}