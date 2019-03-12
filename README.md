# Trabalho de Padrões de Projetos

 O trabalho consiste em um sistema que permite cadastrar usuários e notifica-los através do e-mail. 

## Padrões Utilizados 

 
### Observe e Singleton
 
 O Padrão `Observe` foi utilizado para notificar a classe responsável pelo envio do e-mail, sempre que um novo usuário é cadastrado.
  
 A implementação encontra-se nos seguintes arquivos: 
  
    /app/Observere.php
    /app/Subject.php
    /app/SendRegistrationMailObserver.php
    /app/UserSubject.php 
    /app/Http/Controllers/UserController.php
    
 O Padrão `Singleton` foi utilizado para que a classe `UserSubject` possa ser instanciada uma única vez.
        
 A implementação encontra-se no seguinte arquivo:
 
    /app/UserSubject.php 
    
#### Diagrama de Classes (Observe e Singleton)

    public/img/observe-singleton.png

### Memento

 O padrão de projeto `Memento` foi utilizado para possibilitar que alterações no campo de texto descrição, pudessem ser desfeitas por meio de um botão.
 
 A implementação (Javascript) encontra-se no seguinte arquivo: 
 
    /resources/views/user/partials/_form.blade.php
    
#### Diagrama de Classes

    /public/img/memento.PNG

