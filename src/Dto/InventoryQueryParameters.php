<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryQueryParametersStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryQueryParametersFactory testFactory()
 */
class InventoryQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Pagination parameter. Number of items to be collected.
         * Please use a page size lower or equal to the allowed max page size which is
         * returned as part of the metadata information.
         * If requested page size is greater than allowed max page size, request will be
         * limited to max page size.
         * MaxPageSize will be set to 5000 from 1. April 2022
         */
        public ?int $pageSize = null,
        /**
         * Applies for both Stock and Non-stock items.  Some fields in this filter
         * applies only for one of these.
         */
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        /** The Item ID. */
        public ?string $inventoryNumber = null,
        /** The Category ID for the sales category, found on the Attributes tab. */
        public ?int $salesCategory = null,
        /**
         * This filter can be used only for stock items, from the Price/cost information
         * tab.
         */
        public ?bool $addCostPriceStatistics = null,
        /**
         * Attributes (additional information) connected to the entity.
         *  Examples:
         * {{base}}/inventory?attributes={"AttributeID":"ValueID","AttributeID":"ValueID"}
         * {{base}}/inventory?attributes={"AttributeID":"ValueID1,ValueID2"}
         */
        public ?string $attributes = null,
        /** A brief description of the stock item from the Top part of the window. */
        public ?string $description = null,
        /** System retrieved information. */
        public ?string $availabilityLastModifiedDateTime = null,
        /** System retrieved information for state/condition. */
        public ?string $availabilityLastModifiedDateTimeCondition = null,
        /**
         * Filter on one or more inventory types: NonStockItem, LaborItem, ServiceItem,
         * ChargeItem, ExpenseItem, FinishedGoodItem, ComponentPartItem or
         * SubassemblyItem
         */
        public ?array $inventoryTypes = null,
        /**
         * These expand fields are by default set to true, but will be changed in the
         * future.
         * Set to true to retrieve information about the cross-references (item ID and
         * suppliers/customers ID for the item connected to the item.
         */
        public ?bool $expandCrossReference = null,
        /**
         * Set to true to retrieve information about the attachments connected to the
         * item.
         */
        public ?bool $expandAttachment = null,
        /** Set to true to retrieve the attribute descriptions used for the item. */
        public ?bool $expandAttribute = null,
        /**
         * Set to true to retrieve information about the warehouse connected to the
         * item.
         */
        public ?bool $expandWarehouseDetail = null,
        /**
         * Set to true to retrieve information about the account information connected
         * to the item.
         */
        public ?bool $expandAccountInformation = null,
        /**
         * Set to true to retrieve information about the units of measure connected to
         * the item.
         */
        public ?bool $expandInventoryUnits = null,
        /** Set to true to retrieve details about the supplier connected to the item. */
        public ?bool $expandSupplierDetails = null,
        /**
         * Set to true to retrieve details about the sales categories connected to the
         * item.
         */
        public ?bool $expandSalesCategories = null,
        /** Set to true to retrieve the note value connected to the item. */
        public ?bool $expandNote = null,
        /** System retrieved information for last modified date and time for attachment. */
        public ?string $attachmentLastModifiedDateTime = null,
        /** System retrieved information for state/condition for attachment. */
        public ?string $attachmentLastModifiedDateTimeCondition = null,
        /** The inventory item status */
        public ?InventoryQueryParametersStatusEnum $status = null,
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
    ) {}
}
