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
            'accountCd' => 'String value',
            'accountGroupCd' => 'String value',
            'accountClass' => 'String value',
            'type' => 'String value',
            'active' => true,
            'description' => 'String value',
            'accountClassDescription' => 'String value',
            'useDefaultSub' => true,
            'postOption' => 'String value',
            'currency' => 'String value',
            'taxCategory' => 'String value',
            'cashAccount' => true,
            'publicCode1' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'externalCode1info' => null,
            'externalCode2info' => null,
            'analisysCodeInfo' => null,
            'controlAccountModule' => 'String value',
            'allowManualEntry' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
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
        ->accountCd->toBe('String value')
        ->accountGroupCd->toBe('String value')
        ->accountClass->toBe('String value')
        ->type->toBe('String value')
        ->active->toBeTrue()
        ->description->toBe('String value')
        ->accountClassDescription->toBe('String value')
        ->useDefaultSub->toBeTrue()
        ->postOption->toBe('String value')
        ->currency->toBe('String value')
        ->taxCategory->toBe('String value')
        ->cashAccount->toBeTrue()
        ->publicCode1->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalCode1info->toBeNull()
        ->externalCode2info->toBeNull()
        ->analisysCodeInfo->toBeNull()
        ->controlAccountModule->toBe('String value')
        ->allowManualEntry->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the accountGetAllCollection method in the Account resource', function () {
    Saloon::fake([
        AccountGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'accountId' => 42,
                'accountCd' => 'String value',
                'accountGroupCd' => 'String value',
                'accountClass' => 'String value',
                'type' => 'String value',
                'active' => true,
                'description' => 'String value',
                'accountClassDescription' => 'String value',
                'useDefaultSub' => true,
                'postOption' => 'String value',
                'currency' => 'String value',
                'taxCategory' => 'String value',
                'cashAccount' => true,
                'publicCode1' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'externalCode1info' => null,
                'externalCode2info' => null,
                'analisysCodeInfo' => null,
                'controlAccountModule' => 'String value',
                'allowManualEntry' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'accountId' => 42,
                'accountCd' => 'String value',
                'accountGroupCd' => 'String value',
                'accountClass' => 'String value',
                'type' => 'String value',
                'active' => true,
                'description' => 'String value',
                'accountClassDescription' => 'String value',
                'useDefaultSub' => true,
                'postOption' => 'String value',
                'currency' => 'String value',
                'taxCategory' => 'String value',
                'cashAccount' => true,
                'publicCode1' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'externalCode1info' => null,
                'externalCode2info' => null,
                'analisysCodeInfo' => null,
                'controlAccountModule' => 'String value',
                'allowManualEntry' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new AccountGetAllCollectionRequest(active: true, includeAccountClassDescription: true, greaterThanValue: 'test string', publicCode: 'test string', externalCode1: 'test string', externalCode2: 'test string', analysisCode: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (AccountGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->accountId->toBe(42)
        ->accountCd->toBe('String value')
        ->accountGroupCd->toBe('String value')
        ->accountClass->toBe('String value')
        ->type->toBe('String value')
        ->active->toBeTrue()
        ->description->toBe('String value')
        ->accountClassDescription->toBe('String value')
        ->useDefaultSub->toBeTrue()
        ->postOption->toBe('String value')
        ->currency->toBe('String value')
        ->taxCategory->toBe('String value')
        ->cashAccount->toBeTrue()
        ->publicCode1->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalCode1info->toBeNull()
        ->externalCode2info->toBeNull()
        ->analisysCodeInfo->toBeNull()
        ->controlAccountModule->toBe('String value')
        ->allowManualEntry->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
