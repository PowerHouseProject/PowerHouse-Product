<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <!-- <span class="close" id="yy">&times;</span> -->

    <div class="calculate">

        <div class="gender">
            <div class="male">Male</div>
            <div class="female">Female</div>
        </div>
        <div class="height">
            <p class="title">CALCULATE YOUR BMI</p>
            <p class="Htag">HEIGHT</p>
            <p class="val">
                <i class="sub">-</i>
                <span>50</span>cm
                <i class="add">+</i>
            </p>

            <input type="range" min="50" max="220" value="50">
        </div>
        <div class="weight">
            <p class="Htag">WEIGHT</p>
            <p class="val">
                <i class="sub">-</i>
                <span>10</span>kg
                <i class="add">+</i>
            </p>

            <input type="range" min="10" max="180" value="10">
        </div>

        <div class="calc">CALCULATE</div>
    </div>

    <div class="result">
        <div class="bmi">
            <div class="title">YOUR BMI</div>
            <div class="val" ><span id="bmi_val">0.00</span></div>
        </div>

        <div class="text">Your BMI status!</div>
        <div class="recal" ><a onclick="getval()">INSERT INTO ANALASIS</a></div>
    </div>
</div>

</div><br><br>

