<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 29/11/17
 * Time: 10:44
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AtomController extends Controller
{

    /**
     * Flux Atom de tout les podcasts
     *
     * @Route("/atom/podcasts", name="podcast")
     * @Template("main/podcast.atom.twig")
     *
     * @return array
     */
    public function podcastsAction()
    {

        return [];
    }

    /**
     * Flux Atom de tout les podcasts d'un broadcast
     *
     * @Route("/atom/broadcast/{slug}", name="broadcast")
     * @Template("main/broadcast.atom.twig")
     *
     * @return array
     */
    public function broadcastAction($slug)
    {

        return [];
    }

}