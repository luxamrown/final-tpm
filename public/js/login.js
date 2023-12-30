// DUMMY PURPOSE ONLY
const DUMMY_USERS = [
    {
        groupName: "bejo@gmail.com",
        password: "pass123",
    },
    {
        groupName: "retno@gmail.com",
        password: "pass123",
    },
];

const groupName = document.getElementById("input-group-name");
const password = document.getElementById("input-password");

const loginButton = document.getElementById("login-button");

const loginError = document.getElementById("login-error");

let loginUser;
loginButton.addEventListener("click", () => {
    loginUser = DUMMY_USERS.find((u) => {
        return (
            u.groupName === groupName.value.trim() && u.password === password.value.trim()
        );
    });

    console.log(loginUser);

    if (loginUser) {
        console.log("Successfully login with " + loginUser.groupName);
        loginError.style.display = "none";
        return;
    }
    else {
        console.log("Failed login");
        loginError.style.display = "block";
    }
});
