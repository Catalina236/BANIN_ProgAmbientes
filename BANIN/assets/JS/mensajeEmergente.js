var profileModal = document.getElementById("profileModal");
var experienceModal = document.getElementById("experienceModal");
var openProfileBtn = document.getElementById("openProfile");
var openExperienceBtn = document.getElementById("openExperience");
var closeButtons = document.getElementsByClassName("close");

openProfileBtn.onclick = function() {
    profileModal.style.display = "block";
}

openExperienceBtn.onclick = function() {
    experienceModal.style.display = "block";
}

for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].onclick = function() {
        this.closest(".modal").style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == profileModal) {
        profileModal.style.display = "none";
    }
    if (event.target == experienceModal) {
        experienceModal.style.display = "none";
    }
}