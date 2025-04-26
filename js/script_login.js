
// Fonction pour afficher le pop-up
function showPopup() {
    document.getElementById('popup-coupon').style.display = 'flex';
}

// Fonction pour fermer le pop-up
function closePopup() {
    document.getElementById('popup-coupon').style.display = 'none';
}

// Déclenche le pop-up après l'inscription réussie
// Par exemple ici on vérifie via un paramètre URL ?success=1
window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
        showPopup();
    }
}

