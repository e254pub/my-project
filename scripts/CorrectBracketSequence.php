<?php

class CorrectBracketSequence
{
    private string $str;
    const R_BRACKETS = ['(', '{', '['];
    const L_BRACKETS = [')', '}', ')'];
    /**
     * @param string $str
     * @return void
     */
    public function set(string $str) {
        $this->str = $str;
    }

    /**
     * @return bool|void
     */
    public function check() {
        $stack = [];
        try{
            foreach(str_split($this->str) as $c){
                if(in_array($c, self::R_BRACKETS)){
                    $stack[] = $c;
                }
                elseif(in_array($c, self::L_BRACKETS)){
                    end($stack);
                    if(empty($stack) || !$this->pair(end($stack), $c))
                        return false;
                    else array_pop($stack);
                }
            }
            return empty($stack);
        } catch (\Exception $e){}
    }

    /**
     * @param $op
     * @param $ed
     * @return bool
     */
    private function pair($op, $ed): bool
    {
        switch ([$op, $ed]){
            case ['{', '}']:
            case ['[', ']']:
            case ['(',')']:
                return true;
        }
        return false;
    }
}
