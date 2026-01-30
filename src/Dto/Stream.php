<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StreamFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StreamFactory factory()
 */
class Stream extends Model
{
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
