document.addEventListener("DOMContentLoaded", function () {
   
    const toggleBtn = document.getElementById("toggleBtn");
    const body = document.body;

  
    toggleBtn.addEventListener("click", () => {
        // Toggle the 'night-mode' class on the body element
        body.classList.toggle("night-mode");
        const isNightMode = body.classList.contains("night-mode");
        toggleBtn.textContent = isNightMode ? "Light Mode" : "Dark Mode";
    });
});
