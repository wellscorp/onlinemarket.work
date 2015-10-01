<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 25/09/2015
 * Time: 19:37
 */

namespace Application\Helper;



use Zend\View\Helper\AbstractHelper;

class LeftLinks extends AbstractHelper{

    public function __invoke($values, $urlPrefix)
    {
        $html = '<ul style="list-sytle-type:none;">' .PHP_EOL;
        foreach($values as $item){
            $html.= sprintf("<li><a href=\"%s/%s\">%s</a></li>\n", $urlPrefix, $item, $item);
            //var_dump($html);die;
        }
        $html.="</ul>".PHP_EOL;

        return $html;
    }
} 