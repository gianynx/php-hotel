<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => "L'Hotel Belvedere è situato in una posizione strategica: al principio del prestigioso centro di Milano Marittima ed a poca distanza dal mare. Offre ai Suoi Clienti un'ampia scelta di stanze: dalle tipologie Classic dotate di ogni comfort, alle nuove e moderne Deluxe, alle stanze Pool Relax fornite di vasca idromassaggio esterna sul balcone privato, fino alle Wellness Suite, ampie e confortevoli dotate inoltre di vasca idromassaggio all'interno della stanza.",
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10,
            'city' => 'Milano Marittima (RA)'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => "Con centro spa e benessere, più una terrazza, Hotel Futuro si trova nel centro di Malaga, a 1 minuto dalla spiaggia. A breve distanza figurano attrazioni come il Museo Picasso, la Cattedrale di Malaga e il Museo del vetro e del cristallo. Sono disponibili una reception attiva 24 ore su 24 e il servizio in camera.",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
            'city' => 'Malaga (España)'
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => "L'Hotel Rivamare sorge direttamente sulla spiaggia e sul mare di Ischia, in uno degli angoli più suggestivi dell'isola, ideale per una vacanza di relax e di mare. A due passi da C.so Vittoria Colonna, principale arteria per lo shopping ed il ritrovo serale ischitani. Qui troverete numerosi ristoranti tipici, pub e bar.",
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
            'city' => 'Ischia (NA)'
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => "Con una posizione imbattibile sul lungomare di Otranto, l'Hotel Bellavista è perfetto per il vostro soggiorno in questa famosa località balneare. Il Bellavista Hotel dispone di camere confortevoli e climatizzate. Alcune vantano un balcone con vista mare.",
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5,
            'city' => 'Otranto (LE)'
        ],
        [
            'name' => 'Hotel Milano',
            'description' => "Risalente al 1922, questo confortevole hotel a conduzione familiare dista 4 minuti a piedi dalla stazione ferroviaria di Trieste Centrale. Le camere semplici possono ospitare fino a quattro persone e sono dotate di TV satellitare, Wi-Fi, minibar e scrivania. È disponibile il servizio in camera.",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
            'city' => 'Trieste (TS)'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
    <table class="table table-dark table-striped mx-auto mt-5 mb-5">
    <?php foreach ($hotels as $hotel) { ?>
        <thead>
        <tr>
            <th scope="col">Name:</th>
            <th scope="col"><?php echo $hotel['name']?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">City:</th>
            <td><?php echo $hotel['city']?></td>
        </tr>
        <tr>
            <th scope="row">Description:</th>
            <td><?php echo $hotel['description']?></td>
        </tr>
        <tr>
            <th scope="row">Vote:</th>
            <td><?php echo $hotel['vote']?></td>
        </tr>
        <tr>
            <th scope="row">Distance to center:</th>
            <td><?php echo $hotel['distance_to_center']?>km</td>
        </tr>
        </tbody>
    <?php } ?>
    </table>
    </div>


</body>
</html>