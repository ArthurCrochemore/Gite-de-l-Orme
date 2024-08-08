function submitForm(event) {
  event.preventDefault(); // Prevent the default form submission

  // Collect form data
  const formData = new FormData(event.target);
  const fmail = formData.get("fmail");
  const fobjet = formData.get("fobjet");
  const subject = formData.get("subject");

  // Create an object with the data to send to Google Apps Script
  const data = {
    fmail: fmail,
    fobjet: fobjet,
    subject: subject,
  };

  // Send the form data to Google Apps Script
  fetch(
    "https://script.google.com/macros/s/AKfycby3t5kWdS52pzJ_PEU2S5frGsc8trt5IkynXzAcgBo3bUQDtP6ZKSrlPNwQmRYl4C_9/exec",
    {
      method: "POST",
      body: JSON.stringify(data),
      headers: {
        "Content-Type": "application/json",
      },
    },
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      alert("Email sent successfully!");
      // Optionally, reset the form after successful submission
      document.getElementById("contactForm").reset();
    })
    .catch((error) => {
      console.error("There was an error sending the email:", error);
      alert("Failed to send email. Please try again later.");
    });
}
