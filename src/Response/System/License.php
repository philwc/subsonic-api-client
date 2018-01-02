<?php

namespace philwc\Response\System;

use philwc\Response\SubsonicResponse;

class License extends SubsonicResponse
{
    protected $valid;
    protected $email;
    protected $licenseExpires;
    protected $trialExpires;

    public function parse(array $data): void
    {
        $this->status = $data['status'];
        $this->version = $data['version'];
        $data = $data['license'];
        parent::parse($data);
    }
}
