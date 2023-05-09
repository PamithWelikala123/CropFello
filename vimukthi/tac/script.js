document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var popup = document.getElementById("popup");
        popup.classList.add("is-open");
    }, 2000);

    var acceptCheckbox = document.getElementById("acceptCheckbox");
    var nextButton = document.getElementById("nextButton");

    acceptCheckbox.addEventListener("change", function() {
        nextButton.disabled = !acceptCheckbox.checked;
    });

    nextButton.addEventListener("click", function() {
        var popup = document.getElementById("popup");
        popup.classList.remove("is-open");
    });
});
