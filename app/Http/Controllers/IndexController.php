<?php
/**
 * Created by PhpStorm.
 * User: arpher
 * Date: 17-11-27
 * Time: 下午8:03
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Excel;


class IndexController extends Controller
{

    /**
     * https://www.caiyiming.com/article/201702162332.html
     * Excel插件测试后csv格式中文无法识别
     */
    public function upload(){

        Excel::load('ffff.xls', function($reader) {
            dump($reader->toArray());
        });

    }

    public function gettext()
    {
        echo 'Non translated string';
        echo '<br>';
        echo _i('Translated string');
    }

}