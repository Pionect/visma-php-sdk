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
            'data' => [
                'type' => 'shipments',
                'id' => 'mock-id-123',
                'attributes' => [
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'shipmentNumber' => 'Mock value',
                    'shipmentType' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'operation' => 'Mock value',
                    'shipmentDate' => '2025-11-22T10:40:04.065Z',
                    'customer' => 'Mock value',
                    'location' => 'Mock value',
                    'fromWarehouse' => 'Mock value',
                    'toWarehouse' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'owner' => 'Mock value',
                    'shippedQuantity' => 3.14,
                    'shippedWeight' => 3.14,
                    'shippedVolume' => 3.14,
                    'packages' => 42,
                    'packagesWeight' => 3.14,
                    'packagesVolume' => 3.14,
                    'controlQuantity' => 3.14,
                    'deliveryAddress' => 'Mock value',
                    'deliveryContact' => 'Mock value',
                    'shipVia' => 'Mock value',
                    'fobPoint' => 'Mock value',
                    'shippingTerms' => 'Mock value',
                    'shippingZone' => 'Mock value',
                    'residentialDelivery' => true,
                    'saturdayDelivery' => true,
                    'useCustomerAccount' => true,
                    'insurance' => true,
                    'freightCost' => 3.14,
                    'freightAmt' => 3.14,
                    'transactionType' => 'Mock value',
                    'modeOfTrasport' => 'Mock value',
                    'container' => true,
                    'shipmentDetailLines' => [],
                    'shipmentOrderLines' => [],
                    'shipmentPackageLines' => [],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'note' => 'Mock value',
                    'customStr1' => 'Mock value',
                    'customStr2' => 'Mock value',
                    'customStr3' => 'Mock value',
                    'customStr4' => 'Mock value',
                    'customStr5' => 'Mock value',
                    'customDec1' => 3.14,
                    'customDec2' => 3.14,
                    'customInt1' => 42,
                    'customInt2' => 42,
                    'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
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
        ->shipmentNumber->toBe('Mock value')
        ->shipmentType->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->operation->toBe('Mock value')
        ->shipmentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customer->toBe('Mock value')
        ->location->toBe('Mock value')
        ->fromWarehouse->toBe('Mock value')
        ->toWarehouse->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->owner->toBe('Mock value')
        ->shippedQuantity->toBe(3.14)
        ->shippedWeight->toBe(3.14)
        ->shippedVolume->toBe(3.14)
        ->packages->toBe(42)
        ->packagesWeight->toBe(3.14)
        ->packagesVolume->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(3.14)
        ->freightAmt->toBe(3.14)
        ->transactionType->toBe('Mock value')
        ->modeOfTrasport->toBe('Mock value')
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->customStr1->toBe('Mock value')
        ->customStr2->toBe('Mock value')
        ->customStr3->toBe('Mock value')
        ->customStr4->toBe('Mock value')
        ->customStr5->toBe('Mock value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the shipmentGetAllShipmentsCollection method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentGetAllShipmentsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'shipments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'shipmentNumber' => 'Mock value',
                        'shipmentType' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'operation' => 'Mock value',
                        'shipmentDate' => '2025-11-22T10:40:04.065Z',
                        'customer' => 'Mock value',
                        'location' => 'Mock value',
                        'fromWarehouse' => 'Mock value',
                        'toWarehouse' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'owner' => 'Mock value',
                        'shippedQuantity' => 3.14,
                        'shippedWeight' => 3.14,
                        'shippedVolume' => 3.14,
                        'packages' => 42,
                        'packagesWeight' => 3.14,
                        'packagesVolume' => 3.14,
                        'controlQuantity' => 3.14,
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'shipVia' => 'Mock value',
                        'fobPoint' => 'Mock value',
                        'shippingTerms' => 'Mock value',
                        'shippingZone' => 'Mock value',
                        'residentialDelivery' => true,
                        'saturdayDelivery' => true,
                        'useCustomerAccount' => true,
                        'insurance' => true,
                        'freightCost' => 3.14,
                        'freightAmt' => 3.14,
                        'transactionType' => 'Mock value',
                        'modeOfTrasport' => 'Mock value',
                        'container' => true,
                        'shipmentDetailLines' => [],
                        'shipmentOrderLines' => [],
                        'shipmentPackageLines' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'note' => 'Mock value',
                        'customStr1' => 'Mock value',
                        'customStr2' => 'Mock value',
                        'customStr3' => 'Mock value',
                        'customStr4' => 'Mock value',
                        'customStr5' => 'Mock value',
                        'customDec1' => 3.14,
                        'customDec2' => 3.14,
                        'customInt1' => 42,
                        'customInt2' => 42,
                        'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'shipments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'shipmentNumber' => 'Mock value',
                        'shipmentType' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'operation' => 'Mock value',
                        'shipmentDate' => '2025-11-22T10:40:04.065Z',
                        'customer' => 'Mock value',
                        'location' => 'Mock value',
                        'fromWarehouse' => 'Mock value',
                        'toWarehouse' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'owner' => 'Mock value',
                        'shippedQuantity' => 3.14,
                        'shippedWeight' => 3.14,
                        'shippedVolume' => 3.14,
                        'packages' => 42,
                        'packagesWeight' => 3.14,
                        'packagesVolume' => 3.14,
                        'controlQuantity' => 3.14,
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'shipVia' => 'Mock value',
                        'fobPoint' => 'Mock value',
                        'shippingTerms' => 'Mock value',
                        'shippingZone' => 'Mock value',
                        'residentialDelivery' => true,
                        'saturdayDelivery' => true,
                        'useCustomerAccount' => true,
                        'insurance' => true,
                        'freightCost' => 3.14,
                        'freightAmt' => 3.14,
                        'transactionType' => 'Mock value',
                        'modeOfTrasport' => 'Mock value',
                        'container' => true,
                        'shipmentDetailLines' => [],
                        'shipmentOrderLines' => [],
                        'shipmentPackageLines' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'note' => 'Mock value',
                        'customStr1' => 'Mock value',
                        'customStr2' => 'Mock value',
                        'customStr3' => 'Mock value',
                        'customStr4' => 'Mock value',
                        'customStr5' => 'Mock value',
                        'customDec1' => 3.14,
                        'customDec2' => 3.14,
                        'customInt1' => 42,
                        'customInt2' => 42,
                        'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ShipmentGetAllShipmentsCollectionRequest(customerId: 123, customerNumber: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', status: 'test string', pageSize: 123, pageNumber: 123, shipmentType: 'test string', shipmentDate: 'test string', shipmentDateCondition: 'test string', includeCustomFreeFields: true));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ShipmentGetAllShipmentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipmentNumber->toBe('Mock value')
        ->shipmentType->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->operation->toBe('Mock value')
        ->shipmentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customer->toBe('Mock value')
        ->location->toBe('Mock value')
        ->fromWarehouse->toBe('Mock value')
        ->toWarehouse->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->owner->toBe('Mock value')
        ->shippedQuantity->toBe(3.14)
        ->shippedWeight->toBe(3.14)
        ->shippedVolume->toBe(3.14)
        ->packages->toBe(42)
        ->packagesWeight->toBe(3.14)
        ->packagesVolume->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(3.14)
        ->freightAmt->toBe(3.14)
        ->transactionType->toBe('Mock value')
        ->modeOfTrasport->toBe('Mock value')
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->customStr1->toBe('Mock value')
        ->customStr2->toBe('Mock value')
        ->customStr3->toBe('Mock value')
        ->customStr4->toBe('Mock value')
        ->customStr5->toBe('Mock value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
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
