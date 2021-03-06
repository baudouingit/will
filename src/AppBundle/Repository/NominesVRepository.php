<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * NominesVRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NominesVRepository extends EntityRepository
{
    public function getDomainsInYear($annee)
    {
        return $this->getEntityManager()
            ->createQuery(
                'select distinct(n.domaine) as domaine, n.idCat as idCat from AppBundle:NominesV n where n.annee = ' . $annee . ' order by n.idCat asc'
            )
            ->getResult();
    }

    public function getCurrentYear()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT MAX(n.annee) FROM AppBundle:NominesV n'
            )
            ->getSingleScalarResult();
    }

    public function validateQueriedYear($annee)
    {
        $years = $this->getYearsPublished();
        foreach ($years as $item) {
            $anneesValides[] = $item['anneesValides'];
        }
        if (in_array($annee, $anneesValides) and $annee > 2007) {
            return true;
        } else {
            return false;
        }
    }

    public function getYearsPublished()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT DISTINCT(n.annee) AS anneesValides FROM AppBundle:NominesV n ORDER BY n.annee ASC'
            )
            ->getScalarResult();
    }

    public function getAllDomains()
    {
        return $this->getEntityManager()
            ->createQuery(
                'select distinct(n.domaine) as domaine, n.idCat from AppBundle:NominesV n order by n.idCat asc'
            )
            ->getResult();
    }

    public function getNominesYearDomain($domaine, $annee)
    {

        return $this->getEntityManager()
            ->createQuery(
                'select n.nomine1, n.nomine2, n.nomine3, n.longcomm, n.photo, n.idCat, n.elu 
                 from AppBundle:NominesV n
                 where n.annee = ' . $annee . '
                 and n.domaine = \'' . $domaine . '\' 
                 order by n.idCat asc'

            )
            ->getResult();
    }

    public function getNominesArchive($domaine, $annee, $nom)
    {

        $qb = $this->createQueryBuilder('a');
        if (!empty($domaine)) {
            $qb->where('a.domaine = :domaine')
            ->setParameter('domaine', $domaine);
    }
        if (!empty($annee)) {
            $qb->andWhere('a.annee = :annee')
                ->setParameter('annee', $annee);
        }
        if (!empty($nom)) {
            $qb->andwhere('a.nomine1 LIKE :string')
                ->setParameter('string', '%'.$nom.'%');
        }

        $qb->add('orderBy','a.annee ASC, a.idCat ASC');

        return $qb->getQuery()
            ->getResult();    }

}
