<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\GeneralLedgerTransactions\GeneralLedgerTransactionsGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the generalLedgerTransactionsGetAllCollection method in the GeneralLedgerTransactions resource', function () {
    Saloon::fake([
        GeneralLedgerTransactionsGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'lineNumber' => 42,
                'module' => 'Mock value',
                'batchNumber' => 'Mock value',
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'period' => 'Mock value',
                'description' => 'Mock value',
                'refNumber' => 'Mock value',
                'branch' => 'Mock value',
                'account' => 'Mock value',
                'ledger' => 'Mock value',
                'subaccount' => 'Mock value',
                'begBalance' => 3.14,
                'debitAmount' => 3.14,
                'creditAmount' => 3.14,
                'endingBalance' => 3.14,
                'currency' => 'Mock value',
                'currBegBalance' => 3.14,
                'currDebitAmount' => 3.14,
                'currCreditAmount' => 3.14,
                'currEndingBalance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'lineNumber' => 42,
                'module' => 'Mock value',
                'batchNumber' => 'Mock value',
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'period' => 'Mock value',
                'description' => 'Mock value',
                'refNumber' => 'Mock value',
                'branch' => 'Mock value',
                'account' => 'Mock value',
                'ledger' => 'Mock value',
                'subaccount' => 'Mock value',
                'begBalance' => 3.14,
                'debitAmount' => 3.14,
                'creditAmount' => 3.14,
                'endingBalance' => 3.14,
                'currency' => 'Mock value',
                'currBegBalance' => 3.14,
                'currDebitAmount' => 3.14,
                'currCreditAmount' => 3.14,
                'currEndingBalance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new GeneralLedgerTransactionsGetAllCollectionRequest(branch: 'test string', ledger: 'test string', fromPeriod: 'test string', toPeriod: 'test string', account: 'test string', subaccountId: 'test string', fromDate: 'test string', toDate: 'test string', includeUnposted: true, includeUnreleased: true, skipRecords: 123, numberToRead: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAccountInfo: true, expandBranchInfo: true, includeTransactionBalance: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (GeneralLedgerTransactionsGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->lineNumber->toBe(42)
        ->module->toBe('Mock value')
        ->batchNumber->toBe('Mock value')
        ->tranDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->period->toBe('Mock value')
        ->description->toBe('Mock value')
        ->refNumber->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->account->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->begBalance->toBe(3.14)
        ->debitAmount->toBe(3.14)
        ->creditAmount->toBe(3.14)
        ->endingBalance->toBe(3.14)
        ->currency->toBe('Mock value')
        ->currBegBalance->toBe(3.14)
        ->currDebitAmount->toBe(3.14)
        ->currCreditAmount->toBe(3.14)
        ->currEndingBalance->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
