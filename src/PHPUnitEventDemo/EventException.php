<?php
/**
 * Created by PhpStorm.
 * User: zoco
 * Date: 16/11/5
 * Time: 13:55
 */

namespace PHPUnitEventDemo;

/**
 * Class EventException
 *
 * @package PHPUnitEventDemo
 */
class EventException extends \Exception {
    const DUPLICATED_RESERVATION = 1;
}