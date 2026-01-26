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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesOrderV2getByorderNbr method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetByorderNbrRequest::class => MockResponse::make([
            'projectCd' => 'Mock value',
            'printDescriptionOnInvoice' => true,
            'printNoteOnExternalDocuments' => true,
            'printNoteOnInternalDocuments' => true,
            'soBillingContact' => 'Mock value',
            'soBillingAddress' => 'Mock value',
            'customerVatzone' => 'Mock value',
            'invoiceSeparately' => true,
            'invoiceNbr' => 'Mock value',
            'invoiceDate' => '2025-11-22T10:40:04.065Z',
            'terms' => 'Mock value',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'Mock value',
            'salesPerson' => 'Mock value',
            'commissionPercent' => 'Mock value',
            'commissionAmount' => 'Mock value',
            'commissionableAmount' => 'Mock value',
            'owner' => 'Mock value',
            'origOrderType' => 'Mock value',
            'origOrderNbr' => 'Mock value',
            'soShippingContact' => 'Mock value',
            'soShippingAddress' => 'Mock value',
            'schedShipment' => '2025-11-22T10:40:04.065Z',
            'shipSeparately' => true,
            'shipComplete' => 'Mock value',
            'cancelBy' => '2025-11-22T10:40:04.065Z',
            'canceled' => true,
            'preferredWarehouse' => 'Mock value',
            'shipVia' => 'Mock value',
            'fobPoint' => 'Mock value',
            'priority' => 42,
            'shippingTerms' => 'Mock value',
            'shippingZone' => 'Mock value',
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => 'Mock value',
            'paymentMethod' => 'Mock value',
            'cashAccount' => 'Mock value',
            'paymentRef' => 'Mock value',
            'isRotRutDeductible' => true,
            'emailed' => true,
            'lines' => [],
            'shipments' => [],
            'orderType' => 'Mock value',
            'orderNo' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'Mock value',
            'customerRefNo' => 'Mock value',
            'customer' => 'Mock value',
            'contactId' => 42,
            'location' => 'Mock value',
            'currency' => 'Mock value',
            'description' => 'Mock value',
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
            'branchNumber' => 'Mock value',
            'note' => 'Mock value',
            'attachments' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesOrderV2GetByorderNbrRequest(
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2GetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('Mock value')
        ->printDescriptionOnInvoice->toBeTrue()
        ->printNoteOnExternalDocuments->toBeTrue()
        ->printNoteOnInternalDocuments->toBeTrue()
        ->soBillingContact->toBe('Mock value')
        ->soBillingAddress->toBe('Mock value')
        ->customerVatzone->toBe('Mock value')
        ->invoiceSeparately->toBeTrue()
        ->invoiceNbr->toBe('Mock value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->commissionPercent->toBe('Mock value')
        ->commissionAmount->toBe('Mock value')
        ->commissionableAmount->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->origOrderType->toBe('Mock value')
        ->origOrderNbr->toBe('Mock value')
        ->soShippingContact->toBe('Mock value')
        ->soShippingAddress->toBe('Mock value')
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBeTrue()
        ->shipComplete->toBe('Mock value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBeTrue()
        ->preferredWarehouse->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->priority->toBe(42)
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->insurance->toBeTrue()
        ->transactionType->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->isRotRutDeductible->toBeTrue()
        ->emailed->toBeTrue()
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
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
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderV2getAllOrdersV2collection method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetAllOrdersV2CollectionRequest::class => MockResponse::make([
            0 => [
                'projectCd' => 'Mock value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => 'Mock value',
                'soBillingAddress' => 'Mock value',
                'customerVatzone' => 'Mock value',
                'invoiceSeparately' => true,
                'invoiceNbr' => 'Mock value',
                'invoiceDate' => '2025-11-22T10:40:04.065Z',
                'terms' => 'Mock value',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'salesPerson' => 'Mock value',
                'commissionPercent' => 'Mock value',
                'commissionAmount' => 'Mock value',
                'commissionableAmount' => 'Mock value',
                'owner' => 'Mock value',
                'origOrderType' => 'Mock value',
                'origOrderNbr' => 'Mock value',
                'soShippingContact' => 'Mock value',
                'soShippingAddress' => 'Mock value',
                'schedShipment' => '2025-11-22T10:40:04.065Z',
                'shipSeparately' => true,
                'shipComplete' => 'Mock value',
                'cancelBy' => '2025-11-22T10:40:04.065Z',
                'canceled' => true,
                'preferredWarehouse' => 'Mock value',
                'shipVia' => 'Mock value',
                'fobPoint' => 'Mock value',
                'priority' => 42,
                'shippingTerms' => 'Mock value',
                'shippingZone' => 'Mock value',
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'paymentRef' => 'Mock value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'Mock value',
                'orderNo' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'Mock value',
                'customerRefNo' => 'Mock value',
                'customer' => 'Mock value',
                'contactId' => 42,
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'description' => 'Mock value',
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
                'branchNumber' => 'Mock value',
                'note' => 'Mock value',
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'projectCd' => 'Mock value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => 'Mock value',
                'soBillingAddress' => 'Mock value',
                'customerVatzone' => 'Mock value',
                'invoiceSeparately' => true,
                'invoiceNbr' => 'Mock value',
                'invoiceDate' => '2025-11-22T10:40:04.065Z',
                'terms' => 'Mock value',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'salesPerson' => 'Mock value',
                'commissionPercent' => 'Mock value',
                'commissionAmount' => 'Mock value',
                'commissionableAmount' => 'Mock value',
                'owner' => 'Mock value',
                'origOrderType' => 'Mock value',
                'origOrderNbr' => 'Mock value',
                'soShippingContact' => 'Mock value',
                'soShippingAddress' => 'Mock value',
                'schedShipment' => '2025-11-22T10:40:04.065Z',
                'shipSeparately' => true,
                'shipComplete' => 'Mock value',
                'cancelBy' => '2025-11-22T10:40:04.065Z',
                'canceled' => true,
                'preferredWarehouse' => 'Mock value',
                'shipVia' => 'Mock value',
                'fobPoint' => 'Mock value',
                'priority' => 42,
                'shippingTerms' => 'Mock value',
                'shippingZone' => 'Mock value',
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'paymentRef' => 'Mock value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'Mock value',
                'orderNo' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'Mock value',
                'customerRefNo' => 'Mock value',
                'customer' => 'Mock value',
                'contactId' => 42,
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'description' => 'Mock value',
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
                'branchNumber' => 'Mock value',
                'note' => 'Mock value',
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SalesOrderV2GetAllOrdersV2CollectionRequest(orderType: 'test string', status: 'test string', greaterThanValue: 'test string', showNotes: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesOrderV2GetAllOrdersV2CollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->projectCd->toBe('Mock value')
        ->printDescriptionOnInvoice->toBeTrue()
        ->printNoteOnExternalDocuments->toBeTrue()
        ->printNoteOnInternalDocuments->toBeTrue()
        ->soBillingContact->toBe('Mock value')
        ->soBillingAddress->toBe('Mock value')
        ->customerVatzone->toBe('Mock value')
        ->invoiceSeparately->toBeTrue()
        ->invoiceNbr->toBe('Mock value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->commissionPercent->toBe('Mock value')
        ->commissionAmount->toBe('Mock value')
        ->commissionableAmount->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->origOrderType->toBe('Mock value')
        ->origOrderNbr->toBe('Mock value')
        ->soShippingContact->toBe('Mock value')
        ->soShippingAddress->toBe('Mock value')
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBeTrue()
        ->shipComplete->toBe('Mock value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBeTrue()
        ->preferredWarehouse->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->priority->toBe(42)
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->insurance->toBeTrue()
        ->transactionType->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->isRotRutDeductible->toBeTrue()
        ->emailed->toBeTrue()
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
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
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderV2createShipmentActionBysaleOrderNumber method in the SalesOrderV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateShipmentActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'shipmentDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->shipmentDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

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
        'customerInvoiceDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest(orderTypeId: 'order_type_id-123', orderNumberId: 'order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->customerInvoiceDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

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

    $request = new SalesOrderV2SendEmailActionByorderTypeorderNumberRequest(orderTypeId: 'order_type_id-123', orderNumberId: 'order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2SendEmailActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest(salesOrderNumberId: 'sales_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
