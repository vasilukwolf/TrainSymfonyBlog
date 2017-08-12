<?php
namespace BlogBundle\DataFixtures\ORM;

use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $blog = new Blog;
        $blog->setTitle("This is first title");
        $blog->setBody("<p>Post text</p>");
        $blog->setSummary("<p>Summary text</p>");
        $blog->setCreated(new \DateTime());

        $manager->persist($blog);
        $manager->flush();
    }
}
