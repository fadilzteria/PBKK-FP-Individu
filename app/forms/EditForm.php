<?php
namespace App\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Submit;

// Validation
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class EditForm extends Form
{
    public function initialize()
    {
        /**
         * Name
         */
        $name = new Text('name', [
            "class" => "form-control",
            "placeholder" => $this->session->get('AUTH_NAME')
        ]);

        // form name field validation
        $name->addValidator(
            new PresenceOf(['message' => 'The name is required'])
        );

        /**
         * Email Address
         */
        $email = new Text('email', [
            "class" => "form-control",
            "placeholder" => $this->session->get('AUTH_EMAIL')
        ]);

        // form email field validation
        $email->addValidators([
            new PresenceOf(['message' => 'The email is required']),
            new Email(['message' => 'The e-mail is not valid']),
        ]);

        /**
         * Submit Button
         */
        $submit = new Submit('submit', [
            "value" => "Edit Profil",
            "class" => "btn btn-primary",
        ]);

        $this->add($name);
        $this->add($email);
        $this->add($submit);
    }
}