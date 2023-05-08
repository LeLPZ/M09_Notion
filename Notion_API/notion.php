<?php
require 'vendor/autoload.php';

$token = 'secret_PntWJF22PosRImuISYxqPcuD4dpoyMsOOa6cs3YGcIU';
$databaseId = '7dc454f2406f4ee2bcc2651bc5df4ddf';


use Notion\Notion;

$client = new Notion($token);
$database = $client->database($databaseId)->query()->get();
echo"<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        padding: 8px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
    }

    img {
        max-width: 100%;
    }
</style>";

echo "<table>";
echo "<tr><th>Name</th><th>Description</th><th>Price</th><th>Image</th></tr>";

for ($i = 1; $i < count($database->pages); $i++) {
    if ($database->pages[$i]->status == "Publicat") {
        echo "<tr>";
        echo "<td>".$database->pages[$i]->name."</td>";
        echo "<td>".$database->pages[$i]->descripción."</td>";
        echo "<td>".$database->pages[$i]->precio."</td>";
        echo "<td><img src=".$database->pages[$i]->link."></td>";
        echo "</tr>";
    }
}




//var_dump($database);
// echo '<pre>',var_dump($database),'</pre>';
// for ($i=1;$i<count($database->pages);$i++) {
//     if ($database->pages[$i]->status == "Publicat") {
//         echo "<table>";
//         echo "<tr><td>Nom: ".$database->pages[$i]->name."</td></tr><br>";
//         echo "<tr><td>Text: ".$database->pages[$i]->descripción."</td></tr><br>";
//         echo "<tr><td>Precio: ".$database->pages[$i]->precio."</td></tr><br>";
//         echo "<tr><td><img src=".$database->pages[$i]->link."></td></tr><br>";
//         echo "</table>";
//         echo "<hr>";
//         echo "--------------------------------------------------------------------<br>";
//     }

// }
