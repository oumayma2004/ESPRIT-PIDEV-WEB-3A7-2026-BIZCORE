<?php

namespace App\Repository;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function countAll(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countActive(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.statut = :statut')
            ->setParameter('statut', 'actif')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countInactive(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('(u.statut IS NULL OR u.statut <> :statut)')
            ->setParameter('statut', 'actif')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countWithoutRole(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.roleEntity IS NULL')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countRecentRegistrations(int $days = 7): int
    {
        $days = max(1, $days);

        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.dateInscription >= :since')
            ->setParameter('since', new \DateTimeImmutable("-{$days} days"))
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countDormant(int $days = 30): int
    {
        $days = max(1, $days);
        $since = new \DateTimeImmutable("-{$days} days");

        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.derniereConnexion IS NULL OR u.derniereConnexion < :since')
            ->setParameter('since', $since)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countIncompleteProfiles(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.nom = :empty OR u.prenom = :empty OR u.email = :empty')
            ->orWhere('u.telephone IS NULL OR u.telephone = :empty')
            ->orWhere('u.adresse IS NULL OR u.adresse = :empty')
            ->orWhere('u.roleEntity IS NULL')
            ->setParameter('empty', '')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function emailExists(string $email): bool
    {
        return (bool) $this->createQueryBuilder('u')
            ->select('1')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function emailExistsExcept(string $email, int $exceptId): bool
    {
        return (bool) $this->createQueryBuilder('u')
            ->select('1')
            ->andWhere('u.email = :email')
            ->andWhere('u.id <> :id')
            ->setParameter('email', $email)
            ->setParameter('id', $exceptId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByEmailWithRole(string $email): ?User
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('u.roleEntity', 'r')
            ->addSelect('r')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByIdWithRole(int $id): ?User
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('u.roleEntity', 'r')
            ->addSelect('r')
            ->andWhere('u.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function searchPaginated(string $search, int $limit, int $offset, string $sort = 'id', string $dir = 'ASC'): array
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.roleEntity', 'r')
            ->addSelect('r')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        if ($search !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q OR u.email LIKE :q OR u.telephone LIKE :q OR u.statut LIKE :q')
                ->setParameter('q', '%' . $search . '%');
        }

        $allowedSorts = [
            'id' => 'u.id',
            'nom' => 'LOWER(u.nom)',
            'prenom' => 'LOWER(u.prenom)',
            'email' => 'LOWER(u.email)',
            'telephone' => 'LOWER(u.telephone)',
            'statut' => 'LOWER(u.statut)',
            'date_inscription' => 'u.dateInscription',
            'role' => 'LOWER(r.nomRole)',
        ];

        $sortField = $allowedSorts[$sort] ?? 'u.id';
        $sortDir = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';

        return $qb->orderBy($sortField, $sortDir)
            ->getQuery()
            ->getResult();
    }

    public function countSearch(string $search): int
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)');

        if ($search !== '') {
            $qb->andWhere('u.nom LIKE :q OR u.prenom LIKE :q OR u.email LIKE :q OR u.telephone LIKE :q OR u.statut LIKE :q')
                ->setParameter('q', '%' . $search . '%');
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getLatestUsers(int $limit = 5): array
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('u.roleEntity', 'r')
            ->addSelect('r')
            ->orderBy('u.dateInscription', 'DESC')
            ->setMaxResults(max(1, $limit))
            ->getQuery()
            ->getResult();
    }

    public function getUsersNeedingAttention(int $limit = 5): array
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('u.roleEntity', 'r')
            ->addSelect('r')
            ->where('u.roleEntity IS NULL OR u.telephone IS NULL OR u.telephone = :empty OR u.adresse IS NULL OR u.adresse = :empty OR u.derniereConnexion IS NULL')
            ->setParameter('empty', '')
            ->orderBy('u.dateInscription', 'DESC')
            ->setMaxResults(max(1, $limit))
            ->getQuery()
            ->getResult();
    }

    public function deleteById(int $id): void
    {
        $user = $this->find($id);
        if ($user) {
            $this->_em->remove($user);
            $this->_em->flush();
        }
    }
}