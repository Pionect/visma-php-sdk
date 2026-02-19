<?php

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Enums\GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum;
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
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'ledger' => [
                    'description' => 'String value',
                ],
                'balanceType' => 'Actual',
                'financialPeriod' => 'String value',
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
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'ledger' => [
                    'description' => 'String value',
                ],
                'balanceType' => 'Actual',
                'financialPeriod' => 'String value',
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->ledger->description->toBe('String value')
        ->balanceType->toEqual(GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum::ACTUAL)
        ->financialPeriod->toBe('String value')
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
