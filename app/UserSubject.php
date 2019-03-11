<?php
/**
 * Created by PhpStorm.
 * User: Everton
 * Date: 10/03/2019
 * Time: 16:43
 */

namespace App;


class UserSubject implements Subject
{
    private $observerList = [];


    private static $userSubject = null;

    /**
     *  Singleton constructor.
     */
    private function __construct() {}

    /**,
     *  Singleton get instance.
     */
    static function getInstance(){
        if (!self::$userSubject)
            self::$userSubject = new UserSubject();
        return self::$userSubject;
    }

    public function registerObserver(Observer $observer) {

        $this->observerList[] = $observer;

    }
    public function unregisterObserver(Observer $observer) {
        if (array_search ($observer, $this->observerList))
            unset($this->observerList[array_search ($observer, $this->observerList)]);

    }

    public function notifyObservers($user) {
        foreach ($this->observerList as $observer) {
            $observer->update($user);
        }
    }

}
