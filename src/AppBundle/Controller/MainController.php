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

/**
 * Homepage.
 *
 * @Route("/", name="homepage")
 * @Template("main/home.html.twig")
 */
class MainController extends Controller
{

    public function indexAction()
    {
    }

}