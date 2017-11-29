<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 16/11/17
 * Time: 13:11
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Main controller
 *
 */
class MainController extends Controller
{

    /**
     * Homepage.
     *
     * @Route("/", name="homepage")
     * @Template("main/home.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();

        return [];
    }

}