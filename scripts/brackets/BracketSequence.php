<?php

class BracketSequence
{
    public string $line;

    public function __construct(string $line) {
        $this->line = $line;
    }

    /**
     * @return bool
     */
    public function correct(): bool
    {
        $lengthLine = strlen($this->line);
        $stack = [];
        for ($i = 0; $i < $lengthLine; $i++) {
            switch ($this->line[$i]) {
                case '(':
                    $stack[] = 0;
                    break;
                case ')':
                    if (array_pop($stack) !== 0)
                        return false;
                    break;
                case '[':
                    $stack[] = 1;
                    break;
                case ']':
                    if (array_pop($stack) !== 1)
                        return false;
                    break;
                case '{':
                    $stack[] = 2;
                    break;
                case '}':
                    if (array_pop($stack) !== 2)
                        return false;
                    break;
                default:
                    break;
            }
        }
        return (empty($stack));
    }
}
