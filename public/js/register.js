const stepOne = document.getElementById("step-1");
const stepTwo = document.getElementById("step-2");
const stepThree = document.getElementById("step-3");
const stepThreeBinusian = document.getElementById("step-3-binusian");
const stepThreeNonBinusian = document.getElementById("step-3-non-binusian");

const progressOne = document.getElementById("progress-1");
const progressTwo = document.getElementById("progress-2");
const progressThree = document.getElementById("progress-3");

const categoryGroup = document.getElementById("category-group");
const categoryLeader = document.getElementById("category-leader");

// STEP ONE
// GROUP NAME
const groupName = document.getElementById("input-group-name");
const groupNameError = document.getElementById("error-group-name");
let isGroupNameValid = false;

groupName.addEventListener("keyup", () => {
    if (groupName.value.trim().length === 0) {
        groupNameError.style.display = "block";
        isGroupNameValid = false;
    }
    else {
        groupNameError.style.display = "none";
        isGroupNameValid = true;
    }
});

// PASSWORD AND CONFIRM PASSWORD
const password = document.getElementById("input-group-password");
const passwordError = document.getElementById("error-password");
let isPasswordValid = false;

const confirmPassword = document.getElementById("input-group-confirm-password");
const confirmPasswordError = document.getElementById("error-confirm-password");
let isConfirmPasswordValid = false;

password.addEventListener("keyup", () => {
    const passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/;

    if (passwordRegex.test(password.value.trim()) === false) {
        passwordError.style.display = "block";
        isPasswordValid = false;
    }
    else {
        passwordError.style.display = "none";
        isPasswordValid = true;  
    }
});

const confirmPasswordHandler = () => {
    if (password.value.trim() !== confirmPassword.value.trim()) {
        confirmPasswordError.style.display = "block";
        isConfirmPasswordValid = false;
    }
    else {
        confirmPasswordError.style.display = "none";
        isConfirmPasswordValid = true;        
    }    
}

confirmPassword.addEventListener("keyup", confirmPasswordHandler);

// IS BINUSIAN
const isBinusianRadioBoxes = document.querySelectorAll('input[name="is-binusian"]');
const errorBinusian = document.getElementById("error-binusian");
let isBinusianValid = false;
let isBinusian;

// STEP ONE: NEXT BUTTON
const stepOneNextButton = document.getElementById("next-to-2");
stepOneNextButton.addEventListener("click", () => {
    confirmPasswordHandler();
    for (const isBinusianRadioBox of isBinusianRadioBoxes) {
        if (isBinusianRadioBox.checked) {
            isBinusian = isBinusianRadioBox.value;
            isBinusianValid = true;
            errorBinusian.style.display = "none";
            break;
        }
    }

    if (!isBinusian) {
        errorBinusian.style.display = "block";
        isBinusianValid = false;
    }

    if (isGroupNameValid && isPasswordValid && isConfirmPasswordValid && isBinusianValid) {
        stepOne.style.display = "none";
        stepTwo.style.display = "block";

        progressOne.classList.remove("progress__bar__active");
        progressOne.innerHTML = "&#10003;";
        progressTwo.classList.add("progress__bar__active");

        categoryGroup.style.backgroundColor = "#FFFFFF";
        categoryGroup.style.color = "black";

        categoryLeader.style.backgroundColor = "#39219D";
        categoryLeader.style.color = "#FFFFFF";
    }
    else {
        if (!isGroupNameValid) {
            groupNameError.style.display = "block";
        }

        if (!isPasswordValid) {
            passwordError.style.display = "block";
        }

        if (!isConfirmPasswordValid) {
            confirmPasswordError.style.display = "block";
        }

        if (!isBinusianValid) {
            errorBinusian.style.display = "block";
        }
    }
});

// STEP TWO
// FULL NAME
const fullName = document.getElementById("input-full-name");
const fullNameError = document.getElementById("error-full-name");
let isFullNameValid = false;

fullName.addEventListener("keyup", () => {
    if (fullName.value.trim().length === 0) {
        fullNameError.style.display = "block";
        isFullNameValid = false;
    }
    else {
        fullNameError.style.display = "none";
        isFullNameValid = true;
    }    
});

// EMAIL
const email = document.getElementById("input-email");
const emailError = document.getElementById("error-email");
let isEmailValid = false;

email.addEventListener("keyup", () => {
    if (email.value.trim().length === 0 || email.value.trim().includes("@") === false) {
        emailError.style.display = "block";
        isEmailValid = false;
    }
    else {
        emailError.style.display = "none";
        isEmailValid = true;
    }    
});

// WHATSAPP NUMBER
const whatsapp = document.getElementById("input-whatsapp");
const whatsappError = document.getElementById("error-whatsapp");
let isWhatsappValid = false;

