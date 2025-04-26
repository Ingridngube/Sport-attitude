<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Paiement</title>
    <link rel="stylesheet" href="styles_page.css">
</head>
<body>
    <div class="container">
        <h1>Paiement</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="mode-paiement">Choisissez un mode de paiement :</label>
                <select id="mode-paiement" name="mode-paiement" required>
                    <option value="" disabled selected>Sélectionnez un mode de paiement</option>
                    <option value="carte">Carte de crédit</option>
                    <option value="mobile">Orange Money</option>
                    <option value="mobile">MTN Money</option>
                </select>
            </div>

            <div id="paiement-carte" class="paiement-option" style="display: none;">
                <div class="form-group">
                    <label for="nom">Nom sur la carte</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="numero">Numéro de carte</label>
                    <input type="text" id="numero" name="numero" required>
                </div>
                <div class="form-group">
                    <label for="date-expiration">Date d'expiration</label>
                    <input type="month" id="date-expiration" name="date-expiration" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
            </div>

            <div id="paiement-mobile" class="paiement-option" style="display: none;">
                <div class="form-group">
                    <label for="numero-mobile">Nom et prénom</label>
                    <input type="name" id="numero-mobile" name="Nom et prénom" required>
                </div>
                <div class="form-group">
                    <label for="numero-mobile">Numéro de téléphone</label>
                    <input type="tel" id="numero-mobile" name="numero-mobile" required>
                </div>
            </div>

            <button type="submit">Payer</button>
        </form>
    </div>

    <script>
        const modePaiementSelect = document.getElementById('mode-paiement');
        const paiementCarte = document.getElementById('paiement-carte');
        const paiementMobile = document.getElementById('paiement-mobile');

        modePaiementSelect.addEventListener('change', function() {
            if (this.value === 'carte') {
                paiementCarte.style.display = 'block';
                paiementMobile.style.display = 'none';
            } else if (this.value === 'mobile') {
                paiementCarte.style.display = 'none';
                paiementMobile.style.display = 'block';
            }
        });
    </script>
</body>
</html>