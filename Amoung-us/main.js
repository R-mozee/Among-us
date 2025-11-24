document.addEventListener("DOMContentLoaded", () => {
    const reportButton = document.getElementById("reportButton404");

    if (reportButton) {
        reportButton.addEventListener("click", () => {
            alert("Emergency meeting called! A crewmate is acting sus!");
        });
    }
});