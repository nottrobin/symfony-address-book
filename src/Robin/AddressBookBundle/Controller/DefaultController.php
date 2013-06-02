<?php

namespace Robin\AddressBookBundle\Controller;

/**
 * CRUD actions for Contacts
 */
class DefaultController extends Controller
{
    /**
     * Pass through to the correct action based on the HTTP method
     */
    public function indexAction()
    {
        return $this->templateResponse('Default:index');
    }
}
