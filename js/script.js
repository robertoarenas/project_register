document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch("php/register.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if(data === "success") alert("Registered successfully!");
        else alert( data);
    });
});