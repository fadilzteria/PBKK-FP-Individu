<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;

// use form
use App\Forms\RegisterForm;

class SignupController extends Controller
{
    public function indexAction()
    {
        $this->view->form = new RegisterForm();
    }

    public function registerAction()
    {
        // Getting a request instance
        $request = new Request();
        $user = new Users();
        $form = new RegisterForm();

        // check request
        if (!$this->request->isPost()) {
            return $this->response->redirect('signup');
        }

        $form->bind($_POST, $user);
        // check form validation
        if (false === $form->isValid($_POST)) {
            $messages = $form->getMessages();
        
            foreach ($messages as $message) {
                $this->flash->error($message);
                $this->dispatcher->forward(
                    [
                        'controller'    => $this->router->getControllerName(),
                        'action'        => 'index'
                    ]
                );
                return;
            }
        }

        $user->setPassword($this->security->hash($_POST['password']));

        if(!$user->save()) {
            foreach ($user->getMessages() as $m) {
                $this->flash->error($m);
                $this->dispatcher->forward(
                    [
                        'controller'    => $this->router->getControllerName(),
                        'action'        => 'index'
                    ]
                );
                return;
            }
        }

        $this->flash->success('Thanks for registering!');
        return $this->dispatcher->forward(
            [
                'action' => 'index'
            ]
        );

        /*
        $name = $this->request->getPost('name', ['trim', 'string']);
        $email = $this->request->getPost('email', ['trim', 'email']);

        //assign value from the form to $user
        $user->assign(
            [
                'name' => $name,
                'email'=> $email
            ]
        );

        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
       # $this->view->success = $success;

        if ($success) {
            $this->flash->success('Thanks for registering!');
            return $this->dispatcher->forward(
                [
                    'action' => 'index'
                ]
            );
            
        } else {
            echo "Sorry, the following problems were generated:<br>";
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        // $this->view->message = $message;
        */
    }
}