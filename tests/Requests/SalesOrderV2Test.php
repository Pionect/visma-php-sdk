<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2GetAllOrdersV2CollectionRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2GetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2SendEmailActionByorderTypeorderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderV2getByorderNbr method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetByorderNbrRequest::class => MockResponse::make([
            'projectCd' => 'String value',
            'printDescriptionOnInvoice' => true,
            'printNoteOnExternalDocuments' => true,
            'printNoteOnInternalDocuments' => true,
            'soBillingContact' => null,
            'soBillingAddress' => null,
            'customerVatzone' => null,
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04.065Z',
            'terms' => null,
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'String value',
            'salesPerson' => null,
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => null,
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => null,
            'soShippingAddress' => null,
            'schedShipment' => '2025-11-22T10:40:04.065Z',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04.065Z',
            'canceled' => true,
            'preferredWarehouse' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'priority' => 42,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'paymentRef' => 'String value',
            'isRotRutDeductible' => true,
            'emailed' => true,
            'lines' => [],
            'shipments' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 3.14,
            'orderTotalInBaseCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInBaseCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInBaseCurrency' => 3.14,
            'taxTotal' => 3.14,
            'taxTotalInBaseCurrency' => 3.14,
            'exchangeRate' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInBaseCurrency' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderV2GetByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2GetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBeTrue()
        ->printNoteOnExternalDocuments->toBeTrue()
        ->printNoteOnInternalDocuments->toBeTrue()
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBeTrue()
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBeTrue()
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBeTrue()
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->insurance->toBeTrue()
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->emailed->toBeTrue()
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderV2getAllOrdersV2collection method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetAllOrdersV2CollectionRequest::class => MockResponse::make([
            0 => [
                'projectCd' => 'String value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => null,
                'soBillingAddress' => null,
                'customerVatzone' => null,
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04.065Z',
                'terms' => null,
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'salesPerson' => null,
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => null,
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => null,
                'soShippingAddress' => null,
                'schedShipment' => '2025-11-22T10:40:04.065Z',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04.065Z',
                'canceled' => true,
                'preferredWarehouse' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'priority' => 42,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'paymentRef' => 'String value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'exchangeRate' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInBaseCurrency' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'projectCd' => 'String value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => null,
                'soBillingAddress' => null,
                'customerVatzone' => null,
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04.065Z',
                'terms' => null,
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'salesPerson' => null,
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => null,
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => null,
                'soShippingAddress' => null,
                'schedShipment' => '2025-11-22T10:40:04.065Z',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04.065Z',
                'canceled' => true,
                'preferredWarehouse' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'priority' => 42,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'paymentRef' => 'String value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'exchangeRate' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInBaseCurrency' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SalesOrderV2GetAllOrdersV2CollectionRequest(orderType: 'test string', status: 'test string', greaterThanValue: 'test string', showNotes: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SalesOrderV2GetAllOrdersV2CollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBeTrue()
        ->printNoteOnExternalDocuments->toBeTrue()
        ->printNoteOnInternalDocuments->toBeTrue()
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBeTrue()
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBeTrue()
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBeTrue()
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->insurance->toBeTrue()
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->emailed->toBeTrue()
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderV2createShipmentActionBysaleOrderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateShipmentActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest(saleOrderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->referenceNumber->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the salesOrderV2prepareInvoiceActionByorderTypeorderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\PrepareInvoiceActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest(orderType: 'test value', orderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->referenceNumber->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the salesOrderV2sendEmailActionByorderTypeorderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2SendEmailActionByorderTypeorderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SendEmailActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderV2SendEmailActionByorderTypeorderNumberRequest(orderType: 'test value', orderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2SendEmailActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the salesOrderV2cancelSalesOrderBysaleOrderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CancelSalesOrderActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest(saleOrderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the salesOrderV2reopenSalesOrderBysalesOrderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReopenSalesOrderActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest(salesOrderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
