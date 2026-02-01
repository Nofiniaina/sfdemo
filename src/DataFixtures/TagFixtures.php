<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public const TAG_REFERENCE = 'tag_';

    public function load(ObjectManager $manager): void
    {

        $tags = [
            [
                'name' => 'technology',
            ],
            [
                'name' => 'environment',
            ],
            [
                'name' => 'climate-change',
            ],
            [
                'name' => 'sustainability',
            ],
            [
                'name' => 'electric-vehicles',
            ],
            [
                'name' => 'urban-development',
            ],
            [
                'name' => 'agriculture',
            ],
            [
                'name' => 'remote-work',
            ],
            [
                'name' => 'real-estate',
            ],
            [
                'name' => 'artificial-intelligence',
            ],
            [
                'name' => 'healthcare',
            ],
            [
                'name' => 'medical-research',
            ],
            [
                'name' => 'ethical-business',
            ],
            [
                'name' => 'ocean',
            ],
            [
                'name' => 'plastic-pollution',
            ],
            [
                'name' => 'psychology',
            ],
            [
                'name' => 'social-media',
            ],
            [
                'name' => 'mental-health',
            ],
            [
                'name' => 'food-industry',
            ],
            [
                'name' => 'vertical-farming',
            ],
            [
                'name' => 'history',
            ],
            [
                'name' => 'music',
            ],
            [
                'name' => 'jazz',
            ],
            [
                'name' => 'cybersecurity',
            ],
            [
                'name' => 'small-business',
            ],
            [
                'name' => 'ancient-rome',
            ],
            [
                'name' => 'engineering',
            ],
            [
                'name' => 'science',
            ],
            [
                'name' => 'space-exploration',
            ],
            [
                'name' => 'astronomy',
            ],
            [
                'name' => 'sleep',
            ],
            [
                'name' => 'neuroscience',
            ],
            [
                'name' => 'economics',
            ],
            [
                'name' => 'sports-business',
            ],
            [
                'name' => 'coffee',
            ],
            [
                'name' => 'global-trade',
            ],
            [
                'name' => 'internet',
            ],
            [
                'name' => 'digital-culture',
            ],
            [
                'name' => 'traditional-medicine',
            ],
            [
                'name' => 'marketing',
            ],
            [
                'name' => 'design',
            ],
            [
                'name' => 'color-psychology',
            ],
        ];

        foreach ($tags as $index => $tagData) {
            $tag = new Tag();
            $tag->setName($tagData['name']);

            $manager->persist($tag);
            $this->addReference(self::TAG_REFERENCE . $index, $tag);
        }

        $manager->flush();
    }
}
