<?php

namespace philwc\Response\Searching;

use philwc\Response\SubsonicResponse;

class Song extends SubsonicResponse
{

    protected $id;
    protected $parent;
    protected $isDir;
    protected $title;
    protected $album;
    protected $artist;
    protected $track;
    protected $year;
    protected $coverArt;
    protected $size;
    protected $contentType;
    protected $suffix;
    protected $duration;
    protected $bitRate;
    protected $path;
    protected $isVideo;
    protected $discNumber;
    protected $created;
    protected $albumId;
    protected $artistId;
    protected $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return mixed
     */
    public function getisDir()
    {
        return $this->isDir;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return mixed
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getCoverArt()
    {
        return $this->coverArt;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getisVideo()
    {
        return $this->isVideo;
    }

    /**
     * @return mixed
     */
    public function getDiscNumber()
    {
        return $this->discNumber;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * @return mixed
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}
