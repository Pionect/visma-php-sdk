<?php

use Pionect\VismaSdk\Requests\Ledger\LedgerGetAllLedgersRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the ledgerGetAllLedgersRequest method in the Ledger resource', function () {
    Saloon::fake([
        LedgerGetAllLedgersRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'description' => 'String value',
                'balanceType' => 'String value',
                'currencyId' => 'mock-id-123',
                'consolidationSource' => true,
                'consolBranch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'branchAccounting' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'postInterCompany' => true,
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'description' => 'String value',
                'balanceType' => 'String value',
                'currencyId' => 'mock-id-123',
                'consolidationSource' => true,
                'consolBranch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'branchAccounting' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'postInterCompany' => true,
            ],
        ], 200),
    ]);

    $request = new LedgerGetAllLedgersRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LedgerGetAllLedgersRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->description->toBe('String value')
        ->balanceType->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->consolidationSource->toBe(true)
        ->consolBranch->number->toBe('String value')
        ->consolBranch->name->toBe('String value')
        ->branchAccounting->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postInterCompany->toBe(true);
});
