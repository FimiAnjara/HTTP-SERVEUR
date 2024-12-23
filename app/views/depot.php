<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depot</title>
    <link rel="stylesheet" href="http://localhost:8000/inc/css/styles.css">
</head>

<body>

    <?php include($header . ".php"); ?>

    <main class="depot">
        <div class="images">
            <img src="http://localhost:8000/assets/images/noelgift.png" alt="">
        </div>
        <div class="formdepot">
            <form  id="depotForm">
                <span class="little-title">Merry Christmas</span>
                <h2>Depot</h2>
                <input type="number" name="montant" placeholder="Montant" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit" class="explore-button">Valider</button>
                <div id="responseMessage"></div>
            </form>
        </div>
    </main>

    <script>
            document.getElementById('depotForm').addEventListener('submit', function(e) {
            e.preventDefault(); 

            let formData = new FormData(this);
           
            fetch('/depot/insertion', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var responseDiv = document.getElementById('responseMessage'); 
                console.log(data.insert);
                if (data.insert) {
                    responseDiv.textContent = data.message;
                    responseDiv.style.color = "green";
                } else {
                    responseDiv.textContent = "Erreur : " + data.message;
                    responseDiv.style.color = "red";
                }
            })
            .catch(error => {
                console.error('Erreur AJAX:', error);
            });
        });
    </script>
</body>

</html>
