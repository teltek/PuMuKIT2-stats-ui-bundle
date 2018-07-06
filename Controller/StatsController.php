<?php

namespace Pumukit\StatsUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin/stats")
 * @Security("is_granted('ROLE_ACCESS_STATS')")
 */
class StatsController extends Controller
{
    /**
     * @Route("/series", name="pumukit_stats_series_index")
     * @Route("/objects", name="pumukit_stats_mmobj_index")
     * @Route("/series/{id}", name="pumukit_stats_series_index_id")
     * @Route("/objects/{id}", name="pumukit_stats_mmobj_index_id")
     * @Template
     *
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        return array();
    }
}