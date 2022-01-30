<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'CONSULTANCY',
    'email_message' => 'CONSULTANCY ALERT ',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'riteshpokarne123@gmail.com',
    'to' => 'riteshpokarne123@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>