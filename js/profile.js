document.addEventListener("DOMContentLoaded", function () {
    const sectionLinks = document.querySelectorAll('.borderpage-link');
    sectionLinks.forEach(link => {
        link.addEventListener('click', function (e) {
        e.preventDefault();
        const sectionName = this.getAttribute('data-section');
        fetchSection(sectionName);
        // Remove the 'active' class from all links
        sectionLinks.forEach(link => {
            link.classList.remove('active');
        });
        // Add the 'active' class to the clicked link
        this.classList.add('active');
        });
    });
});

function fetchSection(sectionName) {
    const sections = document.querySelectorAll('.account');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    const selectedSection = document.getElementById(sectionName + '-section');
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}

function cancelForm() {
    const inputs = document.querySelectorAll('.account input, .account textarea');
    inputs.forEach(input => {
        input.value = '';
    });
}

function saveForm() {
    alert("Your information has been saved!");
}