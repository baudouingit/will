<?php

namespace AppBundle\Repository;

/**
 * JuresRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JuresRepository extends \Doctrine\ORM\EntityRepository
{
    public function getJuresActifs()
    {
        return $this->getEntityManager()
            ->createQuery(
                'select n.nom, n.prenom, n.vignette, n.notice from AppBundle:Jures n where n
.publie = 1 order by n.nom asc'
            )
            ->getScalarResult();

    }
}