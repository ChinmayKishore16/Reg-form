document.getElementById("submitButton").addEventListener("click", function () {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const gender = document.getElementById("gender").value;
    const address = document.getElementById("address").value;

    if (name && email && phone && gender && address) {
        // Update user details in the display section
        document.getElementById("displayName").textContent = name;
        document.getElementById("displayEmail").textContent = email;
        document.getElementById("displayPhone").textContent = phone;
        document.getElementById("displayGender").textContent = gender;
        document.getElementById("displayAddress").textContent = address;

        // Make the details section visible
        document.getElementById("userDetails").style.display = "block";

        // Reset the form fields
        document.getElementById("registrationForm").reset();
    } else {
        alert("Please fill out all fields before submitting.");
    }
});
