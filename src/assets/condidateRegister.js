const registerBtn = document.getElementById("register_btn");

function collectCondidateData() {
  registerBtn.addEventListener("click", (e) => {
    const fullName = document.getElementById("full_name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phoneNumber = document.getElementById("phone_number").value.trim();
    const image = document.getElementById("image").files[0];
    const resume = document.getElementById("resume").files[0];
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document
      .getElementById("confirm_password")
      .value.trim();
    e.preventDefault();

    const condidateData = new FormData();

    condidateData.append("full_name", fullName);
    condidateData.append("email", email);
    condidateData.append("phone_number", phoneNumber);
    condidateData.append("image", image);
    condidateData.append("resume", resume);
    condidateData.append("password", password);
    condidateData.append("confirm_password", confirmPassword);

    console.log("data :", condidateData);
    condidateRegister(condidateData);
  });
}

collectCondidateData();

async function condidateRegister(condidateData) {
  try {
    const res = await fetch("TanlentHub/src/controllers/CondidateController.php", {
      method: "POST",
      body: JSON.stringify(condidateData),
    });

    const response = await res.json();
    console.log(response);
   
  } catch (err) {
    console.error(err);
  }
}


