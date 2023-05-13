<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<script>
    function show(info) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = xhr.responseText;
            }
        };
        xhr.open("POST", "open.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("info="+info);

    }
</script>

<style>
    .up{
        display: flex;
    }
</style>

<body>
    <div class="up">
        <button type="button" onclick="show('flights')">Real-Time Flights</button>
        <button type="button" onclick="show('airports')">Airports</button>
        <button type="button" onclick="show('airlines')">Airlines</button>
        <button type="button" onclick="show('airplanes')">Airplanes</button>
    </div>
    <div id="info"></div>
</body>

</html>