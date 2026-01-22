<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectTransactionDocumentDto extends Model
{
    /** The top part &gt; Ref. no. &gt; The reference number of the transaction. */
    #[Property]
    public ?string $refNbr;

    /** The top part &gt; Description &gt; The description provided for the transaction. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Orig. doc. no. &gt; The reference number of the underlying document for the transaction. */
    #[Property]
    public ?string $origDocNbr;

    /** The top part &gt; Status &gt; The status of the transaction. The following statuses are possible: Balanced, Released. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Module &gt; The module you create the transactions in. */
    #[Property]
    public ?string $module;

    /** The top part &gt; Orig. doc. no. &gt; The type of the document the transaction is based on. It has one of the following values: Allocation, Time card, Case, Expense claim, Allocation reversal, Reversal, Credit note. */
    #[Property]
    public ?string $origDocType;

    #[Property]
    public ?string $note;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** The table &gt; */
    #[Property]
    public ?array $lines;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
