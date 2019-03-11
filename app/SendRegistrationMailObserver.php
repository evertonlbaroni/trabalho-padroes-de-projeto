<?php

namespace App;

class SendRegistrationMailObserver implements Observere
{
    public function update($user) {

        Log::info( "Enviando e-mail de boas vindas para \"{$user->email}\"!" );

//        mail($user->email,
//            "Bem-vindo",
//            "Olá {$user->name} <br>...");

    }

}
