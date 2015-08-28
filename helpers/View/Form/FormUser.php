<?php

namespace Helpers\View\Form;

use Zend\Form\Element;
use Zend\Form\Form;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;

class FormUser extends Form {

    public function __construct($name = null) {

        $this->attributes = array(
            'method' => 'POST',
        );

        parent::__construct('form_user');

        $inputFilter = new InputFilter();

        $this->add(array(
            'name' => 'name',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nome',
            ),
            'attributes' => array(
                'id' => 'name',
                'class' => 'form-control',
                'autocomplete' => 'off',
                'max' => '100',
                'required' => true,
            ),
        ));

        $this->add(array(
            'name' => 'email',
            'type' => 'Email',
            'options' => array(
                'label' => 'E-mail',
            ),
            'attributes' => array(
                'id' => 'email',
                'class' => 'form-control',
                'required' => true,
            ),
        ));

        $inputFilter->add(array(
            'name' => 'email',
            'validators' => array(
                array(
                    'name' => 'EmailAddress',
                    'options' => array(
                        'messages' => array(
                        )
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name' => 'login',
            'type' => 'Text',
            'options' => array(
                'label' => 'Login',
            ),
            'attributes' => array(
                'id' => 'login',
                'class' => 'form-control',
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

        $this->add(array(
            'name' => 'confirm',
            'type' => 'Password',
            'options' => array(
                'label' => 'Confirmar Senha',
            ),
            'attributes' => array(
                'id' => 'confirm',
                'class' => 'form-control',
                'required' => true,
            ),
        ));

        $inputFilter->add(array(
            'name' => 'confirm',
            'validators' => array(
                array(
                    'name' => 'Identical',
                    'options' => array(
                        'token' => 'password',
                        'messages' => array(
                            'notSame' => 'A senha e a confirmação de senha devem ser iguais.'
                        )
                    ),
                ),
            ),
        ));

        $this->setInputFilter($inputFilter);

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'class' => 'btn btn-primary',
            ),
        ));
    }

}
