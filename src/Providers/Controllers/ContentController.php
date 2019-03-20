<?php
/**
 * Created by PhpStorm.
 * User: plenty
 * Date: 2019-03-14
 * Time: 13:51
 */

namespace CcPlugin0\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('CcPlugin0::content.hello');
    }
}