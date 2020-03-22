@extends('layouts.app')

<script>
    window.addEventListener("load", function() {
        getLoss();
        getRecentCredit();
        getRecentRevLast();
        getRecentRevReal();
        getRecentRevExp();

        setInterval(getLoss, 1000);
        setInterval(getRecentCredit, 10000);
        setInterval(getRecentRevLast, 10000);
        setInterval(getRecentRevReal, 10000);
        setInterval(getRecentRevExp, 10000);
    });

    function getLoss() {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(request.response);
                var totalLoss = Math.round(data["revenue_loss_total"]).toLocaleString("de");
                var totalCredit = Math.round(data["credit_sum"]).toLocaleString("de");
                var totalLeft = Math.round(data["revenue_loss_left"]).toLocaleString("de");

                document.getElementById("total-loss").innerHTML = totalLoss + " €";
                document.getElementById("total-credit").innerHTML = totalCredit + " €";
                document.getElementById("total-left").innerHTML = totalLeft + " €";
            }
        }

        request.open("GET", "/api/total", true);
        request.send();
    }

    function getRecentCredit() {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(request.response);
                var listStr = "";

                for (var i = 0; i < data.length; i++)
                {
                    var date = new Date(data[i]["date_granted"]).toLocaleDateString("de-DE");
                    listStr =  listStr + Math.round(data[i]["amount"]).toLocaleString("de") + " € : " + date + "<br/>";
                }

                document.getElementById("recent-credit").innerHTML = listStr;
            }
        }

        request.open("GET", "/api/recent/credit", true);
        request.send();
    }

    function getRecentRevLast() {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(request.response);
                var listStr = "";

                for (var i = 0; i < data.length; i++)
                {
                    listStr =  listStr + Math.round(data[i]["amount"]).toLocaleString("de") + " €<br/>";
                }

                document.getElementById("recent-rev-last").innerHTML = listStr;
            }
        }

        request.open("GET", "/api/recent/rev/last", true);
        request.send();
    }

    function getRecentRevReal() {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(request.response);
                var listStr = "";

                for (var i = 0; i < data.length; i++)
                {
                    listStr =  listStr + Math.round(data[i]["amount"]).toLocaleString("de") + " €<br/>";
                }

                document.getElementById("recent-rev-real").innerHTML = listStr;
            }
        }

        request.open("GET", "/api/recent/rev/real", true);
        request.send();
    }

    function getRecentRevExp() {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(request.response);
                var listStr = "";

                for (var i = 0; i < data.length; i++)
                {
                    listStr =  listStr + Math.round(data[i]["amount"]).toLocaleString("de") + " €<br/>";
                }

                document.getElementById("recent-rev-exp").innerHTML = listStr;
            }
        }

        request.open("GET", "/api/recent/rev/exp", true);
        request.send();
    }
</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Startseite</div>

                <div class="card-body">
                    Entstandener Schaden: <span id="total-loss"></span></br>
                    Verhinderter Schaden: <span id="total-credit"></span></br>
                    Verbliebener Schaden: <span id="total-left"></span></br>
                    Hier werden aktuelle Werte angezeigt...
                </div>
            </div><br/>
            <div class="card">
                <div class="card-header">Letzte 10 vergebene Kredite</div>

                <div class="card-body" id="recent-credit">

                </div>
            </div><br/>
            <div class="card">
                <div class="card-header">Letzte 10 eingetragene Jahresumsätze 2019</div>

                <div class="card-body" id="recent-rev-last">

                </div>
            </div><br/>
            <div class="card">
                <div class="card-header">Letzte 10 eingetragene Jahresumsätze 2020</div>

                <div class="card-body" id="recent-rev-real">

                </div>
            </div><br/>
            <div class="card">
                <div class="card-header">Letzte 10 eingetragene erwartete Umsätze 2020</div>

                <div class="card-body" id="recent-rev-exp">

                </div>
            </div><br/>
        </div>
    </div>
</div>
@endsection
