<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AppController extends Controller {
    public function app() {
        return view('app', [
            'data'  => [
                'leaderboards'  => [
                    [
                        'from'      => 'Mangrove Maven',
                        'name'      => 'Budi Hartanto',
                        'tree'      => 350,
                        'bg-color'  => 'bg-green',
                        'icon'      => asset('images/leaderboard-top3.webp')
                    ],
                    [
                        'from'      => 'Mangrove Maven',
                        'name'      => 'Dewi Sartika',
                        'tree'      => 330,
                        'bg-color'  => 'bg-green',
                        'icon'      => asset('images/leaderboard-top3.webp')
                    ],
                    [
                        'from'      => 'Mangrove Maven',
                        'name'      => 'Eko Wahyudi',
                        'tree'      => 200,
                        'bg-color'  => 'bg-green',
                        'icon'      => asset('images/leaderboard-top3.webp')
                    ],
                    [
                        'from'      => 'Guardian of the Grove',
                        'name'      => 'Rina Kartika',
                        'tree'      => 190,
                        'bg-color'  => 'bg-lightgreen',
                        'icon'      => asset('images/leaderboard-4-5.webp')
                    ],
                    [
                        'from'      => 'Guardian of the Grove',
                        'name'      => 'Agus Prasetyo',
                        'tree'      => 140,
                        'bg-color'  => 'bg-limegreen',
                        'icon'      => asset('images/leaderboard-4-5.webp')
                    ],
                    [
                        'from'      => 'Mangrove Master',
                        'name'      => 'Irfan Setiawan',
                        'tree'      => 140,
                        'bg-color'  => 'bg-limegreen',
                        'icon'      => asset('images/leaderboard-6.webp')
                    ]
                ],
                'personalSponsorship'  =>   [
                    [
                        'tier'      => 'Seeding Scout',
                        'minSeed'   => 5,
                        'minBuy'    => 'IDR 75K',
                        'benefits'  => 'Badge',
                        'donors'    => '4,900 Donors',
                        'icon'      => asset('images/sponsorship-icon-1.webp')
                    ],
                    [
                        'tier'      => 'Sapling Savior',
                        'minSeed'   => 10,
                        'minBuy'    => 'IDR 150K',
                        'benefits'  => 'Badge + Pin',
                        'donors'    => '4,300 Donors',
                        'icon'      => asset('images/sponsorship-icon-2.webp')
                    ],
                    [
                        'tier'      => 'Tree Titan',
                        'minSeed'   => 20,
                        'minBuy'    => 'IDR 300K',
                        'benefits'  => 'Badge + Pin',
                        'donors'    => '15,000 Donors',
                        'icon'      => asset('images/sponsorship-icon-3.webp')
                    ],
                    [
                        'tier'      => 'Mangrove Master',
                        'minSeed'   => 50,
                        'minBuy'    => 'IDR 750K',
                        'benefits'  => 'Badge + Pin + Bag',
                        'donors'    => '5,000 Donors',
                        'icon'      => asset('images/sponsorship-icon-4.webp')
                    ],
                    [
                        'tier'      => 'Guardian Of The Grove',
                        'minSeed'   => 100,
                        'minBuy'    => 'IDR 1,500K',
                        'benefits'  => 'Badge + Pin + Bag',
                        'donors'    => '300 Donors',
                        'icon'      => asset('images/sponsorship-icon-5.webp')
                    ],
                    [
                        'tier'      => 'Mangrove Maven',
                        'minSeed'   => 200,
                        'minBuy'    => 'IDR 3,000K',
                        'benefits'  => 'Badge + Pin + Bag',
                        'donors'    => '10 Donors',
                        'icon'      => asset('images/sponsorship-icon-6.webp')
                    ]
                ],
                'corporateSponsorship'  => [
                    [
                        'benefits'          => 'Price',
                        'eco_trailblazers'  => '15 Million IDR',
                        'green_innovators'  => '30 Million IDR',
                        'eco_vanguard'      => '45 Million IDR',
                    ],
                    [
                        'benefits'          => 'CO2 Sequestration',
                        'eco_trailblazers'  => '22,5 ton/year',
                        'green_innovators'  => '45 ton/year',
                        'eco_vanguard'      => '67,5 ton/year',
                    ],
                    [
                        'benefits'          => 'Number of Trees',
                        'eco_trailblazers'  => '1000 Trees',
                        'green_innovators'  => '2000 Trees',
                        'eco_vanguard'      => '3000 Trees',
                    ],
                    [
                        'benefits'          => 'Logo on JCI Banner',
                        'eco_trailblazers'  => true,
                        'green_innovators'  => true,
                        'eco_vanguard'      => true,
                    ],
                    [
                        'benefits'          => 'Logo on Communal Stainless Plate',
                        'eco_trailblazers'  => true,
                        'green_innovators'  => true,
                        'eco_vanguard'      => true,
                    ],
                    [
                        'benefits'          => 'Considered as Main Sponsor',
                        'eco_trailblazers'  => true,
                        'green_innovators'  => true,
                        'eco_vanguard'      => true,
                    ],
                    [
                        'benefits'          => 'Dedicated Stainless Plate',
                        'eco_trailblazers'  => false,
                        'green_innovators'  => true,
                        'eco_vanguard'      => true,
                    ],
                    [
                        'benefits'          => 'Report Update on Planted Trees',
                        'eco_trailblazers'  => false,
                        'green_innovators'  => true,
                        'eco_vanguard'      => true,
                    ],
                    [
                        'benefits'          => 'Logo on Event Clothings',
                        'eco_trailblazers'  => false,
                        'green_innovators'  => false,
                        'eco_vanguard'      => true,
                    ],
                ]
            ]
        ]);
    }
}