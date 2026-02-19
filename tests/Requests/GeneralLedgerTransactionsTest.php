<?php

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Requests\GeneralLedgerTransactions\GeneralLedgerTransactionsGetAllRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the generalLedgerTransactionsGetAllRequest method in the GeneralLedgerTransactions resource', function () {
    Saloon::fake([
        GeneralLedgerTransactionsGetAllRequest::class => MockResponse::make([
            0 => [
                'lineNumber' => 42,
                'module' => 'String value',
                'batchNumber' => 'String value',
                'tranDate' => '2025-11-22T10:40:04+00:00',
                'period' => 'String value',
                'description' => 'String value',
                'refNumber' => 'String value',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'externalCode1info' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'externalCode2info' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'glConsolAccountCd' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'ledger' => [
                    'description' => 'String value',
                ],
                'subaccount' => 'String value',
                'begBalance' => 42,
                'debitAmount' => 42,
                'creditAmount' => 42,
                'endingBalance' => 42,
                'currency' => 'String value',
                'currBegBalance' => 42,
                'currDebitAmount' => 42,
                'currCreditAmount' => 42,
                'currEndingBalance' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'lineNumber' => 42,
                'module' => 'String value',
                'batchNumber' => 'String value',
                'tranDate' => '2025-11-22T10:40:04+00:00',
                'period' => 'String value',
                'description' => 'String value',
                'refNumber' => 'String value',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'externalCode1info' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'externalCode2info' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'glConsolAccountCd' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'ledger' => [
                    'description' => 'String value',
                ],
                'subaccount' => 'String value',
                'begBalance' => 42,
                'debitAmount' => 42,
                'creditAmount' => 42,
                'endingBalance' => 42,
                'currency' => 'String value',
                'currBegBalance' => 42,
                'currDebitAmount' => 42,
                'currCreditAmount' => 42,
                'currEndingBalance' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new GeneralLedgerTransactionsGetAllRequest(
        branch: 'test string',
        ledger: 'test string',
        fromPeriod: 'test string',
        toPeriod: 'test string',
        account: 'test string',
        subaccountId: 'test string',
        fromDate: 'test string',
        toDate: 'test string',
        includeUnposted: true,
        includeUnreleased: true,
        skipRecords: 123,
        numberToRead: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandAccountInfo: true,
        expandBranchInfo: true,
        includeTransactionBalance: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(GeneralLedgerTransactionsGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->lineNumber->toBe(42)
        ->module->toBe('String value')
        ->batchNumber->toBe('String value')
        ->tranDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->period->toBe('String value')
        ->description->toBe('String value')
        ->refNumber->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->account->type->toEqual(AccountTypeEnum::ASSET)
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->externalCode1info->number->toBe('String value')
        ->account->externalCode1info->description->toBe('String value')
        ->account->externalCode2info->number->toBe('String value')
        ->account->externalCode2info->description->toBe('String value')
        ->account->glConsolAccountCd->toBe('String value')
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->ledger->description->toBe('String value')
        ->subaccount->toBe('String value')
        ->begBalance->toBe(42)
        ->debitAmount->toBe(42)
        ->creditAmount->toBe(42)
        ->endingBalance->toBe(42)
        ->currency->toBe('String value')
        ->currBegBalance->toBe(42)
        ->currDebitAmount->toBe(42)
        ->currCreditAmount->toBe(42)
        ->currEndingBalance->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
