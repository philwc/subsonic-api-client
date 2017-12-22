<?php

namespace philwc\Client;

use GuzzleHttp\RequestOptions;
use philwc\Client\Exception\MissingRequiredParameterException;
use philwc\Response\SubsonicResponse;
use philwc\Token;

abstract class Client implements ClientInterface {

   const RETURN_FORMAT = 'json';
   const CLIENT_APPLICATION = 'app_name';
   const API_VERSION = '1.13.0';

   /**
    * @var \GuzzleHttp\Client
    */
   private $client;

   /**
    * @var string
    */
   private $baseUrl;

   /**
    * @var array
    */
   private $baseParams;

   /**
    * Client constructor.
    * @param \GuzzleHttp\Client $client
    * @param Token $token
    * @param string $baseUrl
    */
   public function __construct(\GuzzleHttp\Client $client, Token $token, string $baseUrl) {
      $this->client = $client;
      $this->baseUrl = $baseUrl . '/rest';
      $this->baseParams = [
         'u' => $token->getUsername(),
         't' => $token->getToken(),
         's' => $token->getSalt(),
         'f' => self::RETURN_FORMAT,
         'v' => self::API_VERSION,
         'c' => self::CLIENT_APPLICATION,
      ];
   }

   /**
    * @param string $url
    * @param array $params
    * @return SubsonicResponse
    * @throws MissingRequiredParameterException
    */
   protected function call(string $url, array $params = []): SubsonicResponse {
      $url = $this->baseUrl . $url . '.view';

      $this->validateParams($params);

      $response = $this->client->get($url, [
         RequestOptions::QUERY => array_replace($this->baseParams, $params),
         //RequestOptions::DEBUG => true,
      ]);

      $data = \GuzzleHttp\json_decode((string)$response->getBody(), true);

      $class = $this->getResponseClass();

      return new $class($data);
   }

   /**
    * @param array $params
    * @throws MissingRequiredParameterException
    */
   private function validateParams(array $params) {
      foreach ($this->getRequiredFields() as $requiredField) {
         if (!array_key_exists($requiredField, $params)) {
            throw new MissingRequiredParameterException('Required field ' . $requiredField . ' missing');
         }
      }
   }

}