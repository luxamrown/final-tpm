const loggedInUser = JSON.parse(sessionStorage.getItem("login-user"));

// The user has not login yet
if (!loggedInUser) {
    // Redirect to login page
    window.location.href = "/login";
}
else {
    // The user has login
    // The user doesn't have the admin role
    if (loggedInUser.user.is_admin !== 1) {
        // Redirect to dashboard
        window.location.href = "/dashboard";
    }
    else {
        // The user have the admin role
        document.getElementById("admin").innerHTML = loggedInUser.user.name;

        // Refresh
        document.getElementById("refresh-button").addEventListener("click", () => {
            window.location.reload();
        });

        // Logout
        document.getElementById("logout-button").addEventListener("click", () => {
            sessionStorage.removeItem("login-user");
            window.location.href = "/";
        })

        // The panel section content
        const defaultContent = 
        `
            <img
                src = "img/admin-panel.png"
            />
            <h1 class = "section__title"> View Or Edit Team Data Here! </h1>
        `;

        document.getElementById("panel").innerHTML = defaultContent;

        // Get all the participants data
        const getAllParticipantsData = async () => {
            const response = await fetch("/adminpanel");
            return await response.json();
        }

        // Fetch participants data and set the table data
        const fetchAllParticipantsData = async () => {
            const participants = (await getAllParticipantsData()).data;   
            console.log(participants); 
            const tableData = participants.map((p, idx) => {
                return (   
                    `<tr key = "${idx}">
                        <td> ${idx + 1} </td>
                        <td> ${p.groupData.name} </td>
                        <td> ${p.groupDetails.regist_date.split("-")[0].length === 4 ? p.groupDetails.regist_date.split("-")[2] + "-" + p.groupDetails.regist_date.split("-")[1] + "-" + p.groupDetails.regist_date.split("-")[0] : p.groupDetails.regist_date} </td>
                        <td class = "table__button__container"> 
                            <button class = "table__button table__button_view" id = "view-${p.groupDetails.id}" data-team_name = "${p.groupData.name}">
                                View
                                <img src = "img/icon-view.png"/>
                            </button>

                            <button class = "table__button table__button_edit" id = "edit-${p.groupDetails.id}" data-team_name = "${p.groupData.name}">
                                Edit
                                <img src = "img/icon-edit.png"/>
                            </button>

                            <button class = "table__button table__button_delete" id = "delete-${p.groupDetails.id}">
                                Delete
                                <img src = "img/icon-delete.png"/>
                            </button>
                        </td>
                    </tr>`
                );
            }).join("");

            document.getElementById("table-body").innerHTML = tableData;

            // Attach event listener
            const viewButtons = document.getElementsByClassName("table__button_view");
            for (let button of viewButtons) {
                button.addEventListener("click", () => {
                    viewData(button.id, button.dataset.team_name);
                });
            }
            
            const editButtons = document.getElementsByClassName("table__button_edit");
            for (let button of editButtons) {
                button.addEventListener("click", () => {
                    editData(button.id, button.dataset.team_name);
                });
            }

            const deleteButtons = document.getElementsByClassName("table__button_delete");
            for (let button of deleteButtons) {
                button.addEventListener("click", () => {
                    deleteData(button.id);
                });
            }
        }

        // Get participant data by id
        const getParticipantDataById = async (teamId) => {
            const response = await fetch("/adminpanel", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                   id: teamId 
                }),
            });

            const data = await response.json();
            return data.data;
        }

        // Convert file to base64
        const toBase64 = file => new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = reject;
        });

        // View data
        const viewData = async (buttonId, teamName) => {
            const data = await getParticipantDataById(buttonId.split("-")[1]);

            console.log(data);
        
            const viewContent = 
            `   <section class = "view_data">
                    <header class = "view_data__header">
                        <h1> VIEW DATA </h1>
                        <h2> ${teamName} </h2>
                    </header> 

                    <section class = "view_data__information__container">
                        <h3> Full Name </h3>
                        <h3 class = "view_data__information"> ${data.fullname} </h3>               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Email </h3>
                        <h3 class = "view_data__information"> ${data.email} </h3>               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Whatsapp Number </h3>
                        <h3 class = "view_data__information"> ${data.whatsapp} </h3>               
                    </section>                

                    <section class = "view_data__information__container">
                        <h3> Line ID </h3>
                        <h3 class = "view_data__information"> ${data.line_id} </h3>               
                    </section>
                    
                    <section class = "view_data__information__container">
                        <h3> Github </h3>
                        <h3 class = "view_data__information"> ${data.github} </h3>               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Birth Place </h3>
                        <h3 class = "view_data__information"> ${data.birthplace} </h3>               
                    </section>                
                    
                    <section class = "view_data__information__container">
                        <h3> Birth Date </h3>
                        <h3 class = "view_data__information"> ${data.birthdate} </h3>               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> CV </h3>
                        <h3 class = "view_data__information"> ${data.birthdate} </h3>               
                    </section>
                    
                    <section class = "view_data__information__container">
                        <h3> ID Card </h3>
                        <h3 class = "view_data__information"> ${data.birthdate} </h3>               
                    </section> 
                    
                    <button class = "table__button view_data__button_close" id = "view-close-button">
                        Close
                    </button>            
                </section>
            `;

            document.getElementById("panel").innerHTML = viewContent;
            document.getElementById("view-close-button").addEventListener("click", () => {
                document.getElementById("panel").innerHTML = defaultContent;
            });
        }

        // Edit data
        const editData = async (buttonId, teamName) => {
            const data = await getParticipantDataById(buttonId.split("-")[1]);
        
            const editContent = 
            `   <form class = "view_data">
                    <header class = "view_data__header">
                        <h1> EDIT DATA </h1>
                        <h2> ${teamName} </h2>
                    </header> 

                    <section class = "view_data__information__container">
                        <h3> Full Name </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-full-name"
                            value = "${data.fullname}"
                            required
                        />         
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Email </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-email"
                            value = "${data.email}"
                            type = "email"
                            required
                        />               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Whatsapp Number </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-whatsapp"
                            value = "${data.whatsapp}"
                            required
                        />            
                    </section>                

                    <section class = "view_data__information__container">
                        <h3> Line ID </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-line"
                            value = "${data.line_id}"
                            required
                        />                
                    </section>
                    
                    <section class = "view_data__information__container">
                        <h3> Github </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-github"
                            value = "${data.github}"
                            required
                        />            
                    </section>

                    <section class = "view_data__information__container">
                        <h3> Birth Place </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-birth-place"
                            value = "${data.birthplace}"
                            required
                        />                                       
                    </section>                
                    
                    <section class = "view_data__information__container">
                        <h3> Birth Date </h3>
                        <input
                            class = "view_data__input"
                            id = "edit-birth-date"
                            value = ${data.birthdate.split("-")[0].length === 4 ? data.birthdate : data.birthdate.split("-")[2] + "-" + + data.birthdate.split("-")[1] + "-" + data.birthdate.split("-")[0]}
                            type = "date"
                            required
                        />               
                    </section>

                    <section class = "view_data__information__container">
                        <h3> CV </h3>
                        <h2 class = "view_data__information view_data__input" id = "edit-cv-name" style = "cursor:pointer;"> ${data.cv_file} </h2>
                        <input
                            id = "edit-cv"
                            style = "display:none;"
                            type = "file"
                        />
                    </section>
                    
                    <section class = "view_data__information__container">
                        <h3> ID Card </h3>
                        <h2 class = "view_data__information view_data__input" id = "edit-id-card-name" style = "cursor:pointer;"> ${data.is_binusian ? data.flazz_file : data.idcard_file} </h2>
                        <input
                            id = "edit-id-card"
                            style = "display:none;"
                            type = "file"
                        />
                    </section> 
                    
                    <button class = "table__button view_data__button_close" id = "view-close-button">
                        Save Changes
                    </button>  
                    
                    <p id = "edit-data-error"> Error </p>
                </section>
            `; 
            
            document.getElementById("panel").innerHTML = editContent;

            // Edit CV Handler
            document.getElementById("edit-cv-name").addEventListener("click", () => {
                document.getElementById("edit-cv").click();
            });

            document.getElementById("edit-cv").addEventListener("change", () => {
                if (document.getElementById("edit-cv").files.length > 0) {
                    document.getElementById("edit-cv-name").innerHTML = document.getElementById("edit-cv").files[0].name;
                }
                else {
                    document.getElementById("edit-cv-name").innerHTML = data.cv_file;
                }
            });

            // Edit ID Card Handler
            document.getElementById("edit-id-card-name").addEventListener("click", () => {
                document.getElementById("edit-id-card").click();
            });

            document.getElementById("edit-id-card").addEventListener("change", () => {
                if (document.getElementById("edit-id-card").files.length > 0) {
                    document.getElementById("edit-id-card-name").innerHTML = document.getElementById("edit-id-card").files[0].name;
                }
                else {
                    document.getElementById("edit-id-card-name").innerHTML = data.cv_file;
                }
            });

            // Submit
            document.getElementById("view-close-button").addEventListener("click", async (event) => {
                event.preventDefault();

                const response = await fetch("/adminpanel", {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        id: data.id,
                        fullname: document.getElementById("edit-full-name").value,
                        email: document.getElementById("edit-email").value,
                        whatsapp: document.getElementById("edit-whatsapp").value,
                        line_id: document.getElementById("edit-line").value,
                        github: document.getElementById("edit-github").value,
                        birthplace: document.getElementById("edit-birth-place").value,
                        birthdate: document.getElementById("edit-birth-date").value,
                        cv_file: 
                            document.getElementById("edit-cv").files.length > 0 
                                ? await toBase64(document.getElementById("edit-cv").files[0]) 
                                : data.cv_file,
                        flazz_file: 
                            data.is_binusian === true 
                                ? 
                                    document.getElementById("edit-id-card").files.length > 0
                                        ? await toBase64(document.getElementById("edit-id-card").files[0])
                                        : data.cv_file
                                : 
                                    "",
                        idcard_file: 
                            data.is_binusian === false
                                ?
                                    document.getElementById("edit-id-card").files.length > 0
                                        ? await toBase64(document.getElementById("edit-id-card").files[0])
                                        : data.id
                                : 
                                    "",
                    }),
                });

                // Edit data succesfull
                if (response.status === 200) {
                    document.getElementById("panel").innerHTML = defaultContent; 
                    document.getElementById("edit-data-error").style.display = "none";
                    window.location.reload();   
                }

                // Edit data unsuccesfull
                document.getElementById("edit-data-error").style.display = "block";
            });
        }

        // Delete data
        const deleteData = async (buttonId) => {
            if (confirm("Are you sure want to delete this item from the list?")) {
                const data = await getParticipantDataById(buttonId.split("-")[1]);

                const response = await fetch("/adminpanel", {
                    method: "DELETE",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        id: data.id
                    }),
                });

                if (response.status === 200) {
                    window.location.reload();
                }
                else {
                    alert("Delete failed!");
                }
            }
            else {

            }


        }

        fetchAllParticipantsData();
    }
}