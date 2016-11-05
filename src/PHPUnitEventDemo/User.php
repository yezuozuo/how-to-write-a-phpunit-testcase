<?php
/**
 * Created by PhpStorm.
 * User: zoco
 * Date: 16/10/31
 * Time: 11:37
 */

namespace PHPUnitEventDemo;

/**
 * Class User
 *
 * @package PHPUnitEventDemo
 */
class User {
    /**
     * @var int 用户id
     */
    public $id;

    /**
     * @var string 用户名
     */
    public $name;

    /**
     * @var string 用户邮箱
     */
    public $email;

    /**
     * User constructor.
     *
     * @param $id
     * @param $name
     * @param $email
     */
    public function __construct($id, $name, $email) {
        $this->id    = $id;
        $this->name  = $name;
        $this->email = $email;
    }
}