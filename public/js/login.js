const groupName = document.getElementById("input-group-name");
const password = document.getElementById("input-password");

const loginError = document.getElementById("login-error");

const loginButton = document.getElementById("login-button");
loginButton.addEventListener("click", async () => {
    const response = await fetch("/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            name: groupName.value,
            password: password.value
        }),
    });

    const data = await response.json();

    // Login success
    if (response.status === 200) {
        loginError.style.display = "none";
        sessionStorage.setItem("login-user", JSON.stringify(data));

        // The user have an admin role
        if (data.user.is_admin === 1) {
            // Rediret to admin panel
            window.location.href = "/admin";
        }
        else {
            // The user doesn't have admin role
            // Redirect to dashboard
            window.location.href = "/dashboard";
        }
        return;
    }

    // Login failed
    loginError.style.display = "block";
    return;
});
