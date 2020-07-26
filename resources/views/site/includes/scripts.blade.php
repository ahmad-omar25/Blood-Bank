<!--jquery/bootstrap/main file js-->
<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/js/slick.min.js')}}"></script>
<script src="{{asset('site/js/jquery-nao-calendar.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
<script>
    var request = new XMLHttpRequest();

    var url = "https://cors-anywhere.herokuapp.com/" + "http://ipda3-tech.com/blood-bank/api/v1/donation-requests?api_token=W4mx3VMIWetLcvEcyF554CfxjZHwdtQldbdlCl2XAaBTDIpNjKO1f7CHuwKl&page=1";

    request.open('GET', url);

    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            var dataHolder = JSON.parse(this.responseText);
            var div = document.getElementById('donations');
            var temp = "";
            for (var i = 0; i < dataHolder['data'].data.length; i++) {
                temp += '<div class="req-item my-3"><div class="row"><div class="col-md-9 col-sm-12 clearfix"><div class="blood-type m-1 float-right"><h3>' + dataHolder['data'].data[i].blood_type.name + '</h3></div><div class="mx-3 float-right pt-md-2"><p>اسم الحالة : ' + dataHolder['data'].data[i].patient_name + '</p><p>مستشفى : ' + dataHolder['data'].data[i].hospital_name + '</p><p>المدينة : ' + dataHolder['data'].data[i].city.name + '</p></div></div><div class="col-md-3 col-sm-12 text-center p-sm-3 pt-md-5"><a href="Status-detailes.html" class="btn btn-light px-5 py-3">التفاصيل</a></div></div></div>';
            }


            div.innerHTML = temp;
            // console.log(dataHolder);


        }
    };

    request.send();

</script>
