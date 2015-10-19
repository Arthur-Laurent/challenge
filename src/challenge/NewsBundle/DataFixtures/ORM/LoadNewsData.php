<?php
namespace challenge\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use challenge\NewsBundle\Entity\news;

class LoadNewsData implements FixtureInterface
{
/**
* {@inheritDoc}
*/
public function load(ObjectManager $manager)
{
$news=new news();
$news->setAuthor('arthur');
$news->setTitle('petitte teer');
$news->setContent('blalvlrbhdhbjriohjoirjhoidtjhobtrjrjr');

$news1=new news();
$news1->setAuthor('artjyhur');
$news1->setTitle('petittuoyluie teer');
$news1->setContent('blalvlolumipoorbhdhbjriohjoirjhoidtjhobtrjrjr');

$manager->persist($news);
$manager->persist($news1);
$manager->flush();
}
}