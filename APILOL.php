<!doctype html>
<html>

<head>
    <title>Primeros pasos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script>
        var request = new XMLHttpRequest();
        request.open("GET", $(location).attr("href"), true);
        $.ajaxSetup({
            headers: {
                "Origin": "https://developer.riotgames.com",
                "Accept-Charset": "application/x-www-form-urlencoded; charset=UTF-8",
                "X-Riot-Token": "RGAPI-80cb08c1-0696-46ba-a747-8b8d1b801548",
                "Accept-Language": "es-ES,es;q=0.9,en;q=0.8,la;q=0.7",
                "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36"
            }
        });

    </script>
</head>

<body>
    <script type="text/javascript">
        function busqueda() {
            var name = $('#name').val;



            $.getJSON('https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations', function(json) {
                alert("Success");
            });
        };

    </script>
    <input id="name">
    <button onclick="busqueda()">BUSCAR</button>
    <div id="result">
        <?php
            $r = new HttpRequest('https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=RGAPI-80cb08c1-0696-46ba-a747-8b8d1b801548', HttpRequest::METH_GET);
            $r->setOptions(array('lastmodified' => filemtime('local.rss')));
            $r->addQueryData(array('category' => 3));
            try {
                $r->send();
                if ($r->getResponseCode() == 200) {
                    file_put_contents('local.rss', $r->getResponseBody());
                }else{
                    echo "error";
                }
            } catch (HttpException $ex) {
                echo $ex;
            }
        ?>
    </div>
</body>

</html>
