<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PresignedUrlResponseFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PresignedUrlResponseFactory factory()
 */
class PresignedUrlResponse extends Model
{
    public function __construct(
        public ?string $preSignedUrl = null,
    ) {}
}
