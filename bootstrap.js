function showImage(src) {
    var imageElement = document.getElementById('hover-image');
    imageElement.src = src;
    document.getElementById('image-container').style.display = 'block';
}

     // Fonction pour basculer entre le mode sombre et clair
     function toggleDarkMode() {
        const body = document.body;
        body.classList.toggle("dark-mode");
    }

    // Écouteur d'événement pour le clic sur le bouton
    document.getElementById("toggleBtn").addEventListener("click", function() {
        toggleDarkMode();
        const btnText = this.innerText;
        this.innerHTML = btnText.includes("Mode Sombre") ? '☀️ Mode Clair' : '🌙 Mode Sombre';
    });