<?php

namespace philwc\Call\Playlist;

use philwc\Client\Client;
use philwc\Response\Playlist\Playlists;
use philwc\Response\SubsonicResponse;

/**
 * Class GetPlaylists
 * @package philwc\Call\Playlist
 */
class GetPlaylists extends Client
{

    /**
     * @param array $params
     * @return SubsonicResponse
     * @throws \philwc\Client\Exception\MissingRequiredParameterException
     */
    public function __invoke(array $params = []): SubsonicResponse
    {
        return $this->call('/getPlaylists', $params);
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAvailableFields(): array
    {
        return ['username'];
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return Playlists::class;
    }
}
