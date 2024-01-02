<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Register </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/registerPage.css') }}"/>



    </head>
<body>
    <h1 class = "registration__title"> REGISTRATION </h1>

    <section class = "progress__bar__container">
        <ul class = "progress__bar__list">
            <li class = "progress__bar progress__bar__active" id = "progress-1"> 1 </li>
            <li class = "progress__bar" id = "progress-2"> 2 </li>
            <li class = "progress__bar" id = "progress-3"> 3 </li>
        </ul>
    </section>

    <form class = "registration__form">
        <!-- CATEGORY -->
        <nav class = "registration__form__category">
            <section class = "registration__form__category__section" id = "category-group">
                Group
            </section>

            <section class = "registration__form__category__section" id = "category-leader">
                Leader
            </section>
        </nav>

        <!-- STEP 1 -->
        <section id = "step-1">
            <!-- GROUP NAME -->
            <section class = "registration__form__input__section">
                <h4 class = "registration__form__label"> Group Name </h4>
                <input
                    class = "registration__form__input"
                    id = "input-group-name"
                    type = "text"
                    required
                />
                <p class = "registration__form__error" id = "error-group-name"> Invalid group name </p>
            </section>

            <!-- PASSWORD -->
            <section class = "registration__form__input__section">
                <h4 class = "registration__form__label"> Password </h4>
                <input
                    class = "registration__form__input"
                    id = "input-group-password"
                    type = "password"
                    required
                />
                <p class = "registration__form__error" id = "error-password"> Password must be at least 8 characters, consisting of numeric, upper case and lower case characters. </p>
            </section>
            
            <!-- CONFIRM PASSWORD -->
            <section class = "registration__form__input__section">
                <h4 class = "registration__form__label"> Confirm Password </h4>
                <input
                    class = "registration__form__input"
                    id = "input-group-confirm-password"
                    type = "password"
                    required
                />
                <p class = "registration__form__error" id = "error-confirm-password"> Passwords do not match. </p>
            </section>
            
            <!-- IS BINUSIAN -->
            <section class = "registration__form__input__section">
                <h4 class = "registration__form__label"> Are you a Binusian? </h4>

                <section class = "registration__form__input__radio__container" id = "input-group-binusian">
                    <input 
                        class = "registration__form__input__radio"
                        id = "binusian-true" 
                        type = "radio" 
                        name = "is-binusian" 
                        value = "true"
                    >

                    <label class = "registration__form__label__radio" for="binusian-true"> Yes </label>

                    <input 
                        class = "registration__form__input__radio"
                        id = "binusian-false"
                        type ="radio"   
                        name = "is-binusian" 
                        value = "false"
                    >
                    <label class = "registration__form__label__radio" for="binusian-false"> No </label>                    
                </section>

                <p class = "registration__form__error" id = "error-binusian"> Please enter the field. </p>
            </section>

            <button class = "registration__form__button" id = "next-to-2" type = "button">
                Next Step
            </button>
        </section>

        <!-- STEP 2 -->
        <section id = "step-2">
            <!-- FULL NAME -->
            <section class = "registration__form__input__section">
                <h4 class = "registration__form__label"> Full Name </h4>
                <input
                    class = "registration__form__input"
                    id = "input-full-name"
                    type = "text"
                    required
                />
                <p class = "registration__form__error" id = "error-full-name"> Please enter your full name. </p>
            </section>

            <section class = "registration__form__grid">
                <section class = "registration__form__grid__item">
                    <!-- EMAIL -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"> Email </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-email"
                            type = "text"
                            required
                        />
                        <p class = "registration__form__error" id = "error-email"> Please enter a valid email address. </p>
                    </section>

                    <!-- WHATSAPP NUMBER -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"> Whatsapp Number </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-whatsapp"
                            type = "text"
                            required
                        />
                        <p class = "registration__form__error" id = "error-whatsapp"> Please enter a valid number, with at least 9 digits. </p>
                    </section> 

                    <!-- LINE ID -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"> Line ID </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-line"
                            type = "text"
                            required
                        />
                        <p class = "registration__form__error" id = "error-line"> Please enter a valid ID. </p>
                    </section>                    
                </section>

                <section class = "registration__form__grid__item">
                    <!-- GITHUB -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"> Github </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-github"
                            type = "url"
                            required
                        />
                        <p class = "registration__form__error" id = "error-github"> Please enter a valid github account. </p>
                    </section>

                    <!-- BIRTH PLACE -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"> Birth Place </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-birth-place"
                            type = "text"
                            required
                        />
                        <p class = "registration__form__error" id = "error-birth-place"> Please enter your birth place. </p>
                    </section> 

                    <!-- BIRTH DATE -->
                    <section class = "registration__form__input__section">
                        <h4 class = "registration__form__label"></h4> Birth Date </h4>
                        <input
                            class = "registration__form__input"
                            id = "input-birth-date"
                            type = "date"
                            required
                        />
                        <p class = "registration__form__error" id = "error-birth-date"> You must be at least 17 years old. </p>
                    </section>          
                </section>                
            </section>

            <section class = "registration__form__grid">
                <section class = "registration__form__grid__item">
                    <button class = "registration__form__button" id = "back-to-1" type = "button">
                        Back
                    </button>   
                </section>

                <section class = "registration__form__grid__item">
                    <button class = "registration__form__button" id = "next-to-3" type = "button">
                        Next Step
                    </button> 
                </section>
            </section>
        </section>

        <section id = "step-3">
            <!-- CV -->
            <section class = "registration__form__input__section">
                <section class = "registration__form__input__file__header">
                    <section class = "registration__form__input__file__header__inner">
                        <h4 class = "registration__form__label"> Upload CV </h4>    
                    </section>
                    
                    <input
                        class = "registration__form__input__file"
                        id = "input-cv"
                        type = "file"
                        accept = ".pdf, .jpg, .jpeg, .png"
                    />
                    
                    <section class = "registration__form__input__file__header__inner">
                        <button 
                            class = "registration__form__add__file" 
                            id = "add-cv-button" 
                            type = "button"
                        >
                            +
                        </button>                         
                    </section>
            
                </section>

                <section class = "registration__form__drag_and_drop" id = "add-cv-container">
                    <h4 class = "registration__form__drag_and_drop__title" id = "add-cv-container-title"> 
                        Drag & drop files here 
                    </h4>                        

                    <h5 class = "registration__form__drag_and_drop__subtitle" id = "add-cv-container-subtitle"> 
                        Only PDF, JPG, JPEG, and PNG files 
                    </h5>                        
                </section>
                
                <p class = "registration__form__error" id = "error-cv"> Please add your CV in supported format. </p>
            </section>

            <section id = "step-3-binusian">
                <!-- FLAZZ CARD -->
                <section class = "registration__form__input__section">
                    <section class = "registration__form__input__file__header">
                        <section class = "registration__form__input__file__header__inner">
                            <h4 class = "registration__form__label"> Upload Flazz Card </h4>    
                        </section>
                        
                        <input
                            class = "registration__form__input__file"
                            id = "input-flazz-card"
                            type = "file"
                            accept = ".pdf, .jpg, .jpeg, .png"
                        />
                        
                        <section class = "registration__form__input__file__header__inner">
                            <button class = "registration__form__add__file" id = "add-flazz-card-button" type = "button">
                                +
                            </button>                         
                        </section>
                
                    </section>

                    <section class = "registration__form__drag_and_drop" id = "add-flazz-card-container">
                        <h4 class = "registration__form__drag_and_drop__title" id = "add-flazz-card-container-title"> 
                            Drag & drop files here 
                        </h4>                        

                        <h5 class = "registration__form__drag_and_drop__subtitle" id = "add-flazz-card-container-subtitle"> 
                            Only PDF, JPG, JPEG, and PNG files 
                        </h5>                        
                    </section>

                    <p class = "registration__form__error" id = "error-flazz-card"> Please add your flazz card in supported format. </p>
                </section>        
            </section>
            
            <section id = "step-3-non-binusian">
                <!-- ID CARD -->
                <section class = "registration__form__input__section">
                    <section class = "registration__form__input__file__header">
                        <section class = "registration__form__input__file__header__inner">
                            <h4 class = "registration__form__label"> Upload ID Card </h4>    
                        </section>
                        

                        <input
                            class = "registration__form__input__file"
                            id = "input-id-card"
                            type = "file"
                            accept = ".pdf, .jpg, .jpeg, .png"
                        />
                        
                        <section class = "registration__form__input__file__header__inner">
                            <button class = "registration__form__add__file" id = "add-id-card-button" type = "button">
                                +
                            </button>                         
                        </section>
                
                    </section>

                    <section class = "registration__form__drag_and_drop" id = "add-id-card-container">
                        <h4 class = "registration__form__drag_and_drop__title" id = "add-id-card-container-title"> 
                            Drag & drop files here 
                        </h4>                        

                        <h5 class = "registration__form__drag_and_drop__subtitle" id = "add-id-card-container-subtitle"> 
                            Only PDF, JPG, JPEG, and PNG files 
                        </h5>                        
                    </section>

                    <p class = "registration__form__error" id = "error-id-card"> Please add your ID Card in supported format. </p>
                </section>        
            </section>
            
            <button class = "registration__form__button" id = "button-register" type = "button">
                Register
            </button>               
            
        </section>
    </form>

    <script src = "{{ asset('js/register.js') }}">

    </script>
</body>
</html>