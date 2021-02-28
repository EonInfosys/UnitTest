<?php

namespace EonInfosys\UnitTest\Test\Unit\Model;

class TestCalculator extends \PHPUnit\Framework\TestCase {

    protected function setUp() {

        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        $this->model = $this->objectManager->getObject("EonInfosys\UnitTest\Model\Calculator");

    }

    public function tearDown() {

/* Perform action after the test run */

    }

    public function testAdd() {

        $result = $this->model->add(10, 5);

        $expectedResult = 15;

        $this->assertEquals($expectedResult, $result);

    }

}
