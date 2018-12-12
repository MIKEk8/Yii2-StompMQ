<?php
/**
 * Created by PhpStorm.
 * User: ema
 * Date: 12.12.2018
 * Time: 18:45
 */

namespace StompMQ;

use yii\base\Component;

class StompMQ extends Component
{
    use TraitStompMQ;

    public function __get($name)
    {
        return parent::__get($name);
    }

    public function __set($name, $value)
    {
        parent::__set($name, $value);
    }
}