@extends('components.main')
@section('content')
    <main id="content">
        <section class="grid grid-cols-2">
            <div class="border-right border-gray-2" id="mission">
                <div id="title">
                    <button class="bg-transparent border border-gray-1 rounded-badge cursor-pointer">
                        <h3 class="outfit outfit-bold">
                            Green Haven Project - Mangrove
                        </h3>
                    </button>
                    <h1 class="outfit outfit-bold text-xxl">
                        Green Horizons Await, Join Us in
                        Planting 10,000 Mangroves!
                    </h1>
                    <div class="border border-gray-2 rounded-xxl">
                        <div class="flex justify-between">
                            <div class="flex justify-evenly align-top">
                                <div> 
                                    <img src="{{ asset('images/tree.webp') }}" alt="Pohon Icon" width="40" />
                                </div>
                                <div class="inline-block">
                                    <h5 class="color-green text-xl inter inter-bold inline-block" id="current-tree">5,690</h5>
                                    <h5 class="text-md color-green inline-block inter color-secondary-green" id="target-tree">/ 10,000 Pohon</h5>
                                </div>
                            </div>
                            <div>
                                <button class="color-white border border-green bg-green rounded-badge cursor-pointer" id="support-action">
                                    <h3 class="outfit outfit-bold inline-block text-md">
                                        Support Our Mission
                                    </h3>
                                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.6825 13.0024C1.54 13.0024 1.3975 12.9499 1.285 12.8374C1.0675 12.6199 0.782439 12.2174 0.999939 11.9999L5.99994 6.99988C6.35994 6.63988 6.35994 6.35988 5.99994 5.99988L0.999939 0.999878C0.782439 0.782378 1.0675 0.379893 1.285 0.162393C1.5025 -0.0551074 1.8625 -0.0551074 2.08 0.162393L6.97 5.05239C7.3525 5.43489 7.57 5.95239 7.57 6.49989C7.57 7.04739 7.36 7.56489 6.97 7.94739L2.08 12.8374C1.9675 12.9424 1.825 13.0024 1.6825 13.0024Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="flex align-bottom" id="featured-image">
                    <img src="{{ asset('images/jungle-1.webp') }}" alt="Jungle Image" class="w-100" />
                </div>
            </div>
            <div class="leaderboard-bg" id="leaderboard">
                <h2 class="outfit outfit-bold text-xxl">Leaderboard</h2>
                <div class="flex" id="leaderboard-sort">
                    <button class="bg-transparent border border-lightgreen rounded-badge cursor-pointer color-lightgreen mr-2">
                        <h3 class="outfit outfit-bold">
                            Most Donation
                        </h3>
                    </button>
                    <button class="bg-transparent border border-gray-2 rounded-badge cursor-pointer">
                        <h3 class="outfit outfit-bold color-gray-3">
                            Most Recent
                        </h3>
                    </button>
                </div>
                <div id="leaderboard-content">
                    @foreach($data['leaderboards'] as $index => $leaderboard)
                        <div class="flex justify-between">
                            <div class="flex align-center">
                                <div class="{{ $leaderboard['bg-color'] }} flex align-center justify-center rounded-circle color-white leaderboard-rank">
                                    <p>{{ str_pad($index + 1, 2, "0", STR_PAD_LEFT) }}</p>
                                </div>
                                <div class="badge-icon">
                                    <img src="{{ $leaderboard['icon'] }}" alt="Badge Icon" class="leaderboard-top3-badge " />
                                </div>
                                <div class="leaderboard-info">
                                    <p class="text-sm">{{ $leaderboard['from'] }}</p>
                                    <h3 class="outfit outfit-bold text-lg">{{ $leaderboard['name'] }}</h3>
                                </div>
                            </div>
                            <div class="flex align-center leaderboard-point">
                                <img src="{{ asset('images/tree.webp') }}" alt="Tree Icon" width="30" />
                                <p class="inter color-green"><span class="inter inter-bold">{{ $leaderboard['tree'] }}</span> Pohon</p>
                            </div>
                        </div>
                        <hr class="border border-gray-2" />
                    @endforeach
                </div>
            </div>
        </section>
        <section id="supporter">
            <img src="{{ asset('images/jala.webp') }}" alt="Jala Logo" height="36" />
            <img src="{{ asset('images/efishery.webp') }}" alt="Efishery Logo" height="36" />
            <img src="{{ asset('images/azarine.webp') }}" alt="Azarine Logo" height="36" />
            <img src="{{ asset('images/kompas.webp') }}" alt="Kompas Logo" height="36" />
            <img src="{{ asset('images/tribun.webp') }}" alt="Tribun Logo" height="36" />
            <img src="{{ asset('images/jawa-pos.webp') }}" alt="Jawa Pos Logo" height="36" />
        </section>
        <section id="about">
            <div class="flex justify-center icons">
                <img src="{{ asset('images/jci-icon.webp') }}" alt="JCI Icon" width="120" height="120" />
                <img src="{{ asset('images/green-haven-project-icon.webp') }}" alt="Green Haven Icon" width="120" height="120" />
            </div>
            <div id="about-title">
                <div>
                    <h2 class="outfit outfit-bold text-xxl text-center">Event Summary</h2>
                    <p class="text-center text-lg">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>
                </div>
            </div>
            <div id="about-image">
                <div id="transformation">
                    <div>
                        <img src="{{ asset('images/arrow-transform.webp') }}" alt="Transform Arrow" />
                    </div>
                    <h4 class="text-center">TRANSFORMATION</h4>
                </div>
                <div>
                    <img src="{{ asset('images/before.webp') }}" alt="Before" class="before" />
                    <p class="text-center outfit outfit-bold text-lg">Before mangroves were planted</p>
                </div>
                <div>
                    <img src="{{ asset('images/after.webp') }}" alt="Before" class="after" />
                    <p class="text-center outfit outfit-bold text-lg">After mangroves were planted</p>
                </div>
            </div>
        </section>
        <section id="event">
            <div id="event-title">
                <div>
                    <h2 class="outfit outfit-bold text-xxl text-center color-green">Event Summary</h2>
                    <p class="text-center text-lg">
                    We give you a brief overview of the event to give you a glimpse of what we're doing 
                    in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
                </div>
            </div>
            <div id="event-card">
                <div>
                    <h2 class="text-xl" id="event-date">
                        26/04/2024
                    </h2>
                    <h2 class="text-xl" id="event-time">
                        08:00 - 11:00 WIB
                    </h2>
                    <p>
                        Join the impactful journey of planting mangroves, 
                        where you'll learn, collaborate with locals, earn recognition, 
                        and share your story through media coverage
                    </p>
                    <hr class="border border-gray-2" />
                    <button id="view-event-details">
                        <span>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.41113 18.4297C9.31113 18.4297 9.22113 18.4097 9.12113 18.3697C8.84113 18.2597 8.66113 17.9797 8.66113 17.6797V11.6797C8.66113 11.2697 9.00113 10.9297 9.41113 10.9297C9.82113 10.9297 10.1611 11.2697 10.1611 11.6797V15.8697L10.8811 15.1497C11.1711 14.8597 11.6511 14.8597 11.9411 15.1497C12.2311 15.4397 12.2311 15.9197 11.9411 16.2097L9.94113 18.2097C9.80113 18.3497 9.60113 18.4297 9.41113 18.4297Z" fill="white"/>
                                <path d="M9.41114 18.4297C9.22114 18.4297 9.03114 18.3597 8.88114 18.2097L6.88114 16.2097C6.59114 15.9197 6.59114 15.4397 6.88114 15.1497C7.17114 14.8597 7.65114 14.8597 7.94114 15.1497L9.94114 17.1497C10.2311 17.4397 10.2311 17.9197 9.94114 18.2097C9.79114 18.3597 9.60114 18.4297 9.41114 18.4297Z" fill="white"/>
                                <path d="M15.4111 23.4297H9.41113C3.98113 23.4297 1.66113 21.1097 1.66113 15.6797V9.67972C1.66113 4.24972 3.98113 1.92972 9.41113 1.92972H14.4111C14.8211 1.92972 15.1611 2.26972 15.1611 2.67972C15.1611 3.08972 14.8211 3.42972 14.4111 3.42972H9.41113C4.80113 3.42972 3.16113 5.06972 3.16113 9.67972V15.6797C3.16113 20.2897 4.80113 21.9297 9.41113 21.9297H15.4111C20.0211 21.9297 21.6611 20.2897 21.6611 15.6797V10.6797C21.6611 10.2697 22.0011 9.92972 22.4111 9.92972C22.8211 9.92972 23.1611 10.2697 23.1611 10.6797V15.6797C23.1611 21.1097 20.8411 23.4297 15.4111 23.4297Z" fill="white"/>
                                <path d="M22.4111 11.4297H18.4111C14.9911 11.4297 13.6611 10.0997 13.6611 6.67972V2.67972C13.6611 2.37972 13.8411 2.09972 14.1211 1.98972C14.4011 1.86972 14.7211 1.93972 14.9411 2.14972L22.9411 10.1497C23.1511 10.3597 23.2211 10.6897 23.1011 10.9697C22.9811 11.2497 22.7111 11.4297 22.4111 11.4297ZM15.1611 4.48972V6.67972C15.1611 9.25972 15.8311 9.92972 18.4111 9.92972H20.6011L15.1611 4.48972Z" fill="white"/>
                            </svg>
                        </span>
                        <span>
                            View Event Details
                        </span>
                    </button>
                </div>
                <div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide opacity-100"><img src="{{ asset('images/event-1.webp') }}" alt="Event Image 1"></div>
                            <div class="swiper-slide opacity-0"><img src="{{ asset('images/event-2.webp') }}" alt="Event Image 2"></div>
                            <div class="swiper-slide opacity-0"><img src="{{ asset('images/event-3.webp') }}" alt="Event Image 3"></div>
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Navigation -->
                        <div class="swiper-button swiper-button-next">
                            <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2486 25.259C18.0238 25.259 17.7991 25.1762 17.6216 24.9988L9.90898 17.2861C8.65509 16.0322 8.65509 13.974 9.90898 12.7201L17.6216 5.00744C17.9647 4.66439 18.5325 4.66439 18.8755 5.00744C19.2186 5.35048 19.2186 5.91829 18.8755 6.26133L11.1629 13.974C10.5951 14.5418 10.5951 15.4644 11.1629 16.0322L18.8755 23.7449C19.2186 24.0879 19.2186 24.6557 18.8755 24.9988C18.6981 25.1644 18.4733 25.259 18.2486 25.259Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="swiper-button swiper-button-prev">
                            <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2486 25.259C18.0238 25.259 17.7991 25.1762 17.6216 24.9988L9.90898 17.2861C8.65509 16.0322 8.65509 13.974 9.90898 12.7201L17.6216 5.00744C17.9647 4.66439 18.5325 4.66439 18.8755 5.00744C19.2186 5.35048 19.2186 5.91829 18.8755 6.26133L11.1629 13.974C10.5951 14.5418 10.5951 15.4644 11.1629 16.0322L18.8755 23.7449C19.2186 24.0879 19.2186 24.6557 18.8755 24.9988C18.6981 25.1644 18.4733 25.259 18.2486 25.259Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="event-step">
                <div>
                    <hr class="active" />
                    <h2 class="outfit outfit-bold">01</h2>
                    <p>
                        Introducing the beauty 
                        of mangroves on a journey to the planting site.
                    </p>
                </div>
                <div>
                    <hr />
                    <h2 class="outfit outfit-bold">02</h2>
                    <p>
                        Working together with 
                        local farmers while 
                        planting each mangrove
                    </p>
                </div>
                <div>
                    <hr />
                    <h2 class="outfit outfit-bold">03</h2>
                    <p>
                        Exploring the wonders of mangrove ecotourism, an educational adventure.
                    </p>
                </div>
                <div>
                    <hr />
                    <h2 class="outfit outfit-bold">04</h2>
                    <p>
                        Receive a plaque & badge, 
                        a mark of honor for every tree you plant.
                    </p>
                </div>
                <div>
                    <hr />
                    <h2 class="outfit outfit-bold">05</h2>
                    <p>
                        Coverage & documentation by news media, share your story of change!
                    </p>
                </div>
            </div>
        </section>
        <section id="sponsorship">
            <div id="sponsorship-title">
                <div>
                    <h2 class="outfit outfit-bold text-xxl text-center">Sponsorship Packages</h2>
                    <p class="text-center text-lg">Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>
                </div>
            </div>
            <div id="sponsorship-table">
                <div>
                    <h2 class="outfit outfit-bold text-center text-xl">Personal Sponsorship Package</h2>
                </div>
                <div id="personal-sponsorship-package">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left">Membership Tier</th>
                                <th class="text-center">Min. Seeds</th>
                                <th class="text-center">Min. Buy</th>
                                <th class="text-center">Benefits</th>
                                <th class="text-center">Donors</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['personalSponsorship'] as $index => $personal)
                                @if(($index + 1) % 2 == 0)
                                    <tr class="odd">
                                @else
                                    <tr>
                                @endif
                                    <td>
                                        <div class="flex align-center">
                                            <img src="{{ $personal['icon'] }}" height="27" />
                                            <span>{{ $personal['tier'] }}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $personal['minSeed'] }} Seeds</td>
                                    <td class="text-center">{{ $personal['minBuy'] }}</td>
                                    <td class="text-center">{{ $personal['benefits'] }}</td>
                                    <td class="text-center">{{ $personal['donors'] }}</td>
                                    <td>
                                        <button>
                                            <span>Support Our Mission</span>
                                            <span>
                                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.6825 15.8899C6.54 15.8899 6.3975 15.8374 6.285 15.7249C6.0675 15.5074 5.78244 15.1049 5.99994 14.8874L10.9999 9.88739C11.3599 9.52739 11.3599 9.24739 10.9999 8.88739L5.99994 3.88739C5.78244 3.66989 6.0675 3.2674 6.285 3.0499C6.5025 2.8324 6.8625 2.8324 7.08 3.0499L11.97 7.93991C12.3525 8.32241 12.57 8.83991 12.57 9.38741C12.57 9.93491 12.36 10.4524 11.97 10.8349L7.08 15.7249C6.9675 15.8299 6.825 15.8899 6.6825 15.8899Z" fill="white"/>
                                                </svg>
    
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr class="separator" />
                <div>
                    <h2 class="outfit outfit-bold text-center text-xl">Corporate Sponsorship Package</h2>
                </div>
                <div id="corporate-sponsorship-package">
                    <table>
                        <thead>
                            <tr>
                                <th>Benefits</th>
                                <th>Eco Trailblazers</th>
                                <th>Green Innovators</th>
                                <th>Eco Vanguard</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['corporateSponsorship'] as $index => $corporate)
                            @if(($index + 1) % 2 == 0)
                            <tr class="odd">
                            @else
                            <tr>
                            @endif
                                <td class="text-center">{{ $corporate['benefits'] }}</td>
                                <td class="text-center">
                                    @if($corporate['eco_trailblazers'] === true)
                                        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0003 27.6591C21.8752 27.6591 27.5002 22.0341 27.5002 15.1591C27.5002 8.28406 21.8752 2.65906 15.0003 2.65906C8.12525 2.65906 2.50025 8.28406 2.50025 15.1591C2.50025 22.0341 8.12525 27.6591 15.0003 27.6591Z" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.68787 15.1592L13.2254 18.6967L20.3129 11.6217" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @elseif($corporate['eco_trailblazers'] === false)
                                        &nbsp;
                                    @else
                                        {{ $corporate['eco_trailblazers'] }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($corporate['green_innovators'] === true)
                                        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0003 27.6591C21.8752 27.6591 27.5002 22.0341 27.5002 15.1591C27.5002 8.28406 21.8752 2.65906 15.0003 2.65906C8.12525 2.65906 2.50025 8.28406 2.50025 15.1591C2.50025 22.0341 8.12525 27.6591 15.0003 27.6591Z" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.68787 15.1592L13.2254 18.6967L20.3129 11.6217" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @elseif($corporate['green_innovators'] === false)
                                        &nbsp;
                                    @else
                                        {{ $corporate['green_innovators'] }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($corporate['eco_vanguard'] === true)
                                        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0003 27.6591C21.8752 27.6591 27.5002 22.0341 27.5002 15.1591C27.5002 8.28406 21.8752 2.65906 15.0003 2.65906C8.12525 2.65906 2.50025 8.28406 2.50025 15.1591C2.50025 22.0341 8.12525 27.6591 15.0003 27.6591Z" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.68787 15.1592L13.2254 18.6967L20.3129 11.6217" stroke="#292D32" stroke-width="1.82877" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @elseif($corporate['eco_vanguard'] === false)
                                        &nbsp;
                                    @else
                                        {{ $corporate['eco_vanguard'] }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            <tr class="corporate-donation">
                                <td class="text-center">
                                    Make a Donation
                                </td>
                                <td>
                                    <button>
                                        <span>Support Our Mission</span>
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.1825 15.9017C7.04 15.9017 6.8975 15.8492 6.785 15.7367C6.5675 15.5192 6.28244 15.1167 6.49994 14.8992L11.4999 9.89917C11.8599 9.53917 11.8599 9.25917 11.4999 8.89917L6.49994 3.89917C6.28244 3.68167 6.5675 3.27918 6.785 3.06168C7.0025 2.84418 7.3625 2.84418 7.58 3.06168L12.47 7.95168C12.8525 8.33419 13.07 8.85169 13.07 9.39919C13.07 9.94669 12.86 10.4642 12.47 10.8467L7.58 15.7367C7.4675 15.8417 7.325 15.9017 7.1825 15.9017Z" fill="#518BBB"/>
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <button>
                                        <span>Support Our Mission</span>
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.1825 15.9017C7.04 15.9017 6.8975 15.8492 6.785 15.7367C6.5675 15.5192 6.28244 15.1167 6.49994 14.8992L11.4999 9.89917C11.8599 9.53917 11.8599 9.25917 11.4999 8.89917L6.49994 3.89917C6.28244 3.68167 6.5675 3.27918 6.785 3.06168C7.0025 2.84418 7.3625 2.84418 7.58 3.06168L12.47 7.95168C12.8525 8.33419 13.07 8.85169 13.07 9.39919C13.07 9.94669 12.86 10.4642 12.47 10.8467L7.58 15.7367C7.4675 15.8417 7.325 15.9017 7.1825 15.9017Z" fill="#518BBB"/>
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <button>
                                        <span>Support Our Mission</span>
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.1825 15.9017C7.04 15.9017 6.8975 15.8492 6.785 15.7367C6.5675 15.5192 6.28244 15.1167 6.49994 14.8992L11.4999 9.89917C11.8599 9.53917 11.8599 9.25917 11.4999 8.89917L6.49994 3.89917C6.28244 3.68167 6.5675 3.27918 6.785 3.06168C7.0025 2.84418 7.3625 2.84418 7.58 3.06168L12.47 7.95168C12.8525 8.33419 13.07 8.85169 13.07 9.39919C13.07 9.94669 12.86 10.4642 12.47 10.8467L7.58 15.7367C7.4675 15.8417 7.325 15.9017 7.1825 15.9017Z" fill="#518BBB"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div id="gallery-title">
                <div>
                    <h2 class="outfit outfit-bold text-xxl text-center">Donate Today and be a
                    Guardian of the Green Belt.</h2>
                    <p class="text-center text-lg">Join us in our mission to rejuvenate and protect our shorelines 
                    by donating to our mangrove planting project. </p>
                </div>
                <div class="flex justify-center">
                    <button>
                        <span>
                            Support Our Mission
                        </span>
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.6825 16.0099C6.54 16.0099 6.3975 15.9574 6.285 15.8449C6.0675 15.6274 5.78244 15.2249 5.99994 15.0074L10.9999 10.0074C11.3599 9.64739 11.3599 9.36739 10.9999 9.00739L5.99994 4.00739C5.78244 3.78989 6.0675 3.3874 6.285 3.1699C6.5025 2.9524 6.8625 2.9524 7.08 3.1699L11.97 8.0599C12.3525 8.4424 12.57 8.9599 12.57 9.5074C12.57 10.0549 12.36 10.5724 11.97 10.9549L7.08 15.8449C6.9675 15.9499 6.825 16.0099 6.6825 16.0099Z" fill="white"/>
                        </svg>
                    </button>
                </div>
                <div>
                    <div id="gallery-image">
                        <img src="{{ asset('images/gallery-1.webp') }}" alt="Galeri 1" height="425.53" />
                        <img src="{{ asset('images/gallery-2.webp') }}" alt="Galeri 2" height="281.22" />
                        <img src="{{ asset('images/gallery-3.webp') }}" alt="Galeri 3" height="161" />
                        <img src="{{ asset('images/gallery-4.webp') }}" alt="Galeri 4" height="281.22" />
                        <img src="{{ asset('images/gallery-5.webp') }}" alt="Galeri 5" height="425.53" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        var swiperIndex = 0;

        function swipeNext() {
            console.log(swiperIndex)
            let lastIndex = swiperIndex;
            swiperIndex = swiperIndex + 1;
            if(swiperIndex > 2) {
                swiperIndex = 0;
            }
            document.querySelectorAll('.swiper-slide')[lastIndex].classList.remove('opacity-100');
            document.querySelectorAll('.swiper-slide')[lastIndex].classList.add('opacity-0');
            document.querySelectorAll('.swiper-slide')[swiperIndex].classList.remove('opacity-0');
            document.querySelectorAll('.swiper-slide')[swiperIndex].classList.add('opacity-100');
        }

        function swipePrev() {
            let lastIndex = swiperIndex;
            swiperIndex = swiperIndex - 1;
            if(swiperIndex < 0) {
                swiperIndex = 2;
            }
            document.querySelectorAll('.swiper-slide')[lastIndex].classList.remove('opacity-100');
            document.querySelectorAll('.swiper-slide')[lastIndex].classList.add('opacity-0');
            document.querySelectorAll('.swiper-slide')[swiperIndex].classList.remove('opacity-0');
            document.querySelectorAll('.swiper-slide')[swiperIndex].classList.add('opacity-100');
        }

        window.addEventListener('load', function() {
            document.querySelector('.swiper-button-next').addEventListener('click', swipeNext);
            document.querySelector('.swiper-button-prev').addEventListener('click', swipePrev);
            let contentHeight = document.querySelector('#content').clientHeight;
            document.body.style.height = `${contentHeight}px`;
        });
    </script>
@endsection