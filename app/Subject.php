<?php
/**
 * Created by PhpStorm.
 * User: Everton
 * Date: 10/03/2019
 * Time: 16:08
 */

namespace App;

interface Subject
{
    public function registerObserver(Observer $observer);
    public function unregisterObserver(Observer $observer);
    public function notifyObservers($data);
}
