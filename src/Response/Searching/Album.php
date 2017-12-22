<?php

namespace philwc\Response\Searching;

use philwc\Response\SubsonicResponse;

class Album extends SubsonicResponse {

   protected $id;
   protected $parent;
   protected $isDir;
   protected $title;
   protected $album;
   protected $artist;
   protected $year;
   protected $genre;
   protected $coverArt;
   protected $created;

   /**
    * @return mixed
    */
   public function getId() {
      return $this->id;
   }

   /**
    * @return mixed
    */
   public function getParent() {
      return $this->parent;
   }

   /**
    * @return mixed
    */
   public function getisDir() {
      return $this->isDir;
   }

   /**
    * @return mixed
    */
   public function getTitle() {
      return $this->title;
   }

   /**
    * @return mixed
    */
   public function getAlbum() {
      return $this->album;
   }

   /**
    * @return mixed
    */
   public function getArtist() {
      return $this->artist;
   }

   /**
    * @return mixed
    */
   public function getYear() {
      return $this->year;
   }

   /**
    * @return mixed
    */
   public function getGenre() {
      return $this->genre;
   }

   /**
    * @return mixed
    */
   public function getCoverArt() {
      return $this->coverArt;
   }

   /**
    * @return mixed
    */
   public function getCreated() {
      return $this->created;
   }
}