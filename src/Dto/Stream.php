<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StreamFactory testFactory()
 */
class Stream extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $canRead = null,
        public ?bool $canSeek = null,
        public ?bool $canTimeout = null,
        public ?bool $canWrite = null,
        public ?int $length = null,
        public ?int $position = null,
        public ?int $readTimeout = null,
        public ?int $writeTimeout = null,
    ) {}
}
