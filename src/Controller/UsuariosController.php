<?php
 
namespace App\Controller;
 
use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico
 

class UsuariosController extends AppController{    
    public function index(){
        
    }
    public function correo(){
      /*Para este ejemplo no necesito de renderizar
        una vista por lo que autorender lo pongo a false
       */
      $this->autoRender = false;
      
      /*configuramos las opciones para conectarnos al servidor
        smtp de Gmail
       */
      Email::configTransport('mail', [
        'host' => 'ssl://smtp.gmail.com', //servidor smtp con encriptacion ssl
        'port' => 465, //puerto de conexion
        //'tls' => true, //true en caso de usar encriptacion tls
        
        //cuenta de correo gmail completa desde donde enviaran el correo
        'username' => 'sundarluisrj@gmail.com', 
        'password' => '2secondchance', //contrasena
        
        //Establecemos que vamos a utilizar el envio de correo por smtp
        'className' => 'Smtp', 
        
        //evitar verificacion de certificado ssl ---IMPORTANTE---
        /*'context' => [
          'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
          ]
        ]*/
      ]); 
      /*fin configuracion de smtp*/
      
      
      /*enviando el correo*/
      $correo = new Email(); //instancia de correo
      $correo
        ->transport('mail') //nombre del configTrasnport que acabamos de configurar
        ->template('correo_plantilla') //plantilla a utilizar
        ->emailFormat('html') //formato de correo
        ->to('sundarluisrj@gmail.com') //correo para
        ->from('sundarluisrj@gmail.com') //correo de
        ->subject('Correo de prueba en cakephp3') //asunto
        ->viewVars([ //enviar variables a la plantilla
          'var1' => 'Hugo',
          'var2' => 'Kiuvox',
          'var3' => 'http://blog.kiuvox.com'
        ]);
      
      if($correo->send()){
        echo "Correo enviado";
      }else{
        echo "Ups error man";
      }    
    }
  }