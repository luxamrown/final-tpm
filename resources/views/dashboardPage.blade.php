<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Dashboard </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dashboardPage.css') }}"/>
</head>
<body>
    <nav class = "dashboard__navigation">
        <h1 class = "dashboard__navigation__title"> HACK<span>TECH</span></h1>

        <section class = "dashboard__navigation__link__container">
            <section class = "dashboard__navigation__link dashboard__navigation__link__first dashboard__navigation__link__active">
                <section class = "dashboard__navigation__link__icon__container">
                    <img
                        class = "dashboard__navigation__link__icon"
                        src = "{{ asset('img/icon-dashboard.png') }}"
                    />
                </section>
                <section class = "dashboard__navigation__link__text">
                    Dashboard
                </section>
            </section>

            <section class = "dashboard__navigation__link">
                <section class = "dashboard__navigation__link__icon__container">
                    <img
                        class = "dashboard__navigation__link__icon"
                        src = "{{ asset('img/icon-timeline.png') }}"
                    />
                </section>
                <section class = "dashboard__navigation__link__text">
                    Timeline
                </section>
            </section>
        </section>

        <section class = "dashboard__navigation__link dashboard__navigation__logout__container">
            <section class = "dashboard__navigation__link__icon__container">
                <img
                    class = "dashboard__navigation__logout__icon"
                    src = "{{ asset('img/icon-logout.png') }}"
                />
            </section>
            <section class = "dashboard__navigation__link__text">
                Logout
            </section>
        </section>
    </nav>

    <main class = "dashboard">
        <header class = "dashboard__header">
            <h1 class = "dashboard__header__title"> Hello, <span class = "leader-full-name"> HepiNewYear</span>! </h1>
        </header>

        <section class = "dashboard__announcement">
            <section class = "dashboard__announcement__icon__container">
                <img
                    class = "dashboard__announcement__icon"
                    src = "{{ asset('img/icon-announcement.png') }}"
                />
            </section>
            <section class = "dashboard__announcement__text">
                Lorem ipsum dolor sit amet. Qui sint dicta et quia magni qui officiis voluptas. Ad internos. 
            </section>
        </section>


        <h1 class = "dashboard__container__title"> HepiNewYears's Leader Information </h1>
        <section class = "dashboard__container">
            <section class = "dashboard__leader_information__grid__container">
                <!-- FULL NAME -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Full Name </p>

                    <section class = "dashboard__leader_information__grid__information leader-full-name">
                        Isyana Sarasvati
                    </section>
                </section>

                <!-- WHATSAPP -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Whatsapp Number </p>

                    <section class = "dashboard__leader_information__grid__information" id = "leader-whatsapp-number">
                        08195556667
                    </section>
                </section>                
 
                <!-- EMAIL -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Email </p>

                    <section class = "dashboard__leader_information__grid__information" id = "leader-email">
                        isyana.sarasvati@gmail.com
                    </section>
                </section>                  

                <!-- LINE -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Line ID </p>

                    <section class = "dashboard__leader_information__grid__information" id = "leader-line">
                        Test
                    </section>
                </section>                  

                <!-- GITHUB -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Github </p>

                    <section class = "dashboard__leader_information__grid__information" id = "leader-github">
                        Test
                    </section>
                </section> 

                <!-- BIRTH -->
                <section class = "dashboard__leader_information__grid">
                    <p class = "dashboard__leader_information__grid__text"> Birth Place & Date </p>

                    <section class = "dashboard__leader_information__grid__information" id = "leader-birth">
                        DKI JAKARTA, 08/09/1998
                    </section>
                </section>                 

                <!-- CV -->
                <section class = "dashboard__leader_information__grid dashboard__leader_information__grid__file" id = "leader-cv">
                    <section class = "dashboard__leader_information__grid__file__icon">
                        <img 
                            src = "{{ asset('img/icon-cv.png') }}"
                        />
                    </section>
                    <section class = "dashboard__leader_information__grid__file__text">
                        View CV
                    </section>                   
                </section>                  

                <!-- ID CARD -->
                <section class = "dashboard__leader_information__grid dashboard__leader_information__grid__file" id = "leader-id-card">
                    <section class = "dashboard__leader_information__grid__file__icon">
                        <img 
                            src = "{{ asset('img/icon-cv.png') }}"
                        />
                    </section>
                    <section class = "dashboard__leader_information__grid__file__text">
                        View ID Card
                    </section>                   
                </section>                
                
            </section>

            <section class = "dashboard__contact_person__container">
                <header class = "dashboard__contact_person__header">
                    Contact Person
                </header>

                <section class = "dashboard__contact_person__information">
                    <img
                        class = "dashboard__contact_person__information__icon"
                        src = "{{ asset('img/icon-profile.png') }}"
                    />
                    <p class = "dashboard__contact_person__information__name"> Astrid Crombolani </p>
                    <p class = "dashboard__contact_person__information__number"> 081336663359 </p>
                    <p class = "dashboard__contact_person__information__email"> astrid.cmb@gmail.com </p>
                </section>

                <section class = "dashboard__contact_person__information">
                    <img
                        class = "dashboard__contact_person__information__icon"
                        src = "{{ asset('img/icon-profile.png') }}"
                    />
                    <p class = "dashboard__contact_person__information__name"> Ben Ten Eleven </p>
                    <p class = "dashboard__contact_person__information__number"> 084235744787 </p>
                    <p class = "dashboard__contact_person__information__email"> benten11@gmail.com </p>
                </section>                
            </section>
        </section>
    </main>

    <main class = "timeline">

    </main>
</body>
</html>