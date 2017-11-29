<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 28/11/17
 * Time: 19:16
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Podcast;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PodcastController extends Controller implements ClassResourceInterface
{

    /**
     * @param $slug
     * @return Response
     */
    public function getAction($slug)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        /* @var \AppBundle\Entity\Podcast $podcast */
        $podcast = $this->getDoctrine()->getRepository(Podcast::class)->findOneBy(['slug' => $slug]);

        return Response::create($serializer->serialize($podcast, 'json'));

    }

}