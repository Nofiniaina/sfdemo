<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\Tag;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostFixtures extends Fixture implements DependentFixtureInterface
{

    public const POST_REFERENCE = 'post_';

    public function __construct(private SluggerInterface $slugger) {
    }

    public function load(ObjectManager $manager): void
    {
        $posts = [
            [
                'title' => 'The Future of Electric Vehicles in Urban Transportation',
                'summary' => 'Exploring how electric vehicles are reshaping city infrastructure and reducing carbon emissions.',
                'content' => 'Electric vehicles are no longer a futuristic concept but a present reality transforming urban landscapes. Cities worldwide are installing charging stations, offering tax incentives, and creating EV-only zones. Major manufacturers have committed to phasing out internal combustion engines by 2035. The technology has matured significantly, with modern EVs offering ranges exceeding 300 miles on a single charge. Battery costs have dropped by 89% since 2010, making electric vehicles increasingly affordable. Urban planners are redesigning parking structures and residential buildings to accommodate charging infrastructure. The shift toward electric mobility is also creating new job opportunities in battery manufacturing, charging station maintenance, and grid management.'
            ],
            [
                'title' => 'Climate Change Impact on Mediterranean Agriculture',
                'summary' => 'How rising temperatures and changing rainfall patterns are affecting traditional farming in Southern Europe.',
                'content' => 'Mediterranean farmers are facing unprecedented challenges as climate patterns shift dramatically. Olive groves that have thrived for centuries now struggle with irregular rainfall and extreme heat waves. Wine producers are moving vineyards to higher elevations and experimenting with drought-resistant grape varieties. Traditional crops like wheat and barley are experiencing reduced yields due to heat stress during critical growth periods. Farmers are adopting new irrigation technologies, including drip systems and moisture sensors, to conserve water. Some are diversifying into tropical fruits like avocados and mangoes, which were previously unsuitable for the region. Agricultural researchers are developing heat-tolerant crop varieties and exploring ancient farming techniques that may offer solutions for the changing climate.'
            ],
            [
                'title' => 'The Rise of Remote Work and Its Effect on Real Estate Markets',
                'summary' => 'Understanding how work-from-home trends are reshaping property values and urban development.',
                'content' => 'The pandemic accelerated a work-from-home revolution that continues to reshape real estate markets globally. Urban apartments in expensive city centers are seeing decreased demand as workers opt for larger homes in suburban or rural areas. Commercial real estate faces a reckoning with office vacancy rates at historic highs. Cities like San Francisco, New York, and London are experiencing population declines for the first time in decades. Conversely, smaller cities and towns with good internet connectivity are booming. Property developers are responding by creating hybrid spaces that blend residential and office features. Co-living spaces with dedicated work areas are gaining popularity. Local governments are revising zoning laws to accommodate home offices and are investing in broadband infrastructure to attract remote workers.'
            ],
            [
                'title' => 'Artificial Intelligence in Medical Diagnostics',
                'summary' => 'How machine learning algorithms are improving accuracy and speed in disease detection.',
                'content' => 'AI systems are revolutionizing medical diagnostics by analyzing medical images, lab results, and patient histories with remarkable accuracy. Algorithms can now detect certain cancers from CT scans and X-rays as accurately as experienced radiologists, often in a fraction of the time. In dermatology, AI tools analyze skin lesions to identify melanomas and other conditions. Pathologists use AI to examine tissue samples and identify abnormalities in cell structures. These systems are particularly valuable in areas with physician shortages, extending expert-level diagnostics to underserved regions. However, challenges remain around data privacy, algorithm bias, and the need for human oversight. The technology works best when augmenting rather than replacing human expertise, with doctors making final decisions based on AI recommendations.'
            ],
            [
                'title' => 'The Chocolate Industry and Sustainable Farming Practices',
                'summary' => 'Examining efforts to make cocoa production more ethical and environmentally friendly.',
                'content' => 'The chocolate industry faces growing scrutiny over sustainability and labor practices in cocoa-producing regions. West Africa produces 70% of the world\'s cocoa, but many farmers earn less than $1 per day. Deforestation for cocoa plantations has destroyed vast areas of rainforest, threatening biodiversity. Major chocolate manufacturers are responding with sustainability initiatives, investing in farmer training programs and promoting agroforestry techniques where cocoa grows alongside native trees. Fair trade and direct trade certifications help ensure better wages for farmers. Climate change poses additional challenges, as rising temperatures threaten cocoa yields. Scientists are developing climate-resistant cocoa varieties and exploring alternative growing regions. Consumer demand for ethically sourced chocolate is driving industry change, though experts say more systemic reforms are needed.'
            ],
            [
                'title' => 'Ocean Plastic Pollution: Current Solutions and Innovations',
                'summary' => 'Reviewing technologies and initiatives aimed at reducing plastic waste in marine environments.',
                'content' => 'Eight million tons of plastic enter the oceans annually, forming massive garbage patches and harming marine life. Innovative solutions are emerging to address this crisis. Ocean cleanup projects use floating barriers to collect surface plastic, while specialized vessels scoop up debris. Researchers are developing enzymes and bacteria that can break down plastic polymers. Some countries have banned single-use plastics and implemented deposit-return schemes for bottles. Companies are creating biodegradable alternatives to conventional plastics using materials like seaweed and mushroom mycelium. Microplastic pollution poses particular challenges, as these tiny particles contaminate the entire marine food chain. Prevention remains crucial, with better waste management infrastructure needed in developing countries where much ocean plastic originates. Consumer behavior change and circular economy principles are essential for long-term solutions.'
            ],
            [
                'title' => 'The Psychology of Social Media Addiction',
                'summary' => 'Understanding the neurological mechanisms behind compulsive social media use.',
                'content' => 'Social media platforms are designed to be addictive, leveraging psychological principles to maximize user engagement. The intermittent variable rewards of likes, comments, and notifications trigger dopamine releases similar to gambling. Infinite scroll features exploit our tendency to continue activities without natural stopping points. FOMO (fear of missing out) drives compulsive checking behavior, while social comparison can negatively impact self-esteem and mental health. Studies show excessive social media use correlates with increased anxiety, depression, and sleep disruption, particularly among adolescents. The average person now spends over two hours daily on social platforms. Breaking these patterns requires understanding the underlying mechanisms. Strategies include setting time limits, disabling notifications, and creating phone-free zones. Some users practice digital detoxes or delete apps entirely. Awareness of manipulation tactics helps users develop healthier relationships with technology.'
            ],
            [
                'title' => 'Vertical Farming: The Future of Urban Food Production',
                'summary' => 'How indoor agriculture is bringing fresh produce directly into cities with minimal environmental impact.',
                'content' => 'Vertical farms grow crops in stacked layers within controlled indoor environments, using 95% less water than traditional agriculture. LED lighting systems provide optimal wavelengths for photosynthesis while consuming minimal energy. These facilities can be established in urban warehouses, bringing food production closer to consumers and reducing transportation emissions. Crops grow year-round, unaffected by weather or seasons, with yields per square foot far exceeding conventional farms. Precise control over nutrients, temperature, and humidity eliminates the need for pesticides. Companies are successfully growing leafy greens, herbs, strawberries, and tomatoes vertically. Challenges include high initial capital costs and energy consumption, though renewable energy integration is improving economics. As technology advances and scales, vertical farming could help feed growing urban populations while preserving agricultural land and reducing environmental impact.'
            ],
            [
                'title' => 'The History and Evolution of Jazz Music',
                'summary' => 'Tracing jazz from its New Orleans roots to its influence on modern music genres.',
                'content' => 'Jazz emerged in early 20th century New Orleans, blending African rhythms, blues, and European harmonies into something entirely new. Pioneers like Louis Armstrong and Duke Ellington brought jazz to mainstream audiences in the 1920s and 1930s. The swing era made jazz America\'s popular music, filling dance halls nationwide. Bebop revolutionized the genre in the 1940s, with artists like Charlie Parker and Dizzy Gillespie creating complex, improvisational music. Miles Davis pushed boundaries through cool jazz, modal jazz, and fusion. John Coltrane\'s spiritual explorations expanded jazz\'s expressive possibilities. The genre influenced rock, hip-hop, and electronic music. Today, jazz thrives in clubs and concert halls worldwide, with contemporary artists blending traditional techniques with modern influences. Jazz education programs in universities ensure the tradition continues while evolving for new generations.'
            ],
            [
                'title' => 'Cybersecurity Threats Facing Small Businesses',
                'summary' => 'Why small companies are increasingly targeted by hackers and how to protect against attacks.',
                'content' => 'Small businesses face growing cybersecurity risks but often lack resources for robust protection. Hackers target smaller companies precisely because they typically have weaker defenses than large corporations. Ransomware attacks can cripple operations, with criminals demanding thousands of dollars to restore access to encrypted files. Phishing emails trick employees into revealing passwords or downloading malware. Data breaches expose customer information, resulting in legal liability and reputational damage. The average cost of a breach for small businesses exceeds $200,000, forcing many to close permanently. Essential protections include regular software updates, strong password policies, employee training, data backups, and multi-factor authentication. Cyber insurance provides financial protection against attacks. Cloud services offer enterprise-level security at affordable prices. Small businesses should conduct security audits, create incident response plans, and stay informed about emerging threats.'
            ],
            [
                'title' => 'The Renaissance: Art, Science, and Cultural Revolution',
                'summary' => 'Exploring the factors that sparked one of history\'s most transformative periods.',
                'content' => 'The Renaissance began in 14th century Italy and spread throughout Europe, marking the transition from medieval to modern thinking. Wealthy merchant families like the Medici patronized artists, architects, and scholars, creating an environment where creativity flourished. Artists like Leonardo da Vinci, Michelangelo, and Raphael revolutionized painting and sculpture through realistic human anatomy, perspective, and emotion. The printing press democratized knowledge, spreading ideas faster than ever before. Humanist philosophy emphasized individual potential and classical learning. Scientists challenged traditional beliefs, with figures like Copernicus and Galileo reshaping understanding of the cosmos. Architecture returned to classical Greek and Roman proportions, seen in magnificent structures like St. Peter\'s Basilica. The Renaissance established foundations for modern science, art, and Western thought. Its emphasis on observation, experimentation, and human achievement continues influencing culture five centuries later.'
            ],
            [
                'title' => 'Coral Reef Ecosystems Under Threat',
                'summary' => 'Examining the causes of coral bleaching and efforts to preserve these vital marine habitats.',
                'content' => 'Coral reefs support 25% of marine species despite covering less than 1% of the ocean floor, but they face existential threats from climate change. Rising water temperatures cause coral bleaching, where stressed corals expel symbiotic algae and turn white. Without these algae, corals starve and die. Ocean acidification from absorbed CO2 weakens coral skeletons, making them vulnerable to storms. Pollution, overfishing, and destructive fishing practices compound these problems. The Great Barrier Reef has experienced multiple mass bleaching events, losing half its coral since 1995. Scientists are developing heat-resistant coral varieties through selective breeding and genetic techniques. Marine protected areas help reefs recover by limiting human impact. Coral restoration projects transplant healthy coral fragments to degraded reefs. However, these efforts cannot fully counteract warming oceans. Reducing global emissions remains the only long-term solution for preserving coral ecosystems.'
            ],
            [
                'title' => 'The Economics of Professional Sports',
                'summary' => 'Understanding revenue streams, salary caps, and the business behind modern athletics.',
                'content' => 'Professional sports have evolved into multi-billion dollar industries driven by television contracts, sponsorships, and merchandise sales. Broadcasting rights for major leagues generate billions annually, with networks paying premium prices for exclusive access. Ticket sales and stadium experiences remain important, though clubs increasingly prioritize luxury suites and premium seating. Sponsorship deals plaster corporate logos on jerseys, stadiums, and broadcasts. Star athletes command salaries in the tens of millions, leading some leagues to implement salary caps for competitive balance. Transfer fees in European soccer can exceed $100 million for elite players. Team valuations have skyrocketed, with franchises in major leagues worth billions. Sports betting has created new revenue opportunities, though it raises integrity concerns. Leagues are expanding globally, playing games in international markets. The business model relies on creating emotional connections that transcend rational consumer behavior, turning fans into lifetime customers.'
            ],
            [
                'title' => 'Ancient Rome: Engineering Marvels That Last Millennia',
                'summary' => 'How Roman innovations in construction and infrastructure influenced modern civilization.',
                'content' => 'Roman engineers created structures so well-built that many remain functional two thousand years later. The Pantheon\'s concrete dome, completed in 126 AD, is still the world\'s largest unreinforced concrete dome. Roman aqueducts transported water across vast distances using precise gradients, with some still supplying water to modern cities. The road network connected the empire, using layered construction techniques that modern engineers study. Romans perfected concrete by mixing volcanic ash with lime, creating material that strengthens underwater, unlike modern concrete which deteriorates. Their sanitation systems included public bathrooms, sewers, and fresh water distribution. Amphitheaters like the Colosseum showcased advanced understanding of crowd management and structural engineering. Central heating systems warmed public baths and wealthy homes. Roman engineering principles influenced architects and engineers throughout history. Many techniques were lost during the Dark Ages and only rediscovered during the Renaissance, demonstrating the sophistication of Roman technological achievement.'
            ],
            [
                'title' => 'Sleep Science: Understanding Why We Need Rest',
                'summary' => 'Recent discoveries about sleep cycles, memory consolidation, and health impacts of sleep deprivation.',
                'content' => 'Sleep is essential for physical and mental health, yet modern society systematically undervalues it. During sleep, the brain consolidates memories, transferring information from short-term to long-term storage. The glymphatic system clears metabolic waste from the brain, potentially reducing Alzheimer\'s risk. Sleep cycles alternate between REM and non-REM stages, each serving distinct functions. Growth hormone release during deep sleep facilitates tissue repair and muscle growth. Chronic sleep deprivation increases risks of obesity, diabetes, heart disease, and depression. It impairs judgment, reaction time, and emotional regulation. Adults need 7-9 hours nightly, though individual requirements vary. Modern obstacles include blue light from screens, caffeine consumption, stress, and 24/7 work culture. Sleep hygiene practices like consistent schedules, cool dark bedrooms, and pre-sleep routines improve sleep quality. Some companies now recognize sleep\'s importance, with policies discouraging after-hours emails and providing nap rooms.'
            ],
            [
                'title' => 'The Coffee Trade: From Bean to Cup',
                'summary' => 'Exploring the global supply chain that brings coffee from tropical farms to your morning cup.',
                'content' => 'Coffee is the world\'s second-most traded commodity after oil, with 2.25 billion cups consumed daily. The journey begins on farms in tropical regions, primarily Brazil, Vietnam, Colombia, and Ethiopia. Coffee cherries are hand-picked, processed to extract beans, then dried and sorted. Beans are shipped to roasters worldwide, who develop flavor profiles through controlled heating. The specialty coffee movement emphasizes single-origin beans, direct trade relationships, and artisanal roasting. Small farmers often receive minimal compensation despite coffee\'s retail value. Fair trade and direct trade certifications aim to ensure sustainable prices, though critics debate their effectiveness. Climate change threatens coffee production, with rising temperatures reducing suitable growing areas. Researchers are developing heat-resistant varieties and exploring new growing regions. From espresso bars to instant coffee, the industry adapts to changing consumer preferences while grappling with sustainability and equity challenges in global supply chains.'
            ],
            [
                'title' => 'The Evolution of Space Exploration',
                'summary' => 'From the Space Race to commercial spaceflight and plans for Mars colonization.',
                'content' => 'Space exploration began as Cold War competition between the United States and Soviet Union. The Soviets achieved early milestones, launching Sputnik in 1957 and sending Yuri Gagarin to orbit in 1961. America responded with the Apollo program, landing humans on the Moon in 1969. After the Space Race, focus shifted to orbital stations and scientific missions. The International Space Station, continuously occupied since 2000, demonstrates international cooperation in space. Private companies now play major roles, with SpaceX reducing launch costs through reusable rockets. Commercial crew programs transport astronauts to the ISS. Space tourism has begun, with civilians paying millions for brief spaceflights. Robotic missions explore Mars, with rovers analyzing Martian geology and searching for signs of past life. Plans for permanent Mars settlements face enormous technical and biological challenges. Space exploration advances technology, inspires innovation, and expands humanity\'s perspective on our place in the universe.'
            ],
            [
                'title' => 'Microplastics: The Invisible Pollution Crisis',
                'summary' => 'How tiny plastic particles have infiltrated ecosystems worldwide and their health implications.',
                'content' => 'Microplastics are plastic fragments smaller than 5mm found everywhere from Arctic ice to human bloodstreams. They originate from degrading larger plastics, synthetic clothing fibers, tire wear, and cosmetic products. Ocean currents transport microplastics globally, with marine animals ingesting particles that accumulate up the food chain. Research has detected microplastics in drinking water, beer, salt, and seafood. They\'ve been found in human lungs, placentas, and blood, though health effects remain uncertain. Laboratory studies show microplastics can damage cells and cause inflammation. Marine life suffers documented harm, with particles blocking digestive systems and releasing toxic chemicals. The problem grows as millions of tons of plastic waste enter ecosystems annually. Solutions include reducing plastic production, improving waste management, developing biodegradable alternatives, and filtering microplastics from wastewater. However, the persistent nature of plastic means existing contamination will remain for centuries. Addressing microplastics requires systemic changes in how we produce, use, and dispose of plastics.'
            ],
            [
                'title' => 'The History of the Internet: From ARPANET to Social Media',
                'summary' => 'Tracing how a military research project evolved into the defining technology of modern life.',
                'content' => 'The internet began in 1969 as ARPANET, a U.S. Department of Defense project connecting university computers. Early development created fundamental protocols like TCP/IP that enable data transmission. Email emerged in the 1970s, becoming the first killer app. The World Wide Web, invented by Tim Berners-Lee in 1989, made the internet accessible through browsers and hyperlinks. The dot-com boom of the late 1990s saw explosive growth and spectacular failures. Google revolutionized search in 1998, making information universally accessible. Social media platforms like Facebook, Twitter, and Instagram transformed communication and culture. Smartphones put the internet in everyone\'s pocket, enabling constant connectivity. E-commerce reshaped retail, while streaming services disrupted entertainment industries. Cloud computing changed how we store and process data. Today, billions depend on the internet for work, education, entertainment, and social connection. The technology raises questions about privacy, misinformation, and the concentration of power in tech companies.'
            ],
            [
                'title' => 'Traditional Medicine Meets Modern Science',
                'summary' => 'Investigating which ancient healing practices show promise in clinical research.',
                'content' => 'Traditional medicine systems like Traditional Chinese Medicine, Ayurveda, and indigenous healing practices have treated patients for thousands of years. Modern science is now studying these approaches to identify effective therapies. Acupuncture shows benefits for chronic pain and nausea in rigorous trials, though mechanisms remain debated. Turmeric\'s active compound curcumin demonstrates anti-inflammatory properties. Artemisinin, derived from traditional Chinese herbs, is now a frontline antimalarial drug. Meditation and mindfulness, rooted in Buddhist traditions, reduce stress and anxiety with measurable brain changes. However, many traditional remedies lack scientific evidence, and some contain harmful substances. The challenge lies in applying rigorous testing while respecting cultural knowledge. Integrative medicine combines conventional and traditional approaches when evidence supports safety and efficacy. Pharmaceutical companies mine traditional medicine for drug leads, raising questions about biopiracy and intellectual property rights. As healthcare costs rise, understanding which traditional practices offer genuine benefits could improve outcomes while honoring ancestral wisdom.'
            ],
            [
                'title' => 'The Psychology of Color in Marketing and Design',
                'summary' => 'How colors influence consumer behavior and emotional responses in commercial contexts.',
                'content' => 'Colors profoundly affect human psychology and purchasing decisions, making color choice critical in branding and marketing. Red stimulates appetite and creates urgency, explaining its prevalence in fast food logos and clearance sale signs. Blue conveys trust and professionalism, favored by financial institutions and healthcare providers. Green suggests environmental consciousness and health, popular with organic brands. Yellow evokes optimism but can cause eye strain in excess. Black implies luxury and sophistication, used by premium brands. Cultural differences influence color perception, with white representing purity in Western cultures but mourning in some Eastern traditions. Research shows color increases brand recognition by 80%. Product packaging color affects perceived taste and quality. Interior designers use color psychology to influence mood and behavior in retail environments. However, individual experiences and personal preferences also shape color responses. While general patterns exist, effective color use requires understanding target audiences and testing. The field combines art, psychology, and marketing science to maximize visual impact.'
            ]
        ];

        // current index of the post the assign the user and vice versa
        $postIndex = 0;

        // mapping the index of Post each Tag index related to it
        $postTags = [
            0  => [0, 4, 5, 1, 3],
            1  => [1, 2, 6, 3],
            2  => [7, 8, 0],
            3  => [0, 9, 10, 11],
            4  => [3, 6, 12, 18],
            5  => [1, 13, 14, 3],
            6  => [15, 16, 17, 0],
            7  => [6, 19, 3, 0],
            8  => [20, 21, 22],
            9  => [23, 24, 0],
            10 => [20, 26, 27],
            11 => [1, 2, 13, 3],
            12 => [32, 33],
            13 => [20, 26, 27],
            14 => [27, 30, 31, 10],
            15 => [34, 35, 18],
            16 => [28, 29, 27, 0],
            17 => [1, 13, 14, 3],
            18 => [36, 0, 20],
            19 => [38, 27, 10],
            20 => [39, 40, 41, 15],
        ];


        for ($userIndex=1; $userIndex <= 4 ; $userIndex++) { 
            /** @var User $user */
            $user = $this->getReference(
                UserFixtures::USER_REFERENCE . $userIndex,
                User::class
            );

            for ($i = 0; $i < 5; $i++) {
                $postData = $posts[$postIndex];

                $post = new Post();
                $post->setTitle($postData['title']);
                $post->setSlug($this->slugger->slug($postData['title'])->lower());
                $post->setSummary($postData['summary']);
                $post->setContent($postData['content']);
                $post->setAuthor($user);

                if(isset($postTags[$postIndex])) {
                    foreach ($postTags[$postIndex] as $tagIndex) {
                        $post->addTag(
                            $this->getReference(TagFixtures::TAG_REFERENCE . $tagIndex,
                                Tag::class
                            )
                        );
                    }
                }

                $manager->persist($post);
                $this->addReference(self::POST_REFERENCE . $postIndex, $post);
                $postIndex++;
            }
        }


        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            TagFixtures::class,
        ];
    }
}
