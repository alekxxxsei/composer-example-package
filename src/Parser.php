<?php

namespace alekxxxsei\parser;

use alekxxxsei\parser\ParserInterface;

/**
 * Description of Parser
 *
 * @author aleksei
 */
class Parser implements ParserInterface
{
    public function process(string $tag, string $url): array 
    {
        $htmlPage = file_get_contents($url);
        
        if ($htmlPage === false) {
            return ['invalid URL'];
        }
        
        //Regular exeption
        
        preg_match_all('/<' . $tag . '.*?(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        
        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
                        
        }
        
        return $strings[1];
    }
    
    public function test()
    {
        // feature
    }
}
