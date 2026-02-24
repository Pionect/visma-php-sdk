<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BlobMetadataFactory testFactory()
 */
class BlobMetadata extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BlobMetadataFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $blobId = null,
        public ?string $blobName = null,
        public ?string $contentType = null,
        #[MapName('mD5Hash')]
        public ?string $mD5hash = null,
        public ?string $fileChecksum = null,
        public ?int $size = null,
        public ?string $countryCode = null,
        public ?\Carbon\Carbon $createdDateTimeUtc = null,
    ) {}
}
