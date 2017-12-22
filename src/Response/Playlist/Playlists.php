<?php

namespace philwc\Response\Playlist;

use philwc\Response\SubsonicResponse;

/**
 * Class Playlists
 * @package philwc\Response\Playlist
 */
class Playlists extends SubsonicResponse {

   /**
    * @var array
    */
   protected $playlist;

   /**
    * @param array $data
    */
   protected function parse(array $data) {
      if (\is_array($data['playlists']) && array_key_exists('playlist', $data['playlists'])) {
         $this->playlist = array_map(function (array $item) {
            return new Playlist($item, false);
         }, $data['playlists']['playlist']);
      }

      parent::parse($data);
   }

   /**
    * @return mixed
    */
   public function getPlaylists(): array {
      return $this->playlist;
   }

   /**
    * @param string $name
    * @return bool|Playlist
    */
   public function getPlaylistByName(string $name) {
      /** @var Playlist $playlist */
      foreach ($this->playlist as $playlist) {
         if ($playlist->getName() === $name) {
            return $playlist;
         }
      }

      return false;
   }
}