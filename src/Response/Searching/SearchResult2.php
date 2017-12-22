<?php

namespace philwc\Response\Searching;

use philwc\Response\SubsonicResponse;

class SearchResult2 extends SubsonicResponse {
   protected $artist;
   protected $album;
   protected $song;

   /**
    * @param array $data
    */
   protected function parse(array $data) {
      $this->version = $data['version'];
      $this->status = $data['status'];
      $data = $data['searchResult2'];

      foreach (['artist' => Artist::class, 'album' => Album::class, 'song' => Song::class] as $key => $class) {
         if (array_key_exists($key, $data) && \is_array($data[$key])) {
            $this->$key = array_map(function (array $item) use ($class) {
               return new $class($item, false);
            }, $data[$key]);
         }
      }
   }

   /**
    * @return array
    */
   public function getArtists() {
      return $this->artist;
   }

   /**
    * @return array
    */
   public function getAlbums() {
      return $this->album;
   }

   /**
    * @return array
    */
   public function getSongs() {
      return $this->song;
   }
}