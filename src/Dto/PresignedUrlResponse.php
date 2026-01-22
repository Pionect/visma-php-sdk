<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PresignedUrlResponse extends Model
{
    #[Property]
    public ?string $preSignedUrl;

    #[Property]
    public ?\BlobMetadata $metadata;
}
