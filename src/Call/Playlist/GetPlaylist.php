<?php

namespace philwc\Call\Playlist;

use philwc\Client\Client;
use philwc\Response\Playlist\Playlist;
use philwc\Response\SubsonicResponse;

/**
 * Class GetPlaylist
 * @package philwc\Call\Playlist
 */
class GetPlaylist extends Client
{

    /**
     * @param array $params
     * @return SubsonicResponse
     * @throws \philwc\Client\Exception\MissingRequiredParameterException
     */
    public function __invoke(array $params = []): SubsonicResponse
    {
        return $this->call('/getPlaylist', $params);
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
        return Playlist::class;
    }
}
