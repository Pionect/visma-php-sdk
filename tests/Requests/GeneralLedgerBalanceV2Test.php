<?php

use Pionect\VismaSdk\Requests\GeneralLedgerBalanceV2\GeneralLedgerBalanceV2GetGeneralLedgerBalancesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the generalLedgerBalanceV2getGeneralLedgerBalancesRequest method in the GeneralLedgerBalanceV2 resource', function () {
    Saloon::fake([
        GeneralLedgerBalanceV2GetGeneralLedgerBalancesRequest::class => MockResponse::make([
            0 => [
                'branch' => null,
                'ledger' => null,
                'balanceType' => 'String value',
                'financialPeriod' => 'String value',
                'account' => null,
                'subaccountId' => 'mock-id-123',
                'subAccountCd' => 'String value',
                'currencyId' => 'mock-id-123',
                'periodToDateDebit' => 42,
                'periodToDateCredit' => 42,
                'beginningBalance' => 42,
                'yearToDateBalance' => 42,
                'periodToDateDebitInCurrency' => 42,
                'periodToDateCreditInCurrency' => 42,
                'beginningBalanceInCurrency' => 42,
                'yearToDateBalanceInCurrency' => 42,
                'yearClosed' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
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
                'periodToDateDebit' => 42,
                'periodToDateCredit' => 42,
                'beginningBalance' => 42,
                'yearToDateBalance' => 42,
                'periodToDateDebitInCurrency' => 42,
                'periodToDateCreditInCurrency' => 42,
                'beginningBalanceInCurrency' => 42,
                'yearToDateBalanceInCurrency' => 42,
                'yearClosed' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new GeneralLedgerBalanceV2GetGeneralLedgerBalancesRequest(
        periodId: 'test string',
        account: 'test string',
        ledger: 'test string',
        branch: 'test string',
        balanceType: 'test string',
        toggleBalanceSigns: true,
        lastModifiedDateTime: 'test string',
        excludeYtdaccount: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(GeneralLedgerBalanceV2GetGeneralLedgerBalancesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->branch->toBeNull()
        ->ledger->toBeNull()
        ->balanceType->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->account->toBeNull()
        ->subaccountId->toBe('mock-id-123')
        ->subAccountCd->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->periodToDateDebit->toBe(42)
        ->periodToDateCredit->toBe(42)
        ->beginningBalance->toBe(42)
        ->yearToDateBalance->toBe(42)
        ->periodToDateDebitInCurrency->toBe(42)
        ->periodToDateCreditInCurrency->toBe(42)
        ->beginningBalanceInCurrency->toBe(42)
        ->yearToDateBalanceInCurrency->toBe(42)
        ->yearClosed->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
