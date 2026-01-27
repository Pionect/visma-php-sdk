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
            0 => [
                'branch' => null,
                'ledger' => null,
                'balanceType' => 'String value',
                'financialPeriod' => 'String value',
                'account' => null,
                'subaccountId' => 'mock-id-123',
                'subAccountCd' => 'String value',
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
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'branch' => null,
                'ledger' => null,
                'balanceType' => 'String value',
                'financialPeriod' => 'String value',
                'account' => null,
                'subaccountId' => 'mock-id-123',
                'subAccountCd' => 'String value',
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
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest(periodId: 'test string', account: 'test string', ledger: 'test string', branch: 'test string', balanceType: 'test string', toggleBalanceSigns: true, lastModifiedDateTime: 'test string', excludeYtdaccount: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (GeneralLedgerBalanceV2GetGeneralLedgerBalancesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->branch->toBeNull()
        ->ledger->toBeNull()
        ->balanceType->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->account->toBeNull()
        ->subaccountId->toBe('mock-id-123')
        ->subAccountCd->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->periodToDateDebit->toBe(3.14)
        ->periodToDateCredit->toBe(3.14)
        ->beginningBalance->toBe(3.14)
        ->yearToDateBalance->toBe(3.14)
        ->periodToDateDebitInCurrency->toBe(3.14)
        ->periodToDateCreditInCurrency->toBe(3.14)
        ->beginningBalanceInCurrency->toBe(3.14)
        ->yearToDateBalanceInCurrency->toBe(3.14)
        ->yearClosed->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
