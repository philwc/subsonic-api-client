<?php

namespace philwc\Call\Playlist;

use philwc\Client\Client;
use philwc\Response\SubsonicResponse;

/**
 * Class DeletePlaylist
 * @package philwc\Call\Playlist
 */
class DeletePlaylist extends Client
{

    /**
     * @param array $params
     * @return SubsonicResponse
     * @throws \philwc\Client\Exception\MissingRequiredParameterException
     */
    public function __invoke(array $params = []): SubsonicResponse
    {
        return $this->call('/deletePlaylist', $params);
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return ['id'];
    }

    /**
     * @return array
     */
    public function getAvailableFields(): array
    {
        return ['id'];
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return SubsonicResponse::class;
    }
}
