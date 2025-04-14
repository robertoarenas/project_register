document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch("php/register.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
});