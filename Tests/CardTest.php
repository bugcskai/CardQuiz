<?php
use PHPUnit\Framework\TestCase;

require ('../Cards.php');

class CardTest extends TestCase
{
	private $card;

    public function setUp()
    {

        $this->card = new \Cards();
    }

    public function testGenerateHand()
    {
        $stack = $this->card->generateHand();

        $this->assertSame(5, count($stack));


        return $stack;
    }

    public function cardProvider()
    {
        return [
            [["4c","5d","7d","ah","ad"], false],
            [["ad","2d","3d","4d","5d"], true],
        ];
    }

    /**
     * @dataProvider cardProvider
     */
    public function testCheckStraight($a, $expected)
    {
        return $this->assertEquals( $this->card->checkHandIfStraight($a), $expected );
    }
}
?>