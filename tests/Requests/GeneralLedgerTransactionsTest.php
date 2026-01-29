<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\GeneralLedgerTransactions\GeneralLedgerTransactionsGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the generalLedgerTransactionsGetAllCollection method in the GeneralLedgerTransactions resource', function () {
    Saloon::fake([
        GeneralLedgerTransactionsGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'lineNumber' => 42,
                'module' => 'String value',
                'batchNumber' => 'String value',
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'period' => 'String value',
                'description' => 'String value',
                'refNumber' => 'String value',
                'branch' => null,
                'account' => null,
                'ledger' => null,
                'subaccount' => 'String value',
                'begBalance' => 3.14,
                'debitAmount' => 3.14,
                'creditAmount' => 3.14,
                'endingBalance' => 3.14,
                'currency' => 'String value',
                'currBegBalance' => 3.14,
                'currDebitAmount' => 3.14,
                'currCreditAmount' => 3.14,
                'currEndingBalance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'lineNumber' => 42,
                'module' => 'String value',
                'batchNumber' => 'String value',
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'period' => 'String value',
                'description' => 'String value',
                'refNumber' => 'String value',
                'branch' => null,
                'account' => null,
                'ledger' => null,
                'subaccount' => 'String value',
                'begBalance' => 3.14,
                'debitAmount' => 3.14,
                'creditAmount' => 3.14,
                'endingBalance' => 3.14,
                'currency' => 'String value',
                'currBegBalance' => 3.14,
                'currDebitAmount' => 3.14,
                'currCreditAmount' => 3.14,
                'currEndingBalance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new GeneralLedgerTransactionsGetAllCollectionRequest(branch: 'test string', ledger: 'test string', fromPeriod: 'test string', toPeriod: 'test string', account: 'test string', subaccountId: 'test string', fromDate: 'test string', toDate: 'test string', includeUnposted: true, includeUnreleased: true, skipRecords: 123, numberToRead: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAccountInfo: true, expandBranchInfo: true, includeTransactionBalance: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (GeneralLedgerTransactionsGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->lineNumber->toBe(42)
        ->module->toBe('String value')
        ->batchNumber->toBe('String value')
        ->tranDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->period->toBe('String value')
        ->description->toBe('String value')
        ->refNumber->toBe('String value')
        ->branch->toBeNull()
        ->account->toBeNull()
        ->ledger->toBeNull()
        ->subaccount->toBe('String value')
        ->begBalance->toBe(3.14)
        ->debitAmount->toBe(3.14)
        ->creditAmount->toBe(3.14)
        ->endingBalance->toBe(3.14)
        ->currency->toBe('String value')
        ->currBegBalance->toBe(3.14)
        ->currDebitAmount->toBe(3.14)
        ->currCreditAmount->toBe(3.14)
        ->currEndingBalance->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
