<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
        $admin = new User();
        $admin->setEmail("admin@test.com");
        $admin->setRoles(["ROLE_ADMIN"]);
        $admin->setPassword(password_hash("admin", PASSWORD_BCRYPT));

$manager->persist($admin);
    }
}
