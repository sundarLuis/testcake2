<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $First_Name = $this->request->getData('First_Name');
            $Last_Name = $this->request->getData('Last_Name');
            $email = $this->request->getData('email');
            $Message = $this->request->getData('Message');
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
                ->from($email) //correo de
                ->subject($Message) //asunto
                ->viewVars([ //enviar variables a la plantilla
                  'var1' => $First_Name ,
                  'var2' => $Last_Name,
                  'var3' => $Message,
                  'var4'=>$email
                ]);
                          if($correo->send()){
                $this->Flash->success(__('email enviado'));
            
            }else{
                $this->Flash->error(__('eror al enviar al correo'));
            }  
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));
                
  
            // return $this->redirect(['action' => 'add']);
            return  $this->redirect('/');
          
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
