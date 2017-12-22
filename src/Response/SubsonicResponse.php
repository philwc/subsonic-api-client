<?php

namespace philwc\Response;

/**
 * Class SubsonicResponse
 * @package philwc\Response
 */
class SubsonicResponse {
   protected $status;
   protected $version;

   /**
    * SubsonicResponse constructor.
    * @param array $data
    * @param bool $checkResponse
    * @throws BadResponseException
    */
   public function __construct(array $data, $checkResponse = true) {
      if ($checkResponse) {
         if (!array_key_exists('subsonic-response', $data)) {
            throw new BadResponseException('`subsonic-response` not found');
         }

         /** @var array $data */
         $data = $data['subsonic-response'];
      }

      $this->parse($data);
   }

   /**
    * @param array $data
    */
   protected function parse(array $data) {
      foreach ($data as $key => $value) {
         if (property_exists($this, $key)) {
            $this->$key = $value;
         }
      }

   }

   /**
    * @return mixed
    */
   public function getStatus() {
      return $this->status;
   }

   /**
    * @return mixed
    */
   public function getVersion() {
      return $this->version;
   }
}