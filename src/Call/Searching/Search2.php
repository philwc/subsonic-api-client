<?php

namespace philwc\Call\Searching;

use philwc\Client\Client;
use philwc\Response\Searching\SearchResult2;
use philwc\Response\SubsonicResponse;

class Search2 extends Client
{

    /**
     * @param array $params
     * @return SubsonicResponse
     * @throws \philwc\Client\Exception\MissingRequiredParameterException
     */
    public function __invoke(array $params = []): SubsonicResponse
    {
        return $this->call('/search2', $params);
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return ['query'];
    }

    /**
     * @return array
     */
    public function getAvailableFields(): array
    {
        return [
            'query',
            'artistCount',
            'artistOffset',
            'albumCount',
            'albumOffset',
            'songCount',
            'songOffset',
            'musicFolderId',
        ];
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return SearchResult2::class;
    }
}
