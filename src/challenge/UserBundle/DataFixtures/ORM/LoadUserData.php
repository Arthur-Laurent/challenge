<?php
namespace challenge\UserBundle\DataFixtures\ORM;

use challenge\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $user=new User();
        $user->setEmail('raxer97@gmail.com');
        $user->setPassword('JTuucPr5pDwpSn7L7c90JXK/khKwpUfs9m5ITjWTPO233LLc2/IJrYSy5aLwcS8vocnl4Qb+SpPCWnkPkQ2sUA==');

        $user->setUsername('raxer7');
        $user->setSuperAdmin(true);
        $user->setEnabled(true);

        $user->setPsn('test psn');
        $user->setPsnpassword('test psn');

        $user1=new User();
        $user1->setEmail('raxere97@gmail.com');
        $user1->setPassword('raxer1');
        $user1->setUsername('raxer1');
        $user1->setPsn('test2');
        $user1->setPsnpassword('test2');

        $manager->persist($user);
        $manager->persist($user1);
        $manager->flush();
    }
}