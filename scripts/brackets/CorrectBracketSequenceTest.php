<?php

use PHPUnit\Framework\TestCase;

class CorrectBracketSequenceTest extends TestCase
{
    public function correctDataProvider(): array
    {
        return [
            [
                "([{}])",
                true
            ],
            [
                "([}])",
                false,
            ],
        ];
    }

    /**
     * @dataProvider correctDataProvider
     * @param string $line
     * @param bool $exceptedResult
     * @return void
     */
    public function testCorrectBracketSequence(string $line, bool $exceptedResult): void
    {
        $service = new BracketSequence($line);
        $this->assertEquals($exceptedResult, $service->correct());
    }
}
