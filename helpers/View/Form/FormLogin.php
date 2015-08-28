<?php

namespace Helpers\View\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class FormLogin extends Form {

    public function __construct($name = null) {

        $this->attributes = array(
            'method' => 'POST',
        );

        parent::__construct('login_user');

        $this->add(array(
            'name' => 'username',
            'type' => 'Text',
            'options' => array(
                'label' => 'Usuário',
            ),
            'attributes' => array(
                'id' => 'username',
                'class' => 'form-control',
                'autocomplete' => 'off',
                'max' => '100',
                'required' => true,
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Senha',
            ),
            'attributes' => array(
                'id' => 'password',
                'class' => 'form-control',
                'required' => true,
            ),
        ));

//        $this->add(array(
//            'name' => 'remember',
//            'type' => 'Checkbox',
//            'options' => array(
//                'label' => 'Lembrar-me',
//            ),
//            'attributes' => array(
//            ),
//        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Login',
                'class' => 'btn btn-lg btn-primary btn-block',
            ),
        ));
    }

}
