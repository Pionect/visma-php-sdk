<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Shipment\ShipmentConfirmShipmentByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentGetAllShipmentsCollectionRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentGetByshipmentNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the shipmentGetByshipmentNbr method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentGetByshipmentNbrRequest::class => MockResponse::make([
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'shipmentNumber' => 'String value',
            'shipmentType' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'operation' => 'String value',
            'shipmentDate' => '2025-11-22T10:40:04.065Z',
            'customer' => null,
            'location' => null,
            'fromWarehouse' => null,
            'toWarehouse' => null,
            'currencyId' => 'mock-id-123',
            'owner' => null,
            'shippedQuantity' => 3.14,
            'shippedWeight' => 3.14,
            'shippedVolume' => 3.14,
            'packages' => 42,
            'packagesWeight' => 3.14,
            'packagesVolume' => 3.14,
            'controlQuantity' => 3.14,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'useCustomerAccount' => true,
            'insurance' => true,
            'freightCost' => 3.14,
            'freightAmt' => 3.14,
            'transactionType' => null,
            'modeOfTrasport' => null,
            'container' => true,
            'shipmentDetailLines' => [],
            'shipmentOrderLines' => [],
            'shipmentPackageLines' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 3.14,
            'customDec2' => 3.14,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ShipmentGetByshipmentNbrRequest(
        shipmentNbrId: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentGetByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(3.14)
        ->shippedWeight->toBe(3.14)
        ->shippedVolume->toBe(3.14)
        ->packages->toBe(42)
        ->packagesWeight->toBe(3.14)
        ->packagesVolume->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->useCustomerAccount->toBeTrue()
        ->insurance->toBeTrue()
        ->freightCost->toBe(3.14)
        ->freightAmt->toBe(3.14)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentGetAllShipmentsCollection method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentGetAllShipmentsCollectionRequest::class => MockResponse::make([
            0 => [
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'shipmentNumber' => 'String value',
                'shipmentType' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'operation' => 'String value',
                'shipmentDate' => '2025-11-22T10:40:04.065Z',
                'customer' => null,
                'location' => null,
                'fromWarehouse' => null,
                'toWarehouse' => null,
                'currencyId' => 'mock-id-123',
                'owner' => null,
                'shippedQuantity' => 3.14,
                'shippedWeight' => 3.14,
                'shippedVolume' => 3.14,
                'packages' => 42,
                'packagesWeight' => 3.14,
                'packagesVolume' => 3.14,
                'controlQuantity' => 3.14,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'useCustomerAccount' => true,
                'insurance' => true,
                'freightCost' => 3.14,
                'freightAmt' => 3.14,
                'transactionType' => null,
                'modeOfTrasport' => null,
                'container' => true,
                'shipmentDetailLines' => [],
                'shipmentOrderLines' => [],
                'shipmentPackageLines' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'shipmentNumber' => 'String value',
                'shipmentType' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'operation' => 'String value',
                'shipmentDate' => '2025-11-22T10:40:04.065Z',
                'customer' => null,
                'location' => null,
                'fromWarehouse' => null,
                'toWarehouse' => null,
                'currencyId' => 'mock-id-123',
                'owner' => null,
                'shippedQuantity' => 3.14,
                'shippedWeight' => 3.14,
                'shippedVolume' => 3.14,
                'packages' => 42,
                'packagesWeight' => 3.14,
                'packagesVolume' => 3.14,
                'controlQuantity' => 3.14,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'useCustomerAccount' => true,
                'insurance' => true,
                'freightCost' => 3.14,
                'freightAmt' => 3.14,
                'transactionType' => null,
                'modeOfTrasport' => null,
                'container' => true,
                'shipmentDetailLines' => [],
                'shipmentOrderLines' => [],
                'shipmentPackageLines' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ShipmentGetAllShipmentsCollectionRequest(customerId: 123, customerNumber: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', status: 'test string', pageSize: 123, pageNumber: 123, shipmentType: 'test string', shipmentDate: 'test string', shipmentDateCondition: 'test string', includeCustomFreeFields: true));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ShipmentGetAllShipmentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(3.14)
        ->shippedWeight->toBe(3.14)
        ->shippedVolume->toBe(3.14)
        ->packages->toBe(42)
        ->packagesWeight->toBe(3.14)
        ->packagesVolume->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->useCustomerAccount->toBeTrue()
        ->insurance->toBeTrue()
        ->freightCost->toBe(3.14)
        ->freightAmt->toBe(3.14)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentConfirmShipmentByshipmentNumber method in the Shipment resource', function () {
    $mockClient = Saloon::fake([
        ShipmentConfirmShipmentByshipmentNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ConfirmShipmentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ShipmentConfirmShipmentByshipmentNumberRequest(shipmentNumberId: 'shipment_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentConfirmShipmentByshipmentNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('shipments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
