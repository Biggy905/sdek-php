<?php

namespace sdekforphp;

final class Sdek
{

    public string $username = 'EMscd6r9JnFiQ3bLoyjJY6eM78JrJceI';
    public string $password = 'PjLZkKBHEiLK3YsjtNrt3TGNG0ahs3kG';
    public bool $cacheEnabled = true;

    public $domain = 'api.cdek.ru/v2';
    public $testDomain = 'api.edu.cdek.ru/v2';

    public $protocol = 'https';

    private readonly SdekBuilder $builder;

    public function __construct(

    ) {

    }

    public function get(): SdekBuilder
    {
        return $this->builder;
    }
}
