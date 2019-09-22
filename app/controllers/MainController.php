<?php


namespace app\controllers;

use phpstore\Cache;

class MainController extends AppController {

  public function indexAction() {
    $brands = \R::find('brand', 'LIMIT 3'); // получить даные из БД
    $this->setMeta('Главная страница', "Описание", 'Ключевые слова...');
    $this->set(compact('brands')); // передать данные в вид
  }

}