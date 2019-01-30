<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FormatTest extends TestCase
{
    private $format;
 
    protected function setUp()
    {
        $this->format = new Format();
    }
 
    protected function tearDown()
    {
        $this->format = NULL;
    }
 
    public function testDecimalFormat()
    {
        $result = $this->format->decimalFormat(2.10);
        $this->assertEquals(2.1, $result);
    }
}
