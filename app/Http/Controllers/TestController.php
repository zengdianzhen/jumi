<?php

namespace app\Http\Controllers;

/*
 * Antvel - Company CMS Controller
 *
 * @author  Gustavo Ocanto <gustavoocanto@gmail.com>
 */

use App\Company;
use App\Http\Controllers\Controller;


class TestController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }


    public function tickt($id)
    {

        $num = $id + 0;
        //判断是否整型
        if (is_int($num)) {
            if ($num % 2 == 0) {
                echo "失败";
            } else {
                echo "成功";
            }
        } else {
            echo "失败";
        }
    }
}
