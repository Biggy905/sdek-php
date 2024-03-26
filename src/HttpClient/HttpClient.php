<?php

namespace sdekforphp\HttpClient;

use sdekforphp\enums\UrlEnums;
use sdekforphp\SdekBuilder;

final class HttpClient
{
    public function __construct(
        private readonly UrlEnums $urlEnums,
    ) {

    }

    public function getUrl(): string
    {
        return $this->urlEnums->value;
    }

}
