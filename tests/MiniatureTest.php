<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class MiniatureTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculateTotalPrice()
    {
        require 'src/Miniature.php';

        $miniature = new Miniature('name1',100.00,'resign');
        $totalprice = $miniature->calculateTotalPrice();
        $this->assertIsFloat($totalprice);
        $this->assertEquals(165,$totalprice);
    }
    public function testCheckCorrectMaterial()
    {
        $miniature = new Miniature('name1',100.00,'resign');
        $this->assertIsBool($miniature->checkIsMaterialCorrect());
        $this->assertTrue($miniature->checkIsMaterialCorrect());
    }
    public function testTotalPriceIsCorrectlyGenerated()
    {
        $miniature = new Miniature('name1',100.00,'resign');
        $totalprice = $miniature->calculateTotalPrice();
        $this->assertNotNull($miniature->calculateTotalPrice());
        $this->assertGreaterThan($miniature->getPrice(),$totalprice);
    }

}