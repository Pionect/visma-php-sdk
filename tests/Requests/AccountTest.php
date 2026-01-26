<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Account\AccountGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Account\AccountGetByaccountCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the accountGetByaccountCd method in the Account resource', function () {
    Saloon::fake([
        AccountGetByaccountCdRequest::class => MockResponse::make([
            'accountId' => 42,
            'accountCd' => 'Mock value',
            'accountGroupCd' => 'Mock value',
            'accountClass' => 'Mock value',
            'active' => true,
            'description' => 'Mock value',
            'accountClassDescription' => 'Mock value',
            'useDefaultSub' => true,
            'postOption' => 'Mock value',
            'currency' => 'Mock value',
            'taxCategory' => 'Mock value',
            'cashAccount' => true,
            'publicCode1' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'externalCode1info' => null,
            'externalCode2info' => null,
            'analisysCodeInfo' => null,
            'controlAccountModule' => 'Mock value',
            'allowManualEntry' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => null,
        ], 200),
    ]);

    $request = new AccountGetByaccountCdRequest(
        accountCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountGetByaccountCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->accountId->toBe(42)
        ->accountCd->toBe('Mock value')
        ->accountGroupCd->toBe('Mock value')
        ->accountClass->toBe('Mock value')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->accountClassDescription->toBe('Mock value')
        ->useDefaultSub->toBeTrue()
        ->postOption->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->taxCategory->toBe('Mock value')
        ->cashAccount->toBeTrue()
        ->publicCode1->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalCode1info->toBeNull()
        ->externalCode2info->toBeNull()
        ->analisysCodeInfo->toBeNull()
        ->controlAccountModule->toBe('Mock value')
        ->allowManualEntry->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBeNull();
});

it('calls the accountGetAllCollection method in the Account resource', function () {
    Saloon::fake([
        AccountGetAllCollectionRequest::class => MockResponse::make([
            [
                'accountId' => 42,
                'accountCd' => 'Mock value',
                'accountGroupCd' => 'Mock value',
                'accountClass' => 'Mock value',
                'active' => true,
                'description' => 'Mock value',
                'accountClassDescription' => 'Mock value',
                'useDefaultSub' => true,
                'postOption' => 'Mock value',
                'currency' => 'Mock value',
                'taxCategory' => 'Mock value',
                'cashAccount' => true,
                'publicCode1' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'externalCode1info' => null,
                'externalCode2info' => null,
                'analisysCodeInfo' => null,
                'controlAccountModule' => 'Mock value',
                'allowManualEntry' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => null,
            ],
            [
                'accountId' => 42,
                'accountCd' => 'Mock value',
                'accountGroupCd' => 'Mock value',
                'accountClass' => 'Mock value',
                'active' => true,
                'description' => 'Mock value',
                'accountClassDescription' => 'Mock value',
                'useDefaultSub' => true,
                'postOption' => 'Mock value',
                'currency' => 'Mock value',
                'taxCategory' => 'Mock value',
                'cashAccount' => true,
                'publicCode1' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'externalCode1info' => null,
                'externalCode2info' => null,
                'analisysCodeInfo' => null,
                'controlAccountModule' => 'Mock value',
                'allowManualEntry' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => null,
            ],
        ], 200),
    ]);

    $request = new AccountGetAllCollectionRequest(active: true, includeAccountClassDescription: true, greaterThanValue: 'test string', publicCode: 'test string', externalCode1: 'test string', externalCode2: 'test string', analysisCode: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string');

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountGetAllCollectionRequest::class);

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->accountId->toBe(42)
        ->accountCd->toBe('Mock value')
        ->accountGroupCd->toBe('Mock value')
        ->accountClass->toBe('Mock value')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->accountClassDescription->toBe('Mock value')
        ->useDefaultSub->toBeTrue()
        ->postOption->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->taxCategory->toBe('Mock value')
        ->cashAccount->toBeTrue()
        ->publicCode1->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalCode1info->toBeNull()
        ->externalCode2info->toBeNull()
        ->analisysCodeInfo->toBeNull()
        ->controlAccountModule->toBe('Mock value')
        ->allowManualEntry->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBeNull();
});
