<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Organization\OrganizationGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Organization\OrganizationGetByOrganizationCdByorganizationNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the organizationGetByOrganizationCdByorganizationNumber method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetByOrganizationCdByorganizationNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'organizations',
                'id' => 'mock-id-123',
                'attributes' => [
                    'organizationCd' => 'Mock value',
                    'name' => 'Mock value',
                    'organizationType' => 'Mock value',
                    'fileTaxByBranches' => true,
                    'baseCurrency' => 'Mock value',
                    'mainAddress' => 'Mock value',
                    'mainContact' => 'Mock value',
                    'deliveryAddress' => 'Mock value',
                    'deliveryContact' => 'Mock value',
                    'corporateId' => 'mock-id-123',
                    'vatRegistrationId' => 'mock-id-123',
                    'defaultCountry' => 'Mock value',
                    'industryCode' => 'Mock value',
                    'currency' => 'Mock value',
                    'vatZone' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'ledger' => 'Mock value',
                    'bankSettings' => 'Mock value',
                    'branches' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new OrganizationGetByOrganizationCdByorganizationNumberRequest(
        organizationNumberId: 'test string',
        expandBranches: true,
        expandBankSettings: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        greaterThanValue: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationGetByOrganizationCdByorganizationNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->organizationCd->toBe('Mock value')
        ->name->toBe('Mock value')
        ->organizationType->toBe('Mock value')
        ->fileTaxByBranches->toBe(true)
        ->baseCurrency->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->toBe('Mock value')
        ->industryCode->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->ledger->toBe('Mock value')
        ->bankSettings->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the organizationGetAllCollection method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'organizations',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'organizationCd' => 'Mock value',
                        'name' => 'Mock value',
                        'organizationType' => 'Mock value',
                        'fileTaxByBranches' => true,
                        'baseCurrency' => 'Mock value',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'corporateId' => 'mock-id-123',
                        'vatRegistrationId' => 'mock-id-123',
                        'defaultCountry' => 'Mock value',
                        'industryCode' => 'Mock value',
                        'currency' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'ledger' => 'Mock value',
                        'bankSettings' => 'Mock value',
                        'branches' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'organizations',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'organizationCd' => 'Mock value',
                        'name' => 'Mock value',
                        'organizationType' => 'Mock value',
                        'fileTaxByBranches' => true,
                        'baseCurrency' => 'Mock value',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'corporateId' => 'mock-id-123',
                        'vatRegistrationId' => 'mock-id-123',
                        'defaultCountry' => 'Mock value',
                        'industryCode' => 'Mock value',
                        'currency' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'ledger' => 'Mock value',
                        'bankSettings' => 'Mock value',
                        'branches' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new OrganizationGetAllCollectionRequest(expandBranches: true, expandBankSettings: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', greaterThanValue: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (OrganizationGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->organizationCd->toBe('Mock value')
        ->name->toBe('Mock value')
        ->organizationType->toBe('Mock value')
        ->fileTaxByBranches->toBe(true)
        ->baseCurrency->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->toBe('Mock value')
        ->industryCode->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->ledger->toBe('Mock value')
        ->bankSettings->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
