<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\GeneralLedgerBalanceV2\GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the generalLedgerBalanceV2getGeneralLedgerBalancesCollection method in the GeneralLedgerBalanceV2 resource', function () {
    Saloon::fake([
        GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'generalLedgerBalanceV2s',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'branch' => 'Mock value',
                        'ledger' => 'Mock value',
                        'balanceType' => 'Mock value',
                        'financialPeriod' => 'Mock value',
                        'account' => 'Mock value',
                        'subaccountId' => 'mock-id-123',
                        'subAccountCd' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'periodToDateDebit' => 3.14,
                        'periodToDateCredit' => 3.14,
                        'beginningBalance' => 3.14,
                        'yearToDateBalance' => 3.14,
                        'periodToDateDebitInCurrency' => 3.14,
                        'periodToDateCreditInCurrency' => 3.14,
                        'beginningBalanceInCurrency' => 3.14,
                        'yearToDateBalanceInCurrency' => 3.14,
                        'yearClosed' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'generalLedgerBalanceV2s',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'branch' => 'Mock value',
                        'ledger' => 'Mock value',
                        'balanceType' => 'Mock value',
                        'financialPeriod' => 'Mock value',
                        'account' => 'Mock value',
                        'subaccountId' => 'mock-id-123',
                        'subAccountCd' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'periodToDateDebit' => 3.14,
                        'periodToDateCredit' => 3.14,
                        'beginningBalance' => 3.14,
                        'yearToDateBalance' => 3.14,
                        'periodToDateDebitInCurrency' => 3.14,
                        'periodToDateCreditInCurrency' => 3.14,
                        'beginningBalanceInCurrency' => 3.14,
                        'yearToDateBalanceInCurrency' => 3.14,
                        'yearClosed' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest(periodId: 'test string', account: 'test string', ledger: 'test string', branch: 'test string', balanceType: 'test string', toggleBalanceSigns: true, lastModifiedDateTime: 'test string', excludeYtdaccount: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->branch->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->balanceType->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccountId->toBe('mock-id-123')
        ->subAccountCd->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->periodToDateDebit->toBe(3.14)
        ->periodToDateCredit->toBe(3.14)
        ->beginningBalance->toBe(3.14)
        ->yearToDateBalance->toBe(3.14)
        ->periodToDateDebitInCurrency->toBe(3.14)
        ->periodToDateCreditInCurrency->toBe(3.14)
        ->beginningBalanceInCurrency->toBe(3.14)
        ->yearToDateBalanceInCurrency->toBe(3.14)
        ->yearClosed->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
