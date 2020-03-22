@extends('layouts.app')

<script>
    window.addEventListener("load", function() {
        getDisplayData();

        setInterval(getDisplayData, 1000);
    });

    function getDisplayData() {
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

                var recentCredits = data["recent_credits"];
                var listStr = "";

                for (var i = 0; i < recentCredits.length; i++)
                {
                    var date = new Date(recentCredits[i]["date_granted"]).toLocaleDateString("de-DE");
                    listStr =  listStr + Math.round(recentCredits[i]["amount"]).toLocaleString("de") + " € : " + date + "<br/>";
                }

                document.getElementById("recent-credits").innerHTML = listStr;
            }
        }

        request.open("GET", "/api/total", true);
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

                <div class="card-body" id="recent-credits">

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
