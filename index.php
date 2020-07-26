<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari nilai rata-rata | Kitahu Komputer</title>
</head>

<body>
    <form method="get">
        <table>
            <tr>
                <td>Bil. 1</td>
                <td> : </td>
                <td><input type="number" name="bil1"></td>
            </tr>
            <tr>
                <td>Bil. 2</td>
                <td> : </td>
                <td><input type="number" name="bil2"></td>
            </tr>
            <tr>
                <td>Bil. 3</td>
                <td> : </td>
                <td><input type="number" name="bil3"></td>
            </tr>
            <tr>
                <td>Bil. 4</td>
                <td> : </td>
                <td><input type="number" name="bil4"></td>
            </tr>
            <tr>
                <td>Bil. 5</td>
                <td> : </td>
                <td><input type="number" name="bil5"></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="kirim"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
$bil1 = 2;
$bil2 = 2;
$bil3 = 2;
$bil4 = 2;
$bil5 = 2;

if (isset($_GET["kirim"])) {
    $bil1 = $_GET["bil1"];
    $bil2 = $_GET["bil2"];
    $bil3 = $_GET["bil3"];
    $bil4 = $_GET["bil4"];
    $bil5 = $_GET["bil5"];

    echo "Bilangan Maksimal= " . maksimal($bil1, $bil2, $bil3, $bil4, $bil5);
}

function maksimal($bil1, $bil2, $bil3, $bil4, $bil5)
{
    return max($bil1, $bil2, $bil3, $bil4, $bil5);
}
?>