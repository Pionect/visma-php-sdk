<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory factory()
 */
class SupplierInvoiceQueryParameters extends Model
{
    /** Filter by Supplier */
    #[Property]
    public ?string $supplier;

    /** Set to true if you want to see all attachments regarding this document. */
    #[Property]
    public ?bool $expandAttachment;

    /** Expland landed cost lines */
    #[Property]
    public ?bool $expandLandedCosts;

    /** By type of document. */
    #[Property]
    public ?string $documentType;

    /** Parameter for showing if invoice has been released or not. */
    #[Property]
    public ?int $released;

    /** Filter by the project with which the document is associated. */
    #[Property]
    public ?string $project;

    /** Set to true to include approval information. */
    #[Property]
    public ?bool $expandApproval;

    /** Set to true to include description. */
    #[Property]
    public ?bool $expandNote;

    /** This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. */
    #[Property]
    public ?int $numberToRead;

    /** This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. */
    #[Property]
    public ?int $skipRecords;

    /** The status of the document */
    #[Property]
    public ?string $status;

    /** Expland line-level pre-booking account and sub-account information. */
    #[Property]
    public ?bool $expandLinePrebookAccounts;

    /** Filter by Branch */
    #[Property]
    public ?string $branch;

    /** Filter by Financial Period, format YYYYPP */
    #[Property]
    public ?string $financialPeriod;

    /**
     * This value indicates the date the document is due for payment. Use it to retrieve all records that have the Due date since that time, up to the future.
     *
     * Accepted format:
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     *
     * _Note:_ __DueDate__ and __DueDateConditionCondition__ are __mutually inclusive__.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /**
     * This value represents the condition to be applied to the Due Date when retrieving records.
     *
     * Accepted values (without the single quotes):
     * * '&gt;' for greater than
     * * '&lt;' for less than
     * * '&gt;=' for greater than or equal
     * * '&lt;=' for less than or equal
     *
     * _Note:_ __DueDate__ and __DueDateCondition__ are __mutually inclusive__.
     */
    #[Property]
    public ?string $dueDateCondition;

    /**
     * This value indicates the document date. Use it to retrieve all records that have the Document Date since that time, up to the future.
     *
     * Accepted format:
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd```
     *
     * _Note:_ __Docate__ and __DocDateCondition__ are __mutually inclusive__.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $docDate;

    /**
     * This value represents the condition to be applied to the Document Date when retrieving records.
     *
     * Accepted values (without the single quotes):
     * * '&gt;' for greater than
     * * '&lt;' for less than
     * * '&gt;=' for greater than or equal
     * * '&lt;=' for less than or equal
     *
     * _Note:_ __DocumentDate__ and __DocumentDateCondition__ are __mutually inclusive__.
     */
    #[Property]
    public ?string $docDateCondition;

    /** Filter by Item used into the document lines */
    #[Property]
    public ?string $item;

    /**
     * This value represents balance of the payment remaining to be applied and released. Only released applications will count towards the balance.
     *
     * _Note:_ __Balance__ and __BalanceCondition__ are __mutually inclusive__.
     */
    #[Property]
    public ?float $balance;

    /**
     * This value represents the condition to be applied to the Balance when retrieving records.
     *
     * Accepted values (without the single quotes):
     * * '&gt;' for greater than
     * * '&lt;' for less than
     * * '&gt;=' for greater than or equal
     * * '&lt;=' for less than or equal
     *
     * _Note:_ __Balance__ and __BalanceCondition__ are __mutually inclusive__.
     */
    #[Property]
    public ?string $balanceCondition;

    /** Greater than value. The item which is the object for this, varies from API to API. */
    #[Property]
    public ?string $greaterThanValue;

    /**
     * This value, generated by the system, indicates the last time the record was modified. Use it to retrieve all records that have been modified since that time, up to the present.
     *
     * Accepted format:
     * * ```yyyy-MM-dd```
     * * ```yyyy-MM-dd HH:mm:ss```
     * * ```yyyy-MM-dd HH:mm:ss.FFF```
     * * ```yyyy-MM-ddTHH:mm:ss```
     * * ```yyyy-MM-ddTHH:mm:ss.FFF```
     *
     * _Note:_ __LastModifiedDateTime__ and __LastModifiedDateTimeCondition__ are __mutually inclusive__.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /**
     * This value represents the condition to be applied when retrieving records.
     *
     * Accepted values (without the single quotes):
     * * '&gt;' for greater than
     * * '&lt;' for less than
     * * '&gt;=' for greater than or equal
     * * '&lt;=' for less than or equal
     *
     * _Note:_ __LastModifiedDateTime__ and __LastModifiedDateTimeCondition__ are __mutually inclusive__.
     */
    #[Property]
    public ?string $lastModifiedDateTimeCondition;

    /** Creation date and time. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** System-retrieved information for state/condition */
    #[Property]
    public ?string $createdDateTimeCondition;

    /** Pagination parameter. Page number. */
    #[Property]
    public ?int $pageNumber;

    /**
     * Pagination parameter. Number of items to be collected.
     * Please use a page size lower or equal to the allowed max page size which is returned as part of the metadata information.
     * If requested page size is greater than allowed max page size, request will be limited to max page size.
     */
    #[Property]
    public ?int $pageSize;
}
