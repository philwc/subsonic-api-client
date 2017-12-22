<?php

namespace philwc\Response\Playlist;

use philwc\Response\SubsonicResponse;

class Playlist extends SubsonicResponse {
   protected $id;
   protected $name;
   protected $owner;
   protected $public;
   protected $songCount;
   protected $duration;
   protected $created;
   protected $changed;
   protected $coverArt;

   protected function parse(array $data) {

      if (array_key_exists('playlist', $data)) {
         $this->status = $data['status'];
         $this->version = $data['version'];
         $data = $data['playlist'];
      }

      parent::parse($data);
   }

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

   /**
    * @return mixed
    */
   public function getOwner() {
      return $this->owner;
   }

   /**
    * @return mixed
    */
   public function getPublic() {
      return $this->public;
   }

   /**
    * @return mixed
    */
   public function getSongCount() {
      return $this->songCount;
   }

   /**
    * @return mixed
    */
   public function getDuration() {
      return $this->duration;
   }

   /**
    * @return mixed
    */
   public function getCreated() {
      return $this->created;
   }

   /**
    * @return mixed
    */
   public function getChanged() {
      return $this->changed;
   }

   /**
    * @return mixed
    */
   public function getCoverArt() {
      return $this->coverArt;
   }
}