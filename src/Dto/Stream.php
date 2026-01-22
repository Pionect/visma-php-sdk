<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class Stream extends Model
{
    #[Property]
    public ?bool $canRead;

    #[Property]
    public ?bool $canSeek;

    #[Property]
    public ?bool $canTimeout;

    #[Property]
    public ?bool $canWrite;

    #[Property]
    public ?int $length;

    #[Property]
    public ?int $position;

    #[Property]
    public ?int $readTimeout;

    #[Property]
    public ?int $writeTimeout;
}
