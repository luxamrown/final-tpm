document.getElementById("form-contact").addEventListener("click", async (event) => {
    event.prevent.default();

    const response = await fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          "name": "",
          "subject": "",
          "e_mail_address": "",
          "message": ""
        })
    });
    
});

