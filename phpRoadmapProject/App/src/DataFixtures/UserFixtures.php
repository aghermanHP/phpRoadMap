<?php


namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\Argon2iPasswordEncoder;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $newUser = new User();
        $passwordEncoder = new Argon2iPasswordEncoder();
        $newUser->setEmail('admin@email.org');
        $newUser->setPassword($passwordEncoder->encodePassword('admin', 'admin'));
        $newUser->setRoles(['admin']);

        $manager->persist($newUser);
        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }

}