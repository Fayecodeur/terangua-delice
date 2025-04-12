<?php
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



//  fonction qui permet d'afficher le body

function generateEmailBody($email, $fullName, $date, $time, $numPeople)
{
  $formattedDate = (new DateTime($date))->format('d F Y');

  return '
    <html>
    <head>
      <style>
        body {
          font-family: Arial, sans-serif;
          color: #333;
          margin: 0;
          padding: 20px;
        }
        .container {
          max-width: 600px;
          margin: auto;
          padding: 20px;
          border: 1px solid #ddd;
          border-radius: 5px;
          background-color: #f9f9f9;
        }
        h3 {
          color: #0056b3;
        }
        p {
          margin: 10px 0;
        }
        .footer {
          margin-top: 20px;
          font-size: 12px;
          color: #666;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h3>Nouvelle Réservation</h3>
        <p><strong>Email :</strong> ' . htmlspecialchars($email) . '</p>
        <p><strong>Nom complet :</strong> ' . htmlspecialchars($fullName) . '</p>
        <p><strong>Date de la réservation :</strong> ' . $formattedDate . '</p>
        <p><strong>Heure de la réservation :</strong> ' . htmlspecialchars($time) . '</p>
        <p><strong>Nombre de personnes :</strong> ' . htmlspecialchars($numPeople) . '</p>
        <div class="footer">
          Térangua Délice 
        </div>
      </div>
    </body>
    </html>
    ';
}
