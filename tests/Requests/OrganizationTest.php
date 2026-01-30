<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\Organization\OrganizationGetAllRequest;
use Pionect\VismaSdk\Requests\Organization\OrganizationGetByOrganizationCdByorganizationNumberRequest;
use Pionect\VismaSdk\Requests\Organization\OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the organizationGetByOrganizationCdByorganizationNumberRequest method in the Organization resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'ledger' => null,
            'bankSettings' => null,
            'branches' => [],
            'timeStamp' => 'String value',
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
        ->fileTaxByBranches->toBe(true)
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
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->timeStamp->toBe('String value');
});

it('calls the organizationGetAllRequest method in the Organization resource', function () {
    Saloon::fake([
        OrganizationGetAllRequest::class => MockResponse::make([
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'ledger' => null,
                'bankSettings' => null,
                'branches' => [],
                'timeStamp' => 'String value',
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'ledger' => null,
                'bankSettings' => null,
                'branches' => [],
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new OrganizationGetAllRequest(
        expandBranches: true,
        expandBankSettings: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        greaterThanValue: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->organizationCd->toBe('String value')
        ->name->toBe('String value')
        ->organizationType->toBe('String value')
        ->fileTaxByBranches->toBe(true)
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
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->timeStamp->toBe('String value');
});

it('calls the organizationPutBankSettingsForOrganizationByorganizationNumberRequest method in the Organization resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest(
        organizationNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(OrganizationPutBankSettingsForOrganizationByorganizationNumberRequest::class);

    expect($response->status())->toBe(201);
});
