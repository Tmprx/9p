<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
    }

    // tests
    public function TestAddProduct(AcceptanceTester $I)
    {
        $I->click('Открыть список товаров');
        $I->click('Добавить');
        $I->fillField('name' , 'Клавиатура');
        $I->fillField('price' , '1258');
        $I->fillField('article' , 'kgs628sd7ar11');
        $I->click('#submit');
        $I->canSee('name = Клавиатура price = 1258 article = kgs628sd7ar11');


    }


    public function TestAddReceipt(AcceptanceTester $I)
    {
        $I->click('Сделать приемку');
        $I->click('Создать поступление');
        $I->selectOption('product' , 'Клавиатура');
        $I->fillField('quantity' , '21');
        $I->click('#submit');
        $date = date("Y-m-d H:i:s");
        $I->canSee('name = ' . $date . ' product = Клавиатура quantity = 21');
    }
}
