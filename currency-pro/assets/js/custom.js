jQuery(document).ready(function($){

    // get data form api

    var settings = {
        "url": "https://v6.exchangerate-api.com/v6/e51f21f6e341326760f6cfa6/latest/USD",
        "method": "GET",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        console.log(response);
        var alldata = response;

        console.log(alldata['time_last_update_utc']);
        console.log(alldata['conversion_rates']['AED']);

        var output ='';
        var timeoutput = "Last Update Time:"+alldata['time_last_update_utc'];
        $("#updatetime").html(timeoutput);
        for(var key in alldata['conversion_rates']){
            console.log("key "+key+"has value"+alldata['conversion_rates'][key]);
            console.log(key);
           
            output +="<tr><td>"+key+"</td><td>"+alldata['conversion_rates'][key]+"</td><tr>"

            $("#tabledata").html(output);
        }

        $("#calculateform").submit(function(e){
            e.preventDefault();
            var currencycode1 = $("#currency").val();
            var currencycode2 = $("#currency2").val();
            var currencyamount1 = $("#currencyamount").val();
           
            var convartion = alldata['conversion_rates'][currencycode1];
           
            var result = currencyamount1 / convartion;
            var finalres = result * alldata['conversion_rates'][currencycode2];
            var totalamount= finalres.toFixed(2);

            $("#result").html(currencycode1+" "+currencyamount1+"="+currencycode2+" "+totalamount);

        });
        

      });





});