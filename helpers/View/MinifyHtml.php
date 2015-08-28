<?php

/**
 * Pop3 Serviços de Internet
 * @link http://www.pop3web.com.br
 */

namespace Helpers\View;

/**
 * Minifies HTML content
 */
class MinifyHtml {

    /**
     * Render HTML content, removing any blank spaces or indent
     * @param string $html
     * @return string
     */
    public static function render($html) {

        preg_match_all('!(<(?:code|pre|script).*>[^<]+</(?:code|pre|script)>)!', $html, $pre);
        $html = preg_replace('!<(?:code|pre).*>[^<]+</(?:code|pre)>!', '#pre#', $html);
        $html = preg_replace('#<!–[^\[].+–>#', '', $html);
        $html = preg_replace('/[\r\n\t]+/', ' ', $html);
        $html = preg_replace('/>[\s]+</', '><', $html);
        $html = preg_replace('/[\s]+/', ' ', $html);
        if (!empty($pre[0])) {
            foreach ($pre[0] as $tag) {
                $html = preg_replace('!#pre#!', $tag, $html, 1);
            }
        }
        return $html;
    }

}
