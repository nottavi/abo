<?php

namespace ad\ClassifiedBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * attribute_valuesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class attributeValuesRepository extends EntityRepository
{
	/*public function getUnconfirmedAds()
	{
		$em = $this->getEntityManager();
	
		$qb = $em->createQueryBuilder();
		$qb->addSelect('v');
		$qb->addSelect('ads');
		$qb->addSelect('attr');
		$qb->from('adClassifiedBundle:attributeValues','v');
		$qb->leftJoin('v.AdsId', 'ads');
		$qb->leftJoin('v.attributeId', 'attr');
		$qb->where('v.AdsId = 80');
	
		$response = $qb->getQuery()->getResult();
		
		
		
		var_dump($response);
		die;
	}*/
	
	
}