<?php

use Pionect\VismaSdk\Dto\ShipmentCreateDto;
use Pionect\VismaSdk\Dto\ShipmentDetailLineAddDto;
use Pionect\VismaSdk\Dto\ShipmentSOLine;
use Pionect\VismaSdk\Dto\ShipmentSOOrder;
use Pionect\VismaSdk\Dto\ShipmentUpdateDeleteLineDto;
use Pionect\VismaSdk\Dto\ShipmentUpdateDto;
use Pionect\VismaSdk\Requests\Shipment\ShipmentAddLineByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentAddSolineByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentAddSoorderByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentCancelShipmentByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentConfirmShipmentByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentCorrectShipmentByshipmentNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentDeleteLineByshipmentNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentGetAllShipmentsRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentGetByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentPostRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentPrintPickListByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentPrintShipmentConfirmationByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Shipment\ShipmentPutByshipmentNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the shipmentGetByshipmentNbrRequest method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentGetByshipmentNbrRequest::class => MockResponse::make([
            'timeStamp' => 'String value',
            'shipmentNumber' => 'String value',
            'shipmentType' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'operation' => 'String value',
            'shipmentDate' => '2025-11-22T10:40:04+00:00',
            'customer' => null,
            'location' => null,
            'fromWarehouse' => null,
            'toWarehouse' => null,
            'currencyId' => 'mock-id-123',
            'owner' => null,
            'shippedQuantity' => 42,
            'shippedWeight' => 42,
            'shippedVolume' => 42,
            'packages' => 42,
            'packagesWeight' => 42,
            'packagesVolume' => 42,
            'controlQuantity' => 42,
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
            'freightCost' => 42,
            'freightAmt' => 42,
            'transactionType' => null,
            'modeOfTrasport' => null,
            'container' => true,
            'shipmentDetailLines' => [],
            'shipmentOrderLines' => [],
            'shipmentPackageLines' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 42,
            'customDec2' => 42,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ShipmentGetByshipmentNbrRequest(
        shipmentNbr: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentGetByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->timeStamp->toBe('String value')
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(42)
        ->shippedWeight->toBe(42)
        ->shippedVolume->toBe(42)
        ->packages->toBe(42)
        ->packagesWeight->toBe(42)
        ->packagesVolume->toBe(42)
        ->controlQuantity->toBe(42)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(42)
        ->freightAmt->toBe(42)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentPutByshipmentNbrRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentUpdateDto(
        shipmentType: 'String value',
        operation: 'String value',
        shipmentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        location: 'String value',
        customer: 'String value',
        owner: 'String value',
        hold: true,
        fromWarehouse: 'String value',
        toWarehouse: 'String value',
        controlQuantity: 42,
        overrideContact: true,
        businessName: 'String value',
        attention: 'String value',
        phone1: 'String value',
        email: 'test@example.com',
        overrideAddress: true,
        addressLine1: 'String value',
        addressLine2: 'String value',
        addressLine3: 'String value',
        city: 'String value',
        country: 'String value',
        county: 'String value',
        postalCode: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        useCustomerAccount: true,
        insurance: true,
        freightAmt: 42,
        freightCost: 42,
        transactionType: 42,
        modeOfTrasport: 'String value',
        container: true,
        note: 'String value',
        shipmentDetailLines: [],
        shipmentPackageLines: [],
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00')
    );

    Saloon::fake([
        ShipmentPutByshipmentNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentPutByshipmentNbrRequest(
        shipmentNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentPutByshipmentNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentGetAllShipmentsRequest method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentGetAllShipmentsRequest::class => MockResponse::make([
            0 => [
                'timeStamp' => 'String value',
                'shipmentNumber' => 'String value',
                'shipmentType' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'operation' => 'String value',
                'shipmentDate' => '2025-11-22T10:40:04+00:00',
                'customer' => null,
                'location' => null,
                'fromWarehouse' => null,
                'toWarehouse' => null,
                'currencyId' => 'mock-id-123',
                'owner' => null,
                'shippedQuantity' => 42,
                'shippedWeight' => 42,
                'shippedVolume' => 42,
                'packages' => 42,
                'packagesWeight' => 42,
                'packagesVolume' => 42,
                'controlQuantity' => 42,
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
                'freightCost' => 42,
                'freightAmt' => 42,
                'transactionType' => null,
                'modeOfTrasport' => null,
                'container' => true,
                'shipmentDetailLines' => [],
                'shipmentOrderLines' => [],
                'shipmentPackageLines' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'timeStamp' => 'String value',
                'shipmentNumber' => 'String value',
                'shipmentType' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'operation' => 'String value',
                'shipmentDate' => '2025-11-22T10:40:04+00:00',
                'customer' => null,
                'location' => null,
                'fromWarehouse' => null,
                'toWarehouse' => null,
                'currencyId' => 'mock-id-123',
                'owner' => null,
                'shippedQuantity' => 42,
                'shippedWeight' => 42,
                'shippedVolume' => 42,
                'packages' => 42,
                'packagesWeight' => 42,
                'packagesVolume' => 42,
                'controlQuantity' => 42,
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
                'freightCost' => 42,
                'freightAmt' => 42,
                'transactionType' => null,
                'modeOfTrasport' => null,
                'container' => true,
                'shipmentDetailLines' => [],
                'shipmentOrderLines' => [],
                'shipmentPackageLines' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ShipmentGetAllShipmentsRequest(
        customerId: 123,
        customerNumber: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        status: 'test string',
        pageSize: 123,
        pageNumber: 123,
        shipmentType: 'test string',
        shipmentDate: 'test string',
        shipmentDateCondition: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentGetAllShipmentsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->timeStamp->toBe('String value')
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(42)
        ->shippedWeight->toBe(42)
        ->shippedVolume->toBe(42)
        ->packages->toBe(42)
        ->packagesWeight->toBe(42)
        ->packagesVolume->toBe(42)
        ->controlQuantity->toBe(42)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(42)
        ->freightAmt->toBe(42)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentPostRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentCreateDto(
        shipmentType: 'String value',
        operation: 'String value',
        shipmentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        location: 'String value',
        customer: 'String value',
        owner: 'String value',
        hold: true,
        fromWarehouse: 'String value',
        toWarehouse: 'String value',
        controlQuantity: 42,
        overrideContact: true,
        businessName: 'String value',
        attention: 'String value',
        phone1: 'String value',
        email: 'test@example.com',
        overrideAddress: true,
        addressLine1: 'String value',
        addressLine2: 'String value',
        addressLine3: 'String value',
        city: 'String value',
        country: 'String value',
        county: 'String value',
        postalCode: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        useCustomerAccount: true,
        insurance: true,
        freightAmt: 42,
        freightCost: 42,
        transactionType: 42,
        modeOfTrasport: 'String value',
        container: true,
        note: 'String value',
        shipmentDetailLines: [],
        shipmentPackageLines: [],
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00')
    );

    Saloon::fake([
        ShipmentPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentPrintShipmentConfirmationByshipmentNbrRequest method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentPrintShipmentConfirmationByshipmentNbrRequest::class => MockResponse::make([
            'timeStamp' => 'String value',
            'shipmentNumber' => 'String value',
            'shipmentType' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'operation' => 'String value',
            'shipmentDate' => '2025-11-22T10:40:04+00:00',
            'customer' => null,
            'location' => null,
            'fromWarehouse' => null,
            'toWarehouse' => null,
            'currencyId' => 'mock-id-123',
            'owner' => null,
            'shippedQuantity' => 42,
            'shippedWeight' => 42,
            'shippedVolume' => 42,
            'packages' => 42,
            'packagesWeight' => 42,
            'packagesVolume' => 42,
            'controlQuantity' => 42,
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
            'freightCost' => 42,
            'freightAmt' => 42,
            'transactionType' => null,
            'modeOfTrasport' => null,
            'container' => true,
            'shipmentDetailLines' => [],
            'shipmentOrderLines' => [],
            'shipmentPackageLines' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 42,
            'customDec2' => 42,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ShipmentPrintShipmentConfirmationByshipmentNbrRequest(
        shipmentNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentPrintShipmentConfirmationByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->timeStamp->toBe('String value')
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(42)
        ->shippedWeight->toBe(42)
        ->shippedVolume->toBe(42)
        ->packages->toBe(42)
        ->packagesWeight->toBe(42)
        ->packagesVolume->toBe(42)
        ->controlQuantity->toBe(42)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(42)
        ->freightAmt->toBe(42)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentPrintPickListByshipmentNbrRequest method in the Shipment resource', function () {
    Saloon::fake([
        ShipmentPrintPickListByshipmentNbrRequest::class => MockResponse::make([
            'timeStamp' => 'String value',
            'shipmentNumber' => 'String value',
            'shipmentType' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'operation' => 'String value',
            'shipmentDate' => '2025-11-22T10:40:04+00:00',
            'customer' => null,
            'location' => null,
            'fromWarehouse' => null,
            'toWarehouse' => null,
            'currencyId' => 'mock-id-123',
            'owner' => null,
            'shippedQuantity' => 42,
            'shippedWeight' => 42,
            'shippedVolume' => 42,
            'packages' => 42,
            'packagesWeight' => 42,
            'packagesVolume' => 42,
            'controlQuantity' => 42,
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
            'freightCost' => 42,
            'freightAmt' => 42,
            'transactionType' => null,
            'modeOfTrasport' => null,
            'container' => true,
            'shipmentDetailLines' => [],
            'shipmentOrderLines' => [],
            'shipmentPackageLines' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 42,
            'customDec2' => 42,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ShipmentPrintPickListByshipmentNbrRequest(
        shipmentNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentPrintPickListByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->timeStamp->toBe('String value')
        ->shipmentNumber->toBe('String value')
        ->shipmentType->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->operation->toBe('String value')
        ->shipmentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customer->toBeNull()
        ->location->toBeNull()
        ->fromWarehouse->toBeNull()
        ->toWarehouse->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->owner->toBeNull()
        ->shippedQuantity->toBe(42)
        ->shippedWeight->toBe(42)
        ->shippedVolume->toBe(42)
        ->packages->toBe(42)
        ->packagesWeight->toBe(42)
        ->packagesVolume->toBe(42)
        ->controlQuantity->toBe(42)
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->useCustomerAccount->toBe(true)
        ->insurance->toBe(true)
        ->freightCost->toBe(42)
        ->freightAmt->toBe(42)
        ->transactionType->toBeNull()
        ->modeOfTrasport->toBeNull()
        ->container->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the shipmentAddSolineByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentSOLine(
        name: 'Mock value'
    );

    Saloon::fake([
        ShipmentAddSolineByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentAddSolineByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentAddSolineByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentAddSoorderByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentSOOrder(
        name: 'Mock value'
    );

    Saloon::fake([
        ShipmentAddSoorderByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentAddSoorderByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentAddSoorderByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentConfirmShipmentByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = [];

    Saloon::fake([
        ShipmentConfirmShipmentByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentConfirmShipmentByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentConfirmShipmentByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentCorrectShipmentByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = [];

    Saloon::fake([
        ShipmentCorrectShipmentByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentCorrectShipmentByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentCorrectShipmentByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentAddLineByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentDetailLineAddDto(
        operation: 'String value',
        inventoryNumber: 'String value',
        lineNumber: 42,
        warehouse: 'String value',
        location: 'String value',
        uom: 'String value',
        shippedQty: 42,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00')
    );

    Saloon::fake([
        ShipmentAddLineByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentAddLineByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentAddLineByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentDeleteLineByshipmentNumberlineNumberRequest method in the Shipment resource', function () {
    $bodyData = new ShipmentUpdateDeleteLineDto(
        deleteSoline: true
    );

    Saloon::fake([
        ShipmentDeleteLineByshipmentNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentDeleteLineByshipmentNumberlineNumberRequest(
        shipmentNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentDeleteLineByshipmentNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the shipmentCancelShipmentByshipmentNumberRequest method in the Shipment resource', function () {
    $bodyData = [];

    Saloon::fake([
        ShipmentCancelShipmentByshipmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ShipmentCancelShipmentByshipmentNumberRequest(
        shipmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ShipmentCancelShipmentByshipmentNumberRequest::class);

    expect($response->status())->toBe(201);
});
