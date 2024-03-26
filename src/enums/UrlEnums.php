<?php

namespace sdekforphp\enums;

enum UrlEnums: string
{
    case URL_AUTH = 'oauth/token?parameters';
    case URL_GET = '';
}
