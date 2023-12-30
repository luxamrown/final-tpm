<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Login </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/loginPage.css') }}"/>
    </head>
<body>
    <header class = "header">
        <img
            class = "header__image"
            src = "{{ asset('img/icon_header.png') }}"
        />        

        <h1 class = "header__title"> HACK<span>TECH</span></h1>
    </header>

    <main class = "main">
        <form class = "login__form">
            <section class = "login__form__grid__item">
                <img
                    class = "login__form__image__assets"
                    src = "{{ asset('img/rectangle.png') }}"
                />
            </section>

            <section class = "login__form__grid__item login__form__grid__item__input">
                <h1 class = "login__form__title"> Hey! Ready to Log In? </h1>

                <!-- GROUP NAME -->
                <section class = "login__form__input__container">
                    <h4 class = "login__form__label"> Group Name </h4>

                    <section class = "login__form__input_field__container">
                        <section class = "login__form__input_field__icon__container">
                            <img
                                class = "login__form__input__icon"
                                src = "{{ asset('img/icon_group_name.png') }}"
                            />
                        </section>
                        <section class = "login__form__input_field__input__container">
                            <input
                                class = "login__form__input"
                                id = "input-group-name"
                                type = "text"
                                require
                            />
                        </section>
                    </section>
                </section>

                <!-- PASSWORD -->
                <section class = "login__form__input__container">
                    <h4 class = "login__form__label"> Password </h4>

                    <section class = "login__form__input_field__container">
                        <section class = "login__form__input_field__icon__container">
                            <img
                                class = "login__form__input__icon"
                                src = "{{ asset('img/icon_password.png') }}"
                            />
                        </section>
                        <section class = "login__form__input_field__input__container">
                            <input
                                class = "login__form__input"
                                id = "input-password"
                                type = "password"
                                require
                            />
                        </section>
                    </section>
                </section> 
                
                <section class = "login__form__link__container login__form__link__container__forgot_password">
                    <a class = "login__form__link" href = "/register"> Forgot Password? </a>                    
                </section>

                <button class = "login__form__button" id = "login-button" type = "button">
                    Log In
                </button>

                <p class = "login__form__error" id = "login-error"> Invalid group name and/or password </p>

                <section class = "login__form__link__container">
                    <a class = "login__form__link" href = "/register"> Don't have an account? Register here </a>                    
                </section>

            </section>
        </form>
    </main>

    <script src = "{{ asset('js/login.js') }}">

</script>
</body>