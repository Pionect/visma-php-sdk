<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsCollectionRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsForBaccountBybAccountIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierLocationGetLocationBybAccountIdlocationId method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
            'baccount' => null,
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => null,
            'contact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => null,
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierLocationGetLocationsForBaccountBybAccountId method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
            'baccount' => null,
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => null,
            'contact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => null,
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountId: 'test string',
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
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierLocationGetLocationsCollection method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsCollectionRequest::class => MockResponse::make([
            0 => [
                'baccount' => null,
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => null,
                'contact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => null,
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'baccount' => null,
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => null,
                'contact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => null,
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SupplierLocationGetLocationsCollectionRequest(locationId: 'test string', gln: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierLocationGetLocationsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
