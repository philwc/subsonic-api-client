<?php

namespace philwc\Response\Searching;

use philwc\Response\SubsonicResponse;

class Artist extends SubsonicResponse {
   protected $id;
   protected $name;

   /**
    * @return mixed
    */
   public function getId() {
      return $this->id;
   }

   /**
    * @return mixed
    */
   public function getName() {
      return $this->name;
   }
}