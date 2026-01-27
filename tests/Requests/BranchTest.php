<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Branch\BranchGetAllBranchesCollectionRequest;
use Pionect\VismaSdk\Requests\Branch\BranchGetSpecificBranchBybranchNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the branchGetSpecificBranchBybranchNumber method in the Branch resource', function () {
    Saloon::fake([
        BranchGetSpecificBranchBybranchNumberRequest::class => MockResponse::make([
            'branchId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'organizationId' => 42,
            'isMainBranch' => true,
            'isActive' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'corporateId' => 'mock-id-123',
            'vatRegistrationId' => 'mock-id-123',
            'mainAddress' => null,
            'mainContact' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'defaultCountry' => null,
            'industryCode' => null,
            'currency' => null,
            'vatZone' => null,
            'ledger' => null,
            'bankSettings' => null,
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new BranchGetSpecificBranchBybranchNumberRequest(
        branchNumberId: 'test string',
        expandAddress: true,
        expandContact: true,
        expandCurrency: true,
        expandVatZone: true,
        expandLedger: true,
        expandIndustryCode: true,
        expandDeliveryAddress: true,
        expandDeliveryContact: true,
        expandDefaultCountry: true,
        expandBankSettings: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BranchGetSpecificBranchBybranchNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBeTrue()
        ->isActive->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->id->toBe('mock-id-123');
});

it('calls the branchGetAllBranchesCollection method in the Branch resource', function () {
    Saloon::fake([
        BranchGetAllBranchesCollectionRequest::class => MockResponse::make([
            0 => [
                'branchId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'organizationId' => 42,
                'isMainBranch' => true,
                'isActive' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'ledger' => null,
                'bankSettings' => null,
                'id' => 'mock-id-123',
            ],
            1 => [
                'branchId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'organizationId' => 42,
                'isMainBranch' => true,
                'isActive' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'corporateId' => 'mock-id-123',
                'vatRegistrationId' => 'mock-id-123',
                'mainAddress' => null,
                'mainContact' => null,
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'defaultCountry' => null,
                'industryCode' => null,
                'currency' => null,
                'vatZone' => null,
                'ledger' => null,
                'bankSettings' => null,
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new BranchGetAllBranchesCollectionRequest(greaterThanValue: 'test string', orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAddress: true, expandContact: true, expandCurrency: true, expandVatZone: true, expandLedger: true, expandIndustryCode: true, expandDeliveryAddress: true, expandDeliveryContact: true, expandDefaultCountry: true, expandBankSettings: true));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (BranchGetAllBranchesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->branchId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->organizationId->toBe(42)
        ->isMainBranch->toBeTrue()
        ->isActive->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->corporateId->toBe('mock-id-123')
        ->vatRegistrationId->toBe('mock-id-123')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->defaultCountry->toBeNull()
        ->industryCode->toBeNull()
        ->currency->toBeNull()
        ->vatZone->toBeNull()
        ->ledger->toBeNull()
        ->bankSettings->toBeNull()
        ->id->toBe('mock-id-123');
});
