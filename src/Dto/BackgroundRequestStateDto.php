<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BackgroundRequestStateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BackgroundRequestStateDtoFactory factory()
 */
class BackgroundRequestStateDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $status = null,
        public ?int $statusCode = null,
        public ?\Carbon\Carbon $receivedUtc = null,
        public ?\Carbon\Carbon $startedUtc = null,
        public ?\Carbon\Carbon $finishedUtc = null,
        public ?string $webhookAddress = null,
        public ?string $errorMessage = null,
        public ?string $reference = null,
        public ?string $originalUri = null,
        public ?bool $hasResponseContent = null,
        public ?bool $hasRequestContent = null,
        public ?string $contentLocation = null,
        public ?object $responseHeaders = null,
    ) {}
}
