<?php

/*
Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
--
Stack:
Html, CSS, VueJS (importato tramite CDN), axios, PHP
--
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
--
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
--
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
--
Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task
*/

$todos = [
    [
        "name" => 'HTML',
        "status" => 'undone',
    ],
    [
        "name" => 'CSS',
        "status" => 'undone',
    ],
    [
        "name" => 'Javascript',
        "status" => 'undone',
    ],
    [
        "name" => 'Python',
        "status" => 'undone',
    ],
    [
        "name" => 'Java',
        "status" => 'undone',
    ],
    [
        "name" => 'PHP',
        "status" => 'undone',
    ],
];

// stampo a schermo il mio array PHP
// var_dump($languages);

// per stampare a schermo l'array php in JSON devo utilizzare la funzione json_encode
// ma in questo modo stamperà l'array come se fosse una stringa
// echo json_encode($languages);

// per visualizzare l'array come un JSON devo indicare al browser che è un JSON
// lo faccio con l'header che va a modificare l'intestazione della pagina
// abbiamo utilizzato nell'esercizio precedente l'header per cambiare la locazione(location) della pagina
// in questo caso utilizziamo l'header per cambiare il tipo di contenuto
// l'header va posizionato sempre prima di qualsiasi output in pagina
header('Content-Type: application/json');

echo json_encode($todos);