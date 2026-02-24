<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory testFactory()
 */
class SupplierInvoiceQueryParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Filter by Supplier */
        public ?string $supplier = null,
        /** Set to true if you want to see all attachments regarding this document. */
        public ?bool $expandAttachment = null,
        /** Expland landed cost lines */
        public ?bool $expandLandedCosts = null,
        /** By type of document. */
        public ?SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum $documentType = null,
        /** Parameter for showing if invoice has been released or not. */
        public ?int $released = null,
        /** Filter by the project with which the document is associated. */
        public ?string $project = null,
        /** Set to true to include approval information. */
        public ?bool $expandApproval = null,
        /** Set to true to include description. */
        public ?bool $expandNote = null,
        /**
         * This field has been deprecated and will be removed in future versions. Use
         * pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does
         * not work with NumberToRead and SkipRecords.
         */
        public ?int $numberToRead = null,
        /**
         * This field has been deprecated and will be removed in future versions. Use
         * pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does
         * not work with NumberToRead and SkipRecords.
         */
        public ?int $skipRecords = null,
        /** The status of the document */
        public ?SupplierInvoiceForSupplierQueryParametersStatusEnum $status = null,
        /** Expland line-level pre-booking account and sub-account information. */
        public ?bool $expandLinePrebookAccounts = null,
        /** Filter by Branch */
        public ?string $branch = null,
        /** Filter by Financial Period, format YYYYPP */
        public ?string $financialPeriod = null,
        /**
         * This value indicates the date the document is due for payment. Use it to
         * retrieve all records that have the Due date since that time, up to the
         * future.
         *
         * Accepted format:
         * * ```yyyy-MM-dd```
         * * ```yyyy-MM-dd```
         * * ```yyyy-MM-dd```
         * * ```yyyy-MM-dd```
         * * ```yyyy-MM-dd```
         *
         * _Note:_ __DueDate__ and __DueDateConditionCondition__ are __mutually
         * inclusive__.
         */
        public ?\Carbon\Carbon $dueDate = null,
        /**
         * This value represents the condition to be applied to the Due Date when
         * retrieving records.
         *
         * Accepted values (without the single quotes):
         * * '>' for greater than
         * * '<' for less than
         * * '>=' for greater than or equal
         * * '<=' for less than or equal
         *
         * _Note:_ __DueDate__ and __DueDateCondition__ are __mutually inclusive__.
         */
        public ?string $dueDateCondition = null,
        /**
         * This value indicates the document date. Use it to retrieve all records that
         * have the Document Date since that time, up to the future.
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
        public ?\Carbon\Carbon $docDate = null,
        /**
         * This value represents the condition to be applied to the Document Date when
         * retrieving records.
         *
         * Accepted values (without the single quotes):
         * * '>' for greater than
         * * '<' for less than
         * * '>=' for greater than or equal
         * * '<=' for less than or equal
         *
         * _Note:_ __DocumentDate__ and __DocumentDateCondition__ are __mutually
         * inclusive__.
         */
        public ?string $docDateCondition = null,
        /** Filter by Item used into the document lines */
        public ?string $item = null,
        /**
         * This value represents balance of the payment remaining to be applied and
         * released. Only released applications will count towards the balance.
         *
         * _Note:_ __Balance__ and __BalanceCondition__ are __mutually inclusive__.
         */
        public int|float|null $balance = null,
        /**
         * This value represents the condition to be applied to the Balance when
         * retrieving records.
         *
         * Accepted values (without the single quotes):
         * * '>' for greater than
         * * '<' for less than
         * * '>=' for greater than or equal
         * * '<=' for less than or equal
         *
         * _Note:_ __Balance__ and __BalanceCondition__ are __mutually inclusive__.
         */
        public ?string $balanceCondition = null,
        /**
         * Greater than value. The item which is the object for this, varies from API to
         * API.
         */
        public ?string $greaterThanValue = null,
        /**
         * This value, generated by the system, indicates the last time the record was
         * modified. Use it to retrieve all records that have been modified since that
         * time, up to the present.
         *
         * Accepted format:
         * * ```yyyy-MM-dd```
         * * ```yyyy-MM-dd HH:mm:ss```
         * * ```yyyy-MM-dd HH:mm:ss.FFF```
         * * ```yyyy-MM-ddTHH:mm:ss```
         * * ```yyyy-MM-ddTHH:mm:ss.FFF```
         *
         * _Note:_ __LastModifiedDateTime__ and __LastModifiedDateTimeCondition__ are
         * __mutually inclusive__.
         */
        public ?string $lastModifiedDateTime = null,
        /**
         * This value represents the condition to be applied when retrieving records.
         *
         * Accepted values (without the single quotes):
         * * '>' for greater than
         * * '<' for less than
         * * '>=' for greater than or equal
         * * '<=' for less than or equal
         *
         * _Note:_ __LastModifiedDateTime__ and __LastModifiedDateTimeCondition__ are
         * __mutually inclusive__.
         */
        public ?string $lastModifiedDateTimeCondition = null,
        /** Creation date and time. */
        public ?string $createdDateTime = null,
        /** System-retrieved information for state/condition */
        public ?string $createdDateTimeCondition = null,
        /** Pagination parameter. Page number. */
        public ?int $pageNumber = null,
        /**
         * Pagination parameter. Number of items to be collected.
         * Please use a page size lower or equal to the allowed max page size which is
         * returned as part of the metadata information.
         * If requested page size is greater than allowed max page size, request will be
         * limited to max page size.
         */
        public ?int $pageSize = null,
    ) {}
}
