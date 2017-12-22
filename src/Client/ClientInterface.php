<?php

namespace philwc\Client;

use philwc\Response\SubsonicResponse;

/**
 * Interface ClientInterface
 * @package philwc\Call
 */
interface ClientInterface {

   /**
    * @param array $params
    * @return SubsonicResponse
    */
   public function __invoke(array $params = []): SubsonicResponse;

   /**
    * @return array
    */
   public function getRequiredFields(): array;

   /**
    * @return array
    */
   public function getAvailableFields(): array;

   /**
    * @return string
    */
   public function getResponseClass(): string;
}