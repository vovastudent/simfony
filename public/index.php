<?php

use App\Kernel;

//class MyClass
//{
//       public $name = "My name";
//
//       protected $sex = 'mail';
//       private $id;
//
//    public function __construct($name, $sex, $id)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getSex()
//    {
//        return $this->sex;
//    }
//
//    /**
//     * @param mixed $sex
//     */
//    public function setSex($sex): void
//    {
//        $this->sex = $sex;
//    }
//
//
//
//};
//$instance =  new MyClass();
//$instance->getSex( sex: 'femail');
//var_dump($instance->getSex());
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
