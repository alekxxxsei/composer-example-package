<?php

use ParserInterface;

/**
 * Description of Parser
 *
 * @author aleksei
 */
class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array 
    {
        return [
            'just',
            'do',
            'it'
        ];
    }
}
