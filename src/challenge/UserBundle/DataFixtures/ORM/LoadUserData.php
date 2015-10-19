<?php
namespace challenge\UserBundle\DataFixtures\ORM;

use challenge\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use challenge\UserBundle\Entity\News;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user=new User();
        $user->setEmail('raxer97@gmail.com');
        $user->setPassword('raxer');
        $user->setUsername('raxer');

        $user1=new User();
        $user1->setEmail('raxere97@gmail.com');
        $user1->setPassword('raxer1');
        $user1->setUsername('raxer1');

        $manager->persist($user);
        $manager->persist($user1);
        $manager->flush();
    }
}