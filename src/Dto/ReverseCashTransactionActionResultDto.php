<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseCashTransactionActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseCashTransactionActionResultDtoFactory factory()
 */
class ReverseCashTransactionActionResultDto extends Model
{
    #[Property]
    public ?string $referenceNbr;

    #[Property]
    public ?CashTransactionDto $cashTransaction;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