whatsapp.addEventListener("keyup", () => {
    if (whatsapp.value.trim().length < 9 || whatsapp.value.match(/^\d+/) === false) {
        whatsappError.style.display = "block";
        isWhatsappValid = false;
    }
    else {
        whatsappError.style.display = "none";
        isWhatsappValid = true;
    }    
});

// LINE-ID
const line = document.getElementById("input-line");
const lineError = document.getElementById("error-line");
let isLineValid = false;

line.addEventListener("keyup", () => {
    if (line.value.trim().length === 0) {
        lineError.style.display = "block";
        isLineValid = false;
    }
    else {
        lineError.style.display = "none";
        isLineValid = true;
    }    
});

// GITHUB
const github = document.getElementById("input-github");
const githubError = document.getElementById("error-github");
let isGithubValid = false;

const isUrlValid = (url) => {
    try {
        new URL(url);
        return true;
    }
    catch (error) {
        return false;
    }
}

github.addEventListener("keyup", () => {
    if (github.value.trim().length === 0 || isUrlValid(github.value) === false) {
        githubError.style.display = "block";
        isGithubValid = false;
    }
    else {
        githubError.style.display = "none";
        isGithubValid = true;
    }    
});

// BIRTH PLACE
const birthPlace = document.getElementById("input-birth-place");
const birthPlaceError = document.getElementById("error-birth-place");
let isBirthPlaceValid = false;

birthPlace.addEventListener("keyup", () => {
    if (birthPlace.value.trim().length === 0) {
        birthPlaceError.style.display = "block";
        isBirthPlaceValid = false;
    }
    else {
        birthPlaceError.style.display = "none";
        isBirthPlaceValid = true;
    }    
});

// BIRTH DATE
// FIX ME: ADD AGE
const birthDate = document.getElementById("input-birth-date");
const birthDateError = document.getElementById("error-birth-date");
let isBirthDateValid = false;

const age = (bod) => {
    const birthDate = new Date(bod);
    const currentDate = new Date();

    let ageVal = currentDate.getFullYear() - birthDate.getFullYear();

    if (
      currentDate.getMonth() < birthDate.getMonth() ||
      (currentDate.getMonth() === birthDate.getMonth() &&
        currentDate.getDate() < birthDate.getDate())
    ) {
      ageVal--;
    }    

    return ageVal;
}

birthDate.addEventListener("change", () => {
    if (birthDate.value.trim().length === 0 || age(birthDate.value.trim()) < 17) {
        birthDateError.style.display = "block";
        isBirthDateValid = false;
    }
    else {
        birthDateError.style.display = "none";
        isBirthDateValid = true;
    }    
});

// STEP TWO: NEXT BUTTON
const stepTwoNextButton = document.getElementById("next-to-3");
stepTwoNextButton.addEventListener("click", () => {
    if (
        isFullNameValid && 
        isEmailValid && 
        isWhatsappValid && 
        isLineValid && 
        isGithubValid && 
        isBirthPlaceValid && 
        isBirthDateValid
    ) {
        stepTwo.style.display = "none";
        stepThree.style.display = "block";

        if (isBinusian) {
            stepThreeBinusian.style.display = "block";
            stepThreeNonBinusian.style.display = "none";
        }
        else {
            stepThreeBinusian.style.display = "none";
            stepThreeNonBinusian.style.display = "block";           
        }

        progressTwo.classList.remove("progress__bar__active");
        progressTwo.innerHTML = "&#10003;";
        progressThree.classList.add("progress__bar__active");
    }
    else {
        if (!isFullNameValid) {
            fullNameError.style.display = "block";
        }

        if (!isEmailValid) {
            emailError.style.display = "block";
        }

        if (!isWhatsappValid) {
            whatsappError.style.display = "block";
        }

        if (!isLineValid) {
            lineError.style.display = "block";
        }

        if (!isGithubValid) {
            githubError.style.display = "block";
        }

        if (!birthPlaceError) {
            birthPlaceError.style.display = "block";
        }

        if (!isBirthDateValid) {
            birthDateError.style.display = "block";
        }        
    }
});

// STEP TWO: BACK BUTTON
const stepTwoBackButton = document.getElementById("back-to-1");
stepTwoBackButton.addEventListener("click", () => {
    stepOne.style.display = "block";
    stepTwo.style.display = "none"; 
    
    progressOne.classList.add("progress__bar__active");
    progressOne.innerHTML = "1";
    progressTwo.classList.remove("progress__bar__active");  
    
    categoryGroup.style.backgroundColor = "#39219D";
    categoryGroup.style.color = "#FFFFFF";    

    categoryLeader.style.backgroundColor = "#FFFFFF";
    categoryLeader.style.color = "black";
});

