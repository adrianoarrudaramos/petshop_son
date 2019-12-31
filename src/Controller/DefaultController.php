<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $qts_animais = $em->getRepository(Cliente::class)->quantosAnimaisPorCliente();

        $qte_racas = $em->getRepository(Animal::class)->qtsPorRaca();

        return [
            'qts_animais' => $qts_animais,
            'qtde_por_raca' => $qte_racas
        ];
    }
}
