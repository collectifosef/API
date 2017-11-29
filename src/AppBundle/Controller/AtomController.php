<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 29/11/17
 * Time: 10:44
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Broadcast;
use AppBundle\Entity\Podcast;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class AtomController
 *
 * @package AppBundle\Controller
 * @Route("/atom")
 */
class AtomController extends Controller
{

    /**
     * Flux Atom de tout les podcasts
     *
     * @Route("/podcasts", name="podcast")
     * @Template("main/podcast.atom.twig")
     *
     * @return array
     */
    public function podcastsAction()
    {
        $podcasts = $this->getDoctrine()->getRepository(Podcast::class)->findAll();

        return [
            'podcasts' => $podcasts
        ];
    }

    /**
     * Flux Atom de tout les podcasts d'un broadcast
     *
     * @param Broadcast $broadcast
     * @Route("/broadcast/{slug}", name="broadcast")
     * @Template("main/broadcast.atom.twig")
     *
     * @return array
     */
    public function broadcastAction(Broadcast $broadcast)
    {
        dump($broadcast);die;

        return [];
    }

}