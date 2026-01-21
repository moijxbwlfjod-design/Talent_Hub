const registerBtn = document.getElementById("register_btn");

function collectCondidateData() {
  registerBtn.addEventListener("click", (e) => {
    const fullName = document.getElementById("full_name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phoneNumber = document.getElementById("phone_number").value.trim();
    const image = document.getElementById("image").value.trim();
    const resume = document.getElementById("resume").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document
      .getElementById("confirm_password")
      .value.trim();
    e.preventDefault();
    const condidateData = {
      fullName: fullName,
      email: email,
      phoneNumber: phoneNumber,
      image: image,
      resume: resume,
      password: password,
      confirmPassword: confirmPassword,
    };

    console.log("data :", condidateData);
    condidateRegister(condidateData);
  });
}

collectCondidateData();

async function condidateRegister(condidateData) {
  try {
    const res = await fetch("Back-end/services/registerService", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(condidateData),
    });

    const response = await res.json();
    console.log(response);
  } catch (err) {console.error(err)}
}
