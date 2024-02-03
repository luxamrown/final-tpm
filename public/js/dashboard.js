// Check whether the user have already login or not
const loggedInUser = JSON.parse(sessionStorage.getItem("login-user"));
// The user have not login
if (!loggedInUser) {
    // Redirect
    window.location.href = "/";
}
else {
    // The user have login
    // The user have admin role
    if (loggedInUser.user.is_admin) {
        // Redirect to admin page
        window.location.href = "/admin";
    }
    else {
        // The user doens't have admin role 

        // NAVIGATION
        const navigationDashboard = document.getElementById("navigation-dashboard");
        const navigationTimeline = document.getElementById("navigation-timeline");

        const dashboard = document.getElementById("dashboard");
        const timeline = document.getElementById("timeline");

        const dashboardIcon = document.getElementById("dashboard-icon");
        const timelineIcon = document.getElementById("timeline-icon");

        navigationDashboard.addEventListener("click", () => {
            navigationTimeline.classList.remove("dashboard__navigation__link__active");
            navigationDashboard.classList.add("dashboard__navigation__link__active");

            dashboard.style.display = "block";
            dashboardIcon.src = "img/icon-dashboard.png";

            timeline.style.display = "none";
            timelineIcon.src = "img/icon-timeline.png";
            
        });

        navigationTimeline.addEventListener("click", () => {
            navigationTimeline.classList.add("dashboard__navigation__link__active");
            navigationDashboard.classList.remove("dashboard__navigation__link__active");

            dashboard.style.display = "none";
            dashboardIcon.src = "img/icon-dashboard-2.png";

            timeline.style.display = "block";
            timelineIcon.src = "img/icon-timeline-2.png";
        });

        // LOGOUT
        const logout = document.getElementById("logout");
        logout.addEventListener("click", () => {
            sessionStorage.removeItem("login-user");
            window.location.href = "/";
        });

        const USER = {
            groupName: loggedInUser.user.name,
            fullName: loggedInUser.user.group.fullname,
            whatsapp: loggedInUser.user.group.whatsapp,
            email: loggedInUser.user.group.email,
            line: loggedInUser.user.group.line_id,
            github: loggedInUser.user.group.github,
            birthPlace: loggedInUser.user.group.birthplace,
            birthDate: loggedInUser.user.group.birthdate,
            CV: loggedInUser.user.group.cv_file,
            idCard: loggedInUser.user.is_binusian ? loggedInUser.user.group.flazz_file : loggedInUser.user.group.idcard_file,
        };

        // DASHBOARD
        const groupName = document.getElementsByClassName("group-name");    
        for (let g of groupName) {
            g.innerHTML = USER.groupName;
        }

        const fullName = document.getElementById("leader-full-name");
        const whatsapp = document.getElementById("leader-whatsapp-number");
        const email = document.getElementById("leader-email");
        const lineId = document.getElementById("leader-line");
        const github = document.getElementById("leader-github");
        const birth = document.getElementById("leader-birth");

        fullName.innerHTML = USER.fullName;
        whatsapp.innerHTML = USER.whatsapp;
        email.innerHTML = USER.email;
        lineId.innerHTML = USER.line;
        github.innerHTML = USER.github;
        birth.innerHTML = `${USER.birthPlace}, ${USER.birthDate}`;
        
        document.getElementById("leader-cv").addEventListener("click", () => {
            window.open(`/storage/file/${USER.CV}`);
        });

        document.getElementById("leader-id-card").addEventListener("click", () => {
            window.open(`/storage/file/${USER.idCard}`);
        });
    }
}