// STEP THREE
// CV
const CV = document.getElementById("input-cv");
const addCVButton = document.getElementById("add-cv-button");
const addCVContainer = document.getElementById("add-cv-container");
const addCVContainerTitle = document.getElementById("add-cv-container-title");
const addCVContainerSubtitle = document.getElementById("add-cv-container-subtitle");
const CVError = document.getElementById("error-cv");
let isCVValid = false;

CV.addEventListener("change", () => {
    if (CV.files.length > 0) {
        addCVContainerTitle.innerText = CV.files[0].name;
        addCVContainerSubtitle.innerText = "";
        CVError.style.display = "none";
        isCVValid = true;
    }
    else {
        addCVContainerTitle.innerText = "Drag & drop files here";
        addCVContainerSubtitle.innerText = "Only PDF, JPG, JPEG, and PNG files";      
        CVError.style.display = "block";
        isCVValid = false;  
    }
});

addCVButton.addEventListener("click", () => {
    CV.click();
});

addCVContainer.addEventListener("click", () => {
    CV.click();
});

// FLAZZ CARD
const flazzCard = document.getElementById("input-flazz-card");
const addFlazzCardButton = document.getElementById("add-flazz-card-button");
const addFlazzCardContainer = document.getElementById("add-flazz-card-container");
const addFlazzCardContainerTitle = document.getElementById("add-flazz-card-container-title");
const addFlazzCardContainerSubtitle = document.getElementById("add-flazz-card-container-subtitle");
const flazzCardError = document.getElementById("error-flazz-card");
let isFlazzCardValid = false;

flazzCard.addEventListener("change", () => {
    if (flazzCard.files.length > 0) {
        addFlazzCardContainerTitle.innerText = flazzCard.files[0].name;
        addFlazzCardContainerSubtitle.innerText = "";
        flazzCardError.style.display = "none";
        isFlazzCardValid = true;
    }
    else {
        addFlazzCardContainerTitle.innerText = "Drag & drop files here";
        addFlazzCardContainerSubtitle.innerText = "Only PDF, JPG, JPEG, and PNG files";      
        flazzCardError.style.display = "block";
        isFlazzCardValid = false;  
    }
});

addFlazzCardButton.addEventListener("click", () => {
    flazzCard.click();
});

addFlazzCardContainer.addEventListener("click", () => {
    flazzCard.click();
});

// ID CARD
const idCard = document.getElementById("input-id-card");
const addIdCardButton = document.getElementById("add-id-card-button");
const addIdCardContainer = document.getElementById("add-id-card-container");
const addIdCardContainerTitle = document.getElementById("add-id-card-container-title");
const addIdCardContainerSubtitle = document.getElementById("add-id-card-container-subtitle");
const idCardError = document.getElementById("error-id-card");
let isIdCardValid = false;

idCard.addEventListener("change", () => {
    if (idCard.files.length > 0) {
        addIdCardContainerTitle.innerText = idCard.files[0].name;
        addIdCardContainerSubtitle.innerText = "";
        idCardError.style.display = "none";
        isIdCardValid = true;
    }
    else {
        addIdCardContainerTitle.innerText = "Drag & drop files here";
        addIdCardContainerSubtitle.innerText = "Only PDF, JPG, JPEG, and PNG files";      
        idCardError.style.display = "block";
        isIdCardValid = false;  
    }
});

addIdCardButton.addEventListener("click", () => {
    idCard.click();
});

addIdCardContainer.addEventListener("click", () => {
    idCard.click();
});

// SUBMIT
// FIXME: FETCH API AND REDIRECT
const submitButton = document.getElementById("button-register");
submitButton.addEventListener("click", () => {
    const registrationData = {
        groupName: groupName.value,
        password: password.value,
        isBinusian,
        email: email.value,
        whatsapp: whatsapp.value,
        line: line.value,
        github: github.value,
        birthplace: birthPlace.value,
        birthDate: birthDate.value,
        CV: CV.files[0],
        flazzCard: flazzCard.files[0],
        idCard: idCard.files[0],
    };

    if ((isCVValid && isFlazzCardValid && isBinusian) || (isCVValid && isIdCardValid && !isBinusian)) {
        console.log("Registration completed with: ", registrationData);
        // Redirect?
        // location.replace("https://www.w3schools.com");
        return;
    }

    if (!isCVValid) {
        CVError.style.display = "block";
    }

    if (isBinusian && !isFlazzCardValid) {
        flazzCardError.style.display = "block";
    }

    if (!isBinusian && !isIdCardValid) {
        idCardError.style.display = "block";
    }
});