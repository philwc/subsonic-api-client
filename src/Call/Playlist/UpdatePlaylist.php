<?php

namespace philwc\Call\Playlist;

use philwc\Client\Client;
use philwc\Response\SubsonicResponse;

/**
 * Class UpdatePlaylist
 * @package philwc\Call\Playlist
 */
class UpdatePlaylist extends Client {

   /**
    * @param array $params
    * @return SubsonicResponse
    * @throws \philwc\Client\Exception\MissingRequiredParameterException
    */
   public function __invoke(array $params = []): SubsonicResponse {
      return $this->call('/updatePlaylist', $params);
   }

   /**
    * @return array
    */
   public function getRequiredFields(): array {
      return ['playlistId'];
   }

   /**
    * @return array
    */
   public function getAvailableFields(): array {
      return [
         'playlistId', 'name', 'comment', 'public', 'songIdToAdd', 'songIndexToRemove'
      ];
   }

   /**
    * @return string
    */
   public function getResponseClass(): string {
      return SubsonicResponse::class;
   }
}