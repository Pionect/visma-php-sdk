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
            'organizationCd' => 'String value',
            'name' => 'String value',
            'organizationType' => 'String value',
            'fileTaxByBranches' => true,
            'baseCurrency' => 'String value',
            'mainAddress' => null,
            'mainContact' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'corporateId' => 'mock-id-123',
            'vatRegistrationId' => 'mock-id-123',
            'defaultCountry' => null,
            'industryCode' => null,
            'currency' => null,
            'vatZone' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'ledger' => null,
            'bankSettings' => null,
            'branches' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
        ], 200),
    ]);

    $request = new OrganizationGetByOrganizationCdByorganizationNumberRequest(
        organizationNumber: 'test string',
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
        ->organizationCd->toBe('String value')
        ->name->toBe('String value')
        ->organizationType->toBe('String value')
        ->fileTaxByBranches->toBeTrue()
        ->baseCurrency->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the organizationGetAllCollection method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'organizationCd' => 'String value',
                'name' => 'String value',
                'organizationType' => 'String value',
                'fileTaxByBranches' => true,
                'baseCurrency' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'ledger' => null,
                'bankSettings' => null,
                'branches' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
            1 => [
                'organizationCd' => 'String value',
                'name' => 'String value',
                'organizationType' => 'String value',
                'fileTaxByBranches' => true,
                'baseCurrency' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'ledger' => null,
                'bankSettings' => null,
                'branches' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
        ], 200),
    ]);

    $request = (new OrganizationGetAllCollectionRequest(expandBranches: true, expandBankSettings: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', greaterThanValue: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (OrganizationGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->organizationCd->toBe('String value')
        ->name->toBe('String value')
        ->organizationType->toBe('String value')
        ->fileTaxByBranches->toBeTrue()
        ->baseCurrency->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
