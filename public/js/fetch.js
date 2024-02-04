const namaUser = document.getElementById('inputName');
const subject = document.getElementById('inputSubject');
const email = document.getElementById('inputEmail');
const message = document.getElementById('inputMessage');

const nameUser = document.getElementById('userName');
const emailUser = document.getElementById('userEmail');
const subjectUser = document.getElementById('userSubject');
const questionUser = document.getElementById('userQuestion');

document.getElementById("form-contact").addEventListener("submit", async (event) => {
    event.preventDefault();
    console.log("test");
    const response = await fetch('/send-mail',{
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          name: namaUser.value,
          subject: subject.value,
          e_mail_address: email.value,
          message: message.value
        })
    });

    alert(`Halo ${namaUser.value} Email sudah terkirim! Terima kasih`)
});

document.getElementById("form-question").addEventListener("submit", async (event) => {
    event.preventDefault();
    console.log("test");
    const response = await fetch('/send-mail',{
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          name: nameUser.value,
          e_mail_address: emailUser.value,
          subject: subjectUser.value,
          message: questionUser.value
        })
    });

    alert(`Halo ${nameUser.value} Email sudah terkirim! Terima kasih`)
});

