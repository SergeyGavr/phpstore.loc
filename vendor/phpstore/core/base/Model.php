<?php


namespace phpstore\base;


use phpstore\Db;

abstract class Model {

  public static $db;
  public $attributes = [];
  public $errors = [];
  public $rules = [];

  public function __construct() {
    Db::instance();
  }

}