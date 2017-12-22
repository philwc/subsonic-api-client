<?php

namespace philwc\Call\Playlist;

use philwc\Client\Client;
use philwc\Response\SubsonicResponse;

/**
 * Class CreatePlaylist
 * @package philwc\Call\Playlist
 */
class CreatePlaylist extends Client {

   /**
    * @param array $params
    * @return SubsonicResponse
    * @throws \philwc\Client\Exception\MissingRequiredParameterException
    */
   public function __invoke(array $params = []): SubsonicResponse {
      return $this->call('/createPlaylist', $params);
   }

   /**
    * @return array
    */
   public function getAvailableFields(): array {
      return ['playlistId', 'name', 'songId'];
   }

   /**
    * @return array
    */
   public function getRequiredFields(): array {
      return ['name', 'songId'];
   }

   public function getResponseClass(): string {
      return SubsonicResponse::class;
   }
}