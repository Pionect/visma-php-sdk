<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Ledger\LedgerGetAllLedgersCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the ledgerGetAllLedgersCollection method in the Ledger resource', function () {
    Saloon::fake([
        LedgerGetAllLedgersCollectionRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'description' => 'String value',
                'balanceType' => 'String value',
                'currencyId' => 'mock-id-123',
                'consolidationSource' => true,
                'consolBranch' => null,
                'branchAccounting' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'postInterCompany' => true,
                'id' => 'mock-id-123',
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'description' => 'String value',
                'balanceType' => 'String value',
                'currencyId' => 'mock-id-123',
                'consolidationSource' => true,
                'consolBranch' => null,
                'branchAccounting' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'postInterCompany' => true,
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new LedgerGetAllLedgersCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (LedgerGetAllLedgersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->description->toBe('String value')
        ->balanceType->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->consolidationSource->toBeTrue()
        ->consolBranch->toBeNull()
        ->branchAccounting->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postInterCompany->toBeTrue()
        ->id->toBe('mock-id-123');
});
