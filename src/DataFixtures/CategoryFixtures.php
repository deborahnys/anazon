<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_EXAMPLE = 'CATEGORY_EXAMPLE';

    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Panda');
        $this->addReference(self::CATEGORY_EXAMPLE, $category);
        $manager->persist($category);
        $manager->flush();
    }
}
