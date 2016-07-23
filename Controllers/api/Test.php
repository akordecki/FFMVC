<?php

namespace FFMVC\Controllers\API;

use FFMVC\Helpers as Helpers;

/**
 * Api Test Controller Class.
 *
 * @author Vijay Mahrra <vijay@yoyo.org>
 * @copyright (c) Copyright 2015 Vijay Mahrra
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 */
class Test extends Api
{
    // route /api
    public function request($f3, $params)
    {
        $this->params['http_methods'] = 'GET,HEAD';
        $this->data += [
            'name' => 'globals',
            'description' => 'Global Variables',
            'globals' => [
                'SERVER' => $f3->get('SERVER'),
                'ENV' => $f3->get('ENV'),
                'COOKIE' => $f3->get('COOKIE'),
                'SESSION' => $f3->get('SESSION'),
                'REQUEST' => $f3->get('REQUEST'),
                'GET' => $f3->get('GET'),
                'POST' => $f3->get('POST'),
                'FILES' => $f3->get('FILES'),
            ],
        ];
    }
}
