<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SDGController extends Controller
{
    public function index()
    {
        // Array of all SDG goals
        $goals = [
            [
                'id' => 0,
                'iconImage' => '/img/global-goals.png',
                'overlayColor' => '#00689D',
                'text' => 'THE 17 GOALS',
            ],
            [
                'id' => 1,
                'backgroundImage' => '/img/img-goal-1.jpg',
                'iconImage' => '/img/E_SDG_Icons-01.jpg',
                'overlayColor' => '#FF3A21',
                'text' => 'Goal 1: End poverty in all its forms everywhere',
                'heading' => 'No Poverty',
                'about_goal' => 'While global poverty rates have been cut by more than half since 2000, one in ten people in developing regions are still living with their families on less than the international poverty line of US$1.90 a day. Poverty is more than just a lack of money – it includes hunger, malnutrition, lack of access to education, and social exclusion. Inclusive economic growth and social protection systems are crucial to eradicating poverty worldwide.',
            ],
            [
                'id' => 2,
                'backgroundImage' => '/img/img-goal-2.jpg',
                'iconImage' => '/img/E_SDG_Icons-02.jpg',
                'overlayColor' => '#DDA63A',
                'text' => 'Goal 2: End hunger, achieve food security and improved nutrition and promote sustainable agriculture',
                'heading' => 'Zero Hunger',
                'about_goal' => 'Hunger and malnutrition continue to affect millions globally. Sustainable agricultural practices, improved access to food resources, and equitable distribution of food can help ensure no one goes hungry. Investments in rural infrastructure and small-scale farmers will play a crucial role in achieving food security for all.',
            ],
            [
                'id' => 3,
                'backgroundImage' => '/img/img-goal-3.jpg',
                'iconImage' => '/img/E_SDG_Icons-03.jpg',
                'overlayColor' => '#4C9F38',
                'text' => 'Goal 3: Ensure healthy lives and promote well-being for all at all ages',
                'heading' => 'Good Health and Well-being',
                'about_goal' => 'Ensuring universal access to quality healthcare services, reducing maternal and child mortality rates, and combating infectious diseases are key to improving global well-being. Investments in healthcare infrastructure, vaccines, and mental health support are essential for sustainable development.',
            ],
            [
                'id' => 4,
                'backgroundImage' => '/img/img-goal-4.jpg',
                'iconImage' => '/img/E_SDG_Icons-04.jpg',
                'overlayColor' => '#C5192D',
                'text' => 'Goal 4: Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all',
                'heading' => 'Quality Education',
                'about_goal' => 'Education is the foundation for sustainable development. Ensuring equal access to quality education for all—regardless of gender, disability, or socioeconomic background—will empower individuals and drive economic growth. Investing in teacher training and digital learning tools can help bridge education gaps.',
            ],
            [
                'id' => 5,
                'backgroundImage' => '/img/img-goal-5.jpg',
                'iconImage' => '/img/E_SDG_Icons-05.jpg',
                'overlayColor' => '#FF3A21',
                'text' => 'Goal 5: Achieve gender equality and empower all women and girls',
                'heading' => 'Gender Equality',
                'about_goal' => 'Gender equality is not just a human right but a foundation for a peaceful, prosperous world. Ending discrimination, ensuring equal pay, and preventing gender-based violence are essential steps toward empowering women and girls in all aspects of life.',
            ],
            [
                'id' => 6,
                'backgroundImage' => '/img/img-goal-6.jpg',
                'iconImage' => '/img/E_SDG_Icons-06.jpg',
                'overlayColor' => '#26BDE2',
                'text' => 'Goal 6: Ensure availability and sustainable management of water and sanitation for all',
                'heading' => 'Clean Water and Sanitation',
                'about_goal' => 'Access to clean water and sanitation is crucial for public health. Water scarcity, pollution, and poor sanitation contribute to diseases and environmental degradation. Sustainable water management and improved infrastructure can ensure safe water for all.',
            ],
            [
                'id' => 7,
                'backgroundImage' => '/img/img-goal-7.jpg',
                'iconImage' => '/img/E_SDG_Icons-07.jpg',
                'overlayColor' => '#FCC30B',
                'text' => 'Goal 7: Ensure access to affordable, reliable, sustainable and modern energy for all',
                'heading' => 'Affordable and Clean Energy',
                'about_goal' => 'Energy is essential for economic development, but many still lack access to reliable power. Investing in renewable energy sources like solar and wind can help reduce environmental impact and ensure energy sustainability for future generations.',
            ],
            [
                'id' => 8,
                'backgroundImage' => '/img/img-goal-8.jpg',
                'iconImage' => '/img/E_SDG_Icons-08.jpg',
                'overlayColor' => '#A21942',
                'text' => 'Goal 8: Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all',
                'heading' => 'Decent Work and Economic Growth',
                'about_goal' => 'Sustainable economic growth provides jobs and improves living standards. Supporting entrepreneurship, reducing forced labor, and ensuring fair wages contribute to a thriving global economy.',
            ],
            [
                'id' => 9,
                'backgroundImage' => '/img/img-goal-9.jpg',
                'iconImage' => '/img/E_SDG_Icons-09.jpg',
                'overlayColor' => '#FD6925',
                'text' => 'Goal 9: Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation',
                'heading' => 'Industry, Innovation, and Infrastructure',
                'about_goal' => 'Building sustainable infrastructure and fostering innovation helps economies grow while reducing environmental harm. Investments in transportation, digital technology, and sustainable industries drive progress.',
            ],
            [
                'id' => 10,
                'backgroundImage' => '/img/img-goal-10.jpg',
                'iconImage' => '/img/E_SDG_Icons-10.jpg',
                'overlayColor' => '#DD1367',
                'text' => 'Goal 10: Reduce inequality within and among countries',
                'heading' => 'Reduced Inequalities',
                'about_goal' => 'Social and economic inequalities harm societies. Policies promoting equal opportunities, economic inclusion, and reduced discrimination help create fairer, more sustainable communities.',
            ],
            [
                'id' => 11,
                'backgroundImage' => '/img/img-goal-11.jpg',
                'iconImage' => '/img/E_SDG_Icons-11.jpg',
                'overlayColor' => '#FD9D24',
                'text' => 'Goal 11: Make cities and human settlements inclusive, safe, resilient and sustainable',
                'heading' => 'Sustainable Cities and Communities',
                'about_goal' => 'Urbanization presents challenges like pollution, poor housing, and traffic congestion. Sustainable city planning ensures safe, resilient, and eco-friendly communities for growing populations.',
            ],
            [
                'id' => 12,
                'backgroundImage' => '/img/img-goal-12.jpg',
                'iconImage' => '/img/E_SDG_Icons-12.jpg',
                'overlayColor' => '#BF8B2E',
                'text' => 'Goal 12: Ensure sustainable consumption and production patterns',
                'heading' => 'Responsible Consumption and Production',
                'about_goal' => 'Overconsumption and waste damage the environment. Sustainable production methods, recycling, and reducing food waste contribute to a healthier planet.',
            ],
            [
                'id' => 13,
                'backgroundImage' => '/img/img-goal-13.jpg',
                'iconImage' => '/img/E_SDG_Icons-13.jpg',
                'overlayColor' => '#3F7E44',
                'text' => 'Goal 13: Take urgent action to combat climate change and its impacts',
                'heading' => 'Climate Action',
                'about_goal' => 'Climate change threatens ecosystems and human life. Reducing carbon emissions, transitioning to renewable energy, and implementing sustainable policies are crucial for mitigating its effects.',
            ],
            [
                'id' => 14,
                'backgroundImage' => '/img/img-goal-14.jpg',
                'iconImage' => '/img/E_SDG_Icons-14.jpg',
                'overlayColor' => '#0A97D9',
                'text' => 'Goal 14: Conserve and sustainably use the oceans, seas and marine resources',
                'heading' => 'Life Below Water',
                'about_goal' => 'Oceans provide resources and regulate the climate. Protecting marine life from pollution and overfishing ensures biodiversity and economic sustainability.',
            ],
            [
                'id' => 15,
                'backgroundImage' => '/img/img-goal-15.jpg',
                'iconImage' => '/img/E_SDG_Icons-15.jpg',
                'overlayColor' => '#56C02B',
                'text' => 'Goal 15: Protect, restore and promote sustainable use of terrestrial ecosystems',
                'heading' => 'Life on Land',
                'about_goal' => 'Deforestation and habitat destruction threaten biodiversity. Sustainable land management and conservation efforts are essential for protecting nature.',
            ],
            [
                'id' => 16,
                'backgroundImage' => '/img/img-goal-16.jpg',
                'iconImage' => '/img/E_SDG_Icons-16.jpg',
                'overlayColor' => '#56C02B',
                'text' => 'Goal 16: Protect, restore and promote sustainable use of terrestrial ecosystems',
                'heading' => 'Peace, Justice, and Strong Institutions',
                'about_goal' => 'Promoting peaceful and inclusive societies, providing access to justice for all, and building effective, accountable institutions are essential for sustainable development.',
            ],
        ];

        return view('home', compact('goals'));
    }

    public function show($id)
    {
        // Fetch the goal details based on the ID
        $goals = [
            // Same array as above
            [
                'id' => 0,
                'iconImage' => '/img/global-goals.png',
                'overlayColor' => '#00689D',
                'text' => 'THE 17 GOALS',
            ],
            [
                'id' => 1,
                'backgroundImage' => '/img/img-goal-1.jpg',
                'iconImage' => '/img/E_SDG_Icons-01.jpg',
                'overlayColor' => '#FF3A21',
                'text' => 'Goal 1: End poverty in all its forms everywhere',
                'heading' => 'No Poverty',
                'about_goal' => 'While global poverty rates have been cut by more than half since 2000, one in ten people in developing regions are still living with their families on less than the international poverty line of US$1.90 a day. Poverty is more than just a lack of money – it includes hunger, malnutrition, lack of access to education, and social exclusion. Inclusive economic growth and social protection systems are crucial to eradicating poverty worldwide.',
            ],
            [
                'id' => 2,
                'backgroundImage' => '/img/img-goal-2.jpg',
                'iconImage' => '/img/E_SDG_Icons-02.jpg',
                'overlayColor' => '#DDA63A',
                'text' => 'Goal 2: End hunger, achieve food security and improved nutrition and promote sustainable agriculture',
                'heading' => 'Zero Hunger',
                'about_goal' => 'Hunger and malnutrition continue to affect millions globally. Sustainable agricultural practices, improved access to food resources, and equitable distribution of food can help ensure no one goes hungry. Investments in rural infrastructure and small-scale farmers will play a crucial role in achieving food security for all.',
            ],
            [
                'id' => 3,
                'backgroundImage' => '/img/img-goal-3.jpg',
                'iconImage' => '/img/E_SDG_Icons-03.jpg',
                'overlayColor' => '#4C9F38',
                'text' => 'Goal 3: Ensure healthy lives and promote well-being for all at all ages',
                'heading' => 'Good Health and Well-being',
                'about_goal' => 'Ensuring universal access to quality healthcare services, reducing maternal and child mortality rates, and combating infectious diseases are key to improving global well-being. Investments in healthcare infrastructure, vaccines, and mental health support are essential for sustainable development.',
            ],
            [
                'id' => 4,
                'backgroundImage' => '/img/img-goal-4.jpg',
                'iconImage' => '/img/E_SDG_Icons-04.jpg',
                'overlayColor' => '#C5192D',
                'text' => 'Goal 4: Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all',
                'heading' => 'Quality Education',
                'about_goal' => 'Education is the foundation for sustainable development. Ensuring equal access to quality education for all—regardless of gender, disability, or socioeconomic background—will empower individuals and drive economic growth. Investing in teacher training and digital learning tools can help bridge education gaps.',
            ],
            [
                'id' => 5,
                'backgroundImage' => '/img/img-goal-5.jpg',
                'iconImage' => '/img/E_SDG_Icons-05.jpg',
                'overlayColor' => '#FF3A21',
                'text' => 'Goal 5: Achieve gender equality and empower all women and girls',
                'heading' => 'Gender Equality',
                'about_goal' => 'Gender equality is not just a human right but a foundation for a peaceful, prosperous world. Ending discrimination, ensuring equal pay, and preventing gender-based violence are essential steps toward empowering women and girls in all aspects of life.',
            ],
            [
                'id' => 6,
                'backgroundImage' => '/img/img-goal-6.jpg',
                'iconImage' => '/img/E_SDG_Icons-06.jpg',
                'overlayColor' => '#26BDE2',
                'text' => 'Goal 6: Ensure availability and sustainable management of water and sanitation for all',
                'heading' => 'Clean Water and Sanitation',
                'about_goal' => 'Access to clean water and sanitation is crucial for public health. Water scarcity, pollution, and poor sanitation contribute to diseases and environmental degradation. Sustainable water management and improved infrastructure can ensure safe water for all.',
            ],
            [
                'id' => 7,
                'backgroundImage' => '/img/img-goal-7.jpg',
                'iconImage' => '/img/E_SDG_Icons-07.jpg',
                'overlayColor' => '#FCC30B',
                'text' => 'Goal 7: Ensure access to affordable, reliable, sustainable and modern energy for all',
                'heading' => 'Affordable and Clean Energy',
                'about_goal' => 'Energy is essential for economic development, but many still lack access to reliable power. Investing in renewable energy sources like solar and wind can help reduce environmental impact and ensure energy sustainability for future generations.',
            ],
            [
                'id' => 8,
                'backgroundImage' => '/img/img-goal-8.jpg',
                'iconImage' => '/img/E_SDG_Icons-08.jpg',
                'overlayColor' => '#A21942',
                'text' => 'Goal 8: Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all',
                'heading' => 'Decent Work and Economic Growth',
                'about_goal' => 'Sustainable economic growth provides jobs and improves living standards. Supporting entrepreneurship, reducing forced labor, and ensuring fair wages contribute to a thriving global economy.',
            ],
            [
                'id' => 9,
                'backgroundImage' => '/img/img-goal-9.jpg',
                'iconImage' => '/img/E_SDG_Icons-09.jpg',
                'overlayColor' => '#FD6925',
                'text' => 'Goal 9: Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation',
                'heading' => 'Industry, Innovation, and Infrastructure',
                'about_goal' => 'Building sustainable infrastructure and fostering innovation helps economies grow while reducing environmental harm. Investments in transportation, digital technology, and sustainable industries drive progress.',
            ],
            [
                'id' => 10,
                'backgroundImage' => '/img/img-goal-10.jpg',
                'iconImage' => '/img/E_SDG_Icons-10.jpg',
                'overlayColor' => '#DD1367',
                'text' => 'Goal 10: Reduce inequality within and among countries',
                'heading' => 'Reduced Inequalities',
                'about_goal' => 'Social and economic inequalities harm societies. Policies promoting equal opportunities, economic inclusion, and reduced discrimination help create fairer, more sustainable communities.',
            ],
            [
                'id' => 11,
                'backgroundImage' => '/img/img-goal-11.jpg',
                'iconImage' => '/img/E_SDG_Icons-11.jpg',
                'overlayColor' => '#FD9D24',
                'text' => 'Goal 11: Make cities and human settlements inclusive, safe, resilient and sustainable',
                'heading' => 'Sustainable Cities and Communities',
                'about_goal' => 'Urbanization presents challenges like pollution, poor housing, and traffic congestion. Sustainable city planning ensures safe, resilient, and eco-friendly communities for growing populations.',
            ],
            [
                'id' => 12,
                'backgroundImage' => '/img/img-goal-12.jpg',
                'iconImage' => '/img/E_SDG_Icons-12.jpg',
                'overlayColor' => '#BF8B2E',
                'text' => 'Goal 12: Ensure sustainable consumption and production patterns',
                'heading' => 'Responsible Consumption and Production',
                'about_goal' => 'Overconsumption and waste damage the environment. Sustainable production methods, recycling, and reducing food waste contribute to a healthier planet.',
            ],
            [
                'id' => 13,
                'backgroundImage' => '/img/img-goal-13.jpg',
                'iconImage' => '/img/E_SDG_Icons-13.jpg',
                'overlayColor' => '#3F7E44',
                'text' => 'Goal 13: Take urgent action to combat climate change and its impacts',
                'heading' => 'Climate Action',
                'about_goal' => 'Climate change threatens ecosystems and human life. Reducing carbon emissions, transitioning to renewable energy, and implementing sustainable policies are crucial for mitigating its effects.',
            ],
            [
                'id' => 14,
                'backgroundImage' => '/img/img-goal-14.jpg',
                'iconImage' => '/img/E_SDG_Icons-14.jpg',
                'overlayColor' => '#0A97D9',
                'text' => 'Goal 14: Conserve and sustainably use the oceans, seas and marine resources',
                'heading' => 'Life Below Water',
                'about_goal' => 'Oceans provide resources and regulate the climate. Protecting marine life from pollution and overfishing ensures biodiversity and economic sustainability.',
            ],
            [
                'id' => 15,
                'backgroundImage' => '/img/img-goal-15.jpg',
                'iconImage' => '/img/E_SDG_Icons-15.jpg',
                'overlayColor' => '#56C02B',
                'text' => 'Goal 15: Protect, restore and promote sustainable use of terrestrial ecosystems',
                'heading' => 'Life on Land',
                'about_goal' => 'Deforestation and habitat destruction threaten biodiversity. Sustainable land management and conservation efforts are essential for protecting nature.',
            ],
            [
                'id' => 16,
                'backgroundImage' => '/img/img-goal-16.jpg',
                'iconImage' => '/img/E_SDG_Icons-16.jpg',
                'overlayColor' => '#56C02B',
                'text' => 'Goal 16: Protect, restore and promote sustainable use of terrestrial ecosystems',
                'heading' => 'Peace, Justice, and Strong Institutions',
                'about_goal' => 'Promoting peaceful and inclusive societies, providing access to justice for all, and building effective, accountable institutions are essential for sustainable development.',
            ],
        ];

        $goal = collect($goals)->firstWhere('id', $id);

        if (!$goal) {
            abort(404, 'Goal not found');
        }

        return view('goalpage', compact('goal','goals'));
    }
}