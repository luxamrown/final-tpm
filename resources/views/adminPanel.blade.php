<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin Panel </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}"/>
</head>
<body>
    <header class = "header">
        <section class = "header__logo">
            <h1> HACK<span>TECH</span></h1>
        </section>
        <nav class = "header__navigation">
            <ul class = "header__navigation__list"> 
                <li class = "header__navigation__list__item"> 
                    <img
                        src = "{{ asset('img/icon-refresh.png') }}"
                        id = "refresh-button"
                    />
                </li>
                <li class = "header__navigation__list__item"> 
                    <img
                        src = "{{ asset('img/icon-notification.png') }}"
                    />
                </li>
                <li class = "header__navigation__list__item"> 
                    <details class = "header__navigation__admin">
                        <summary class = "header__navigation__admin_profile">
                            <img
                            src = "{{ asset('img/icon-admin.png') }}"
                            />
                            <h3 id = "admin"> Admin 1 </h3>
                        </summary>
                        <button class = "header__navigation__admin_logout" id = "logout-button">
                            Logout
                        </button>
                    </details>
                </li>
            </ul>
        </nav>
    </header>

    <main class = "main">
        <section class = "main__left">
            <header class = "main__left__header">
                <h3> Participants </h3>

                <section class = "main__left__header__input__container">
                    <img
                        src = "{{asset('img/icon-search.png')}}"
                    />
                    <input
                        class = "main__left__header__input"
                        type = "text"
                        id = "search-bar"
                        placeholder = "Search for teams..."
                    />                     
                </section>

                <details class = "main__left__header__button" id = "button-filter">
                    <summary>
                        Filter
                        <img
                            src = "{{asset('img/icon-filter.png')}}"
                        />                        
                    </summary>
                    <section class = "main__left__header__checkbox__container">
                        <input
                            type = "checkbox"
                            value = "is-binusian"
                            id = "filter-binusian"
                        />
                        <label for = "filter-binusian"> Binusian </label>                        
                    </section>

                </details>

                <button class = "main__left__header__button" id = "button-sort">
                    Sort
                    <img
                        src = "{{asset('img/icon-sort.png')}}"
                    />
                </button>
            </header>
            

            <section class = "table__container">
                <table class = "table">
                    <thead class = "table__head">
                        <td width = "5%"> ID </td>
                        <td width = "30%"> Team Name </td>
                        <td width = "20%"> Registration Date </td>
                        <td width = "45%"> Action </td>
                    </thead>
                    <tbody class = "table__body" id = "table-body"></tbody>
                </table>                
            </section>


        </section>
        <section class = "main__right" id = "panel">

        </section>
    </main>

    <script src = "{{ asset('js/adminPanel.js') }}">
    </script>
</body>
</html>