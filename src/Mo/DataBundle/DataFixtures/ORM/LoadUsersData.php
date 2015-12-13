<?php
/**
 * Created by PhpStorm.
 * User: lute
 * Date: 7/12/15
 * Time: 17:23
 */

namespace Mo\DataBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mo\DataBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUsersData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $pass='abc123.';

        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $pass);

        $user->setEmail('eloy@sandboxwebs.com');
        $user->setIsActive(1);
        $user->setUsername('eloy');
        $user->setPassword($encoded);

        $manager->persist($user);
        $manager->flush();

    }

    public function getOrder()
    {
        return 6;
    }

}