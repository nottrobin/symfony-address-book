<?php

namespace Robin\AddressBookBundle\Controller;

class Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * Make the method overrideable with the ?method= query string
     * as suggested in: http://info.apigee.com/Portals/62317/docs/web%20api.pdf
     */
    protected function httpMethod()
    {
        return $this->getRequest()->query->get('method', $this->getRequest()->getMethod());
    }

    /**
     * Return a Response from a twig template of the correct format
     *
     * @param string $name
     * @return Symfony\Component\HttpFoundation\Response
     */
    protected function templateResponse($name, array $data = array())
    {
        $format = $this->getRequest()->get('_format');

        return $this->render('RobinAddressBookBundle:' . $name . '.' . $format . '.twig', $data);
    }
}
