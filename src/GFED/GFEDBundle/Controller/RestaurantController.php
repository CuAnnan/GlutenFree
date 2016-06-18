<?php
namespace GFED\GFEDBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GFED\GFEDBundle\Entity\Restaurant;


class RestaurantController extends Controller
{
	/**
	 * 
	 * @Route("/restaurant/list", defaults={"perPage" = 30, "offset"=1, "orderBy" = "name"}, name="gfed_restaurant_list")
	 */
	public function listAction($perPage, $offset, $orderBy)
	{
		$orders = ['name'=>'r.name'];
		$order = 'r.name';
		if(isset($orders[$orderBy]))
		{
			$order = $orders[$orderBy];
		}
		
		$perPage = (int)$perPage;
		$offset = (int)$offset;
		
		$qb = $this->getDoctrine()->getRepository('GFEDBundle:Restaurant')->createQueryBuilder('r');
		$query = $qb->orderBy($order)->setFirstResult($offset)->setMaxResults($perPage)->getQuery();
		$restaurants = $query->getResult();
		
		return $this->render(
			'GFEDBundle:Restaurant:list.html.twig',
			['restaurants'=>$restaurants]
		);
	}
	
	/**
	 * @Route("/restaurant/add", name="gfed_restaurant_add")
	 */
	public function showAddAction(Request $request)
	{
		$restaurant = new Restaurant();
		
		$form = $this->createFormBuilder($restaurant)
				->add('name');
	}
	
}