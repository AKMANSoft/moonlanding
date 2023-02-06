
window.addEventListener("load", () => {

    const joinNewsLetterEmailInput = document.getElementById("join_newsletter_email_input");
    const joinNewsLetterSubmitBtn = document.getElementById("join_newsletter_submit_btn");
    addContactToGohighUrl = "https://rest.gohighlevel.com/v1/contacts/"





    joinNewsLetterSubmitBtn.addEventListener("click", () => {
        const userEmail = joinNewsLetterEmailInput.value;
        console.log(userEmail)

        const payload = {
            "email": userEmail,
            "tags": [],
        }

        const headers = {
            "Content-Type": "application/json",
            "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJsb2NhdGlvbl9pZCI6Ikw1Z0FxT2RPckE5VWhkWkdHaG9kIiwiY29tcGFueV9pZCI6IlVmZGZaeHhoNVhsOXozdWdzeXVPIiwidmVyc2lvbiI6MSwiaWF0IjoxNjc1MzM5OTQyMzIxLCJzdWIiOiJZc1ByMDRaZmMyREdIYmlKMW0wRSJ9.fgr4Klr4v9YRL3WoqqsAfXriVwSoGvP4-n8M9fbOdN0",
        }

        const requestOptions = {
            method: 'POST',
            headers: headers,
            body: payload,
            redirect: 'follow'
        }


        fetch("https://rest.gohighlevel.com/v1/contacts/", requestOptions)
            .then(response => response.json())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
    })
})

