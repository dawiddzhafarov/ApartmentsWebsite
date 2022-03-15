<div class="container" style="margin-top:200px;">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card text-white md-3">
                <div class="card-header">
                    <p>3 pokoje dwuosobowe</p>
                </div>
                <input type="image" id="pic1" src="images/IMG_2972.jpg" alt="Zdjęcie" style="height:400px;">
            </div>
            <div class="card text-white md-3" style="display:none;" id="card1">
                <div class="card-body" style="height:100px;">
                    Prywatna łazienka, 1x łózko podwójne telewizor, czajnik 
                </div>
            </div>
        </div>    
        <div class="col-md-6 col-sm-12">
            <div class="card text-white md-3">
                <div class="card-header">
                    <p>2 pokoje trzyosobowe</p>
                </div>
                <input type="image" id="pic2" src="images/IMG_2931.jpg" alt="Zdjęcie" style="height:400px;">
            </div>
            <div class="card text-white md-3" style="display:none;" id="card2">
                <div class="card-body">
                    Prywatna łazienka, 1x łóżko podwójne, 1x łóżko pojedyncze, telewizor, czajnik
                </div>
            </div>            
        </div>
    </div>
</div>

<script>
    $().ready(function() {
        $('#pic1').click(function() {
        $('#card1').toggle('slow');
        });
        $('#pic2').click(function() {
        $('#card2').toggle('slow');
        });
    });
</script>