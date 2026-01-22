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
            'data' => [
                0 => [
                    'type' => 'ledgers',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'internalId' => 42,
                        'number' => 'Mock value',
                        'description' => 'Mock value',
                        'balanceType' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'consolidationSource' => true,
                        'consolBranch' => 'Mock value',
                        'branchAccounting' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'postInterCompany' => true,
                    ],
                ],
                1 => [
                    'type' => 'ledgers',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'internalId' => 42,
                        'number' => 'Mock value',
                        'description' => 'Mock value',
                        'balanceType' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'consolidationSource' => true,
                        'consolBranch' => 'Mock value',
                        'branchAccounting' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'postInterCompany' => true,
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new LedgerGetAllLedgersCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (LedgerGetAllLedgersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->description->toBe('Mock value')
        ->balanceType->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->consolidationSource->toBe(true)
        ->consolBranch->toBe('Mock value')
        ->branchAccounting->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postInterCompany->toBe(true);
});
