<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsCollectionRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsForBaccountBybAccountIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the supplierLocationGetLocationBybAccountIdlocationId method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
            'baccount' => 'Mock value',
            'locationId' => 'mock-id-123',
            'locationName' => 'Mock value',
            'active' => true,
            'address' => 'Mock value',
            'contact' => 'Mock value',
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => 'Mock value',
            'ediCode' => 'Mock value',
            'gln' => 'Mock value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationBybAccountIdlocationIdRequest(
        bAccountIdId: 'test string',
        locationIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierLocationGetLocationsForBaccountBybAccountId method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
            'baccount' => 'Mock value',
            'locationId' => 'mock-id-123',
            'locationName' => 'Mock value',
            'active' => true,
            'address' => 'Mock value',
            'contact' => 'Mock value',
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => 'Mock value',
            'ediCode' => 'Mock value',
            'gln' => 'Mock value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountIdId: 'test string',
        locationId: 'test string',
        gln: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierLocationGetLocationsCollection method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsCollectionRequest::class => MockResponse::make([
            0 => [
                'baccount' => 'Mock value',
                'locationId' => 'mock-id-123',
                'locationName' => 'Mock value',
                'active' => true,
                'address' => 'Mock value',
                'contact' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'ediCode' => 'Mock value',
                'gln' => 'Mock value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'baccount' => 'Mock value',
                'locationId' => 'mock-id-123',
                'locationName' => 'Mock value',
                'active' => true,
                'address' => 'Mock value',
                'contact' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'ediCode' => 'Mock value',
                'gln' => 'Mock value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SupplierLocationGetLocationsCollectionRequest(locationId: 'test string', gln: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierLocationGetLocationsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
