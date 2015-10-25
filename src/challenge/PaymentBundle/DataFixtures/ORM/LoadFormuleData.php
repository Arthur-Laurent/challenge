<?php
namespace challenge\PaymentBundle\DataFixtures\ORM;


use challenge\PaymentBundle\Entity\Game;
use challenge\PaymentBundle\Entity\Image;
use challenge\PaymentBundle\Entity\Lobby;
use challenge\PaymentBundle\Entity\Formule;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadFormuleData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $lobby=new Lobby();
        $lobby->setname('LobbyUnlock');

        $lobby->setdescription('Unlock all');


        $lobby1=new Lobby();
        $lobby1->setname('Lobby stats');

        $lobby1->setdescription('Lobby stats et plus');


        $image=new Image();
        $image->setAlt('Imagebo2');
        $image->setUrl('http://img.ozgameshop.com/posters/video_game_posters/call_of_duty_black_ops_ii_cover_mini_poster_raw.jpg');
        $game=new Game();
        $game->setName('Call of duty balck ops 2');
        $game->setImage($image);

        $image1=new Image();
        $image1->setAlt('Imageaw');
        $image1->setUrl('http://image.jeuxvideo.com/images-md/pc/c/a/call-of-duty-advanced-warfare-pc-00d.jpg');
        $game1=new Game();
        $game1->setName('Call of duty advanced warfare');
        $game1->setImage($image1);

        $formule=new Formule();
        $formule->setPrix('8.84');
        $formule->setName('Lobby bo2');
        $formule->setGame($game);
        $formule->setLobby($lobby);

        $formule1=new Formule();
        $formule1->setPrix('8.84');
        $formule1->setName('Lobby aw');
        $formule1->setGame($game1);
        $formule1->setLobby($lobby1);









        $manager->persist($formule);
        $manager->persist($formule1);


        $manager->flush();
    }
}