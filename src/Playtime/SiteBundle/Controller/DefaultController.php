<?php

namespace Playtime\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlaytimeSiteBundle:Default:index.html.twig');
    }
}
