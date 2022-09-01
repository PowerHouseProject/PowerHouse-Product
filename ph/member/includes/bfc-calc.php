<div id="myModal4" class="modal4">

    <!-- Modal content -->
    <div class="modal-content4">
        <span class="close4">&times;</span>

        <div class="calculate4">

            <div class="gender4">
                <div class="male4">Male</div>
                <div class="female4">Female</div>
            </div>

            <div class="gen_input4">
                <p class="title4">BODY FAT CALCULATOR</p>
                <p>GENDER</p>
                <div class="gen_label4">
                    <input type="radio" id="male4" name="fav_language" value="MALE">
                      <label for="male4">MALE</label>
                      <input type="radio" id="female4" name="fav_language" value="FEMALE">
                      <label for="female4">FEMALE</label>
                </div>

            </div>

            <div class="age4">
                <p>AGE</p>
                <p class="val4">
                    <i class="sub4">-</i>
                    <span>10</span>
                    <i class="add4">+</i>
                </p>

                <input type="range" min="10" max="70" value="10">
            </div>

            <div class="height4">
                <p>HEIGHT</p>
                <p class="val4">
                    <i class="sub4">-</i>
                    <span>50</span>cm
                    <i class="add4">+</i>
                </p>

                <input type="range" min="50" max="220" value="50">
            </div>
            <div class="weight4">
                <p>WEIGHT</p>
                <p class="val4">
                    <i class="sub4">-</i>
                    <span>10</span>kg
                    <i class="add4">+</i>
                </p>

                <input type="range" min="10" max="180" value="10">
            </div>

            <div class="calc4">CALCULATE</div>
        </div>

        <div class="result4">
            <div class="bmi4">
                <div class="title4">YOUR BODY FAT</div>
                <div class="val4"><span id="bf_val">0.00</span></div>
            </div>

            <div class="text4">Your Body Fat is normal!</div>
            <div class="recal4">RECALCULATE</div>
            <div class="recal4"><a onclick="getvalbf()">INSERT INTO ANALASIS</a></div>
        </div>
    </div>
</div>