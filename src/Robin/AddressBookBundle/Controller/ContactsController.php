<?php

namespace Robin\AddressBookBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Robin\AddressBookBundle\Entity\Contact;

/**
 * CRUD actions for Contacts
 *
 * @author Robin Winslow (robinwinslow.co.uk)
 */
class ContactsController extends Controller
{
    /**
     * The front action for actions on the contacts group
     * Passes through to the correct method based on the HTTP method
     */
    public function indexAction()
    {
        switch (strtolower($this->httpMethod())) {
            case 'get':
                return $this->listContacts();
            case 'post':
                return $this->createContact();
            case 'put':
                return new Response('405: Method not allowed', 405); 
            case 'delete':
                return new Response('405: Method not allowed', 405);
        }
    }

    /**
     * The front action for action on individual contacts
     * Passes through to the correct method based on the HTTP method
     */
    public function contactAction($contactId)
    {
        $contact = $this->getDoctrine()->getRepository('RobinAddressBookBundle:Contact')->find($contactId);

        switch (strtolower($this->httpMethod())) {
            case 'get':
                return $this->viewContact($contact);
            case 'post':
                return new Response('405: Method not allowed', 405);
            case 'put':
                return $this->updateContact($contact);
            case 'delete':
                return $this->deleteContact($contact);
        }
    }

    /**
     * View all contacts
     */
    public function listContacts()
    {
        $contacts = $this->getDoctrine()->getRepository('RobinAddressBookBundle:Contact')->findAll();

        return $this->templateResponse('Contacts:list', array( 'contacts' => $contacts) );
    }

    /**
     * View all contacts
     */
    public function viewContact(Contact $contact)
    {
        return $this->templateResponse('Contacts:view', array( 'contact' => $contact) );
    }

    /**
     * Create a contact
     */
    public function createContact()
    {
        $this->updateContactFromRequest(new Contact());

        return $this->listContacts();
    }

    /**
     * Update an existing contact
     */
    public function updateContact(Contact $contact)
    {
        $this->updateContactFromRequest($contact);

        return $this->viewContact($contact);
    }

    /**
     * Update an existing contact
     */
    public function deleteContact(Contact $contact)
    {
        $dbManager = $this->getDoctrine()->getManager();
        $dbManager->remove($contact);
        $dbManager->flush();

        return $this->listContacts();
    }

    /* private methods
     */

    private function updateContactFromRequest(Contact $contact)
    {
        $parameters = $this->getRequest()->request->all();

        if (!$contact) {
            throw $this->createNotFoundException('Contact not found');
        }

        $contact->setFirstName($parameters['first-name']);
        $contact->setLastName($parameters['last-name']);
        $contact->setAddressLineOne($parameters['address-line-one']);
        $contact->setAddressLineTwo($parameters['address-line-two']);
        $contact->setCity($parameters['city']);
        $contact->setPostcode($parameters['postcode']);
        $contact->setHomeNumber($parameters['home-number']);
        $contact->setMobileNumber($parameters['mobile-number']);

        $dbManager = $this->getDoctrine()->getManager();
        $dbManager->persist($contact);
        $dbManager->flush();

        return $contact;
    }
}
