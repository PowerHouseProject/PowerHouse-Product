// let gender = 'male';
// height = 50;


function final_result(bmr) {

    var yourSelect = document.getElementById("activity");
    if (yourSelect.selectedIndex == 0) {
        bmr = bmr * 1.2;
    }
    else if (yourSelect.selectedIndex == 1) {
        bmr = bmr * 1.375;
    }
    else if (yourSelect.selectedIndex == 2) {
        bmr = bmr * 1.55;
    }
    else if (yourSelect.selectedIndex == 3) {
        bmr = bmr * 1.725;
    }
    else if (yourSelect.selectedIndex == 4) {
        bmr = bmr * 1.9;
    }
    bmr = bmr.toFixed(2);
    return (bmr);
}

document.querySelector('.calculate2 .gender2 .male2').onclick = function () {
    gender = 'male2';
    this.classList.add('active');
    document.querySelector('.calculate2 . gender2 .female2').className = 'female2';
}

document.querySelector('.calculate2 .gender2 .male2').onclick = function () {
    gender = 'female2';
    this.classList.add('active');
    document.querySelector('.calculate2 . gender2 .male2').className = 'male2';
}

document.querySelector('.calculate2 .age2 input').onchange = function () {
    age = parseInt(this.value);
    document.querySelector('.calculate2 .age2 .val2 span').innerText = age;
}

document.querySelector('.calculate2 .age2 .val2 i.add2').onclick = function () {
    age += 1;
    age = (age > 70) ? 70 : age;
    document.querySelector('.calculate2 .age2 .val2 span').innerText = age;
    document.querySelector('.calculate2 .age2 input').value = age;
}

document.querySelector('.calculate2 .age2 .val2 i.sub2').onclick = function () {
    age -= 1;
    age = (age < 10) ? 10 : age;
    document.querySelector('.calculate2 .age2 .val2 span').innerText = age;
    document.querySelector('.calculate2 .age2 input').value = age;
}


document.querySelector('.calculate2 .height2 input').onchange = function () {
    height = parseInt(this.value);
    document.querySelector('.calculate2 .height2 .val2 span').innerText = height;
}

document.querySelector('.calculate2 .height2 .val2 i.add2').onclick = function () {
    height += 1;
    height = (height > 220) ? 220 : height;
    document.querySelector('.calculate2 .heigh2t .val2 span').innerText = height;
    document.querySelector('.calculate2 .height2 input').value = height;
}

document.querySelector('.calculate2 .height2 .val2 i.sub2').onclick = function () {
    height -= 1;
    height = (height < 50) ? 50 : height;
    document.querySelector('.calculate2 .height2 .val2 span').innerText = height;
    document.querySelector('.calculate2 .height2 input').value = height;
}

document.querySelector('.calculate2 .weight2 input').onchange = function () {
    weight = parseInt(this.value);
    document.querySelector('.calculate2 .weight2 .val2 span').innerText = weight;
}

document.querySelector('.calculate2 .weight2 .val2 i.add2').onclick = function () {
    weight += 1;
    weight = (weight > 180) ? 180 : weight;
    document.querySelector('.calculate2 .weight2 .val2 span').innerText = weight;
    document.querySelector('.calculate2 .weight2 input').value = weight;
}

document.querySelector('.calculate2 .weight2 .val2 i.sub2').onclick = function () {
    weight -= 1;
    weight = (weight < 10) ? 10 : weight;
    document.querySelector('.calculate2 .weight2 .val2 span').innerText = weight;
    document.querySelector('.calculate2 .weight2 input').value = weight;
}

document.querySelector('.calculate2 .calc2').onclick = function () {

    if (document.getElementById('male2').checked) {


        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) + 5).toFixed(2);
        height = 50;
        weight = 10;
        document.querySelector('.calculate2 .weight2 input').value = weight;
        document.querySelector('.calculate2 .weight2 .val2 span').innerText = weight;
        document.querySelector('.calculate2 .height2 input').value = height;
        document.querySelector('.calculate2 .height2 .val2 span').innerText = height;
        document.querySelector('.calculate2 .age2 input').value = age;
        document.querySelector('.calculate2 .age2 .val2 span').innerText = age;

        document.querySelector('.result2 .bmi2 .val2').innerText = final_result(bmr);

        //Male radio button is checked

    }
    else if (document.getElementById('female2').checked) {


        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) - 161).toFixed(2);
        height = 50;
        weight = 10;
        document.querySelector('.calculate2 .weight2 input').value = weight;
        document.querySelector('.calculate2 .weight2 .val2 span').innerText = weight;
        document.querySelector('.calculate2 .height2 input').value = height;
        document.querySelector('.calculate2 .height2 .val2 span').innerText = height;
        document.querySelector('.calculate2 .age2 input').value = age;
        document.querySelector('.calculate2 .age2 .val2 span').innerText = age;



        document.querySelector('.result2 .bmi2 .val2').innerText = final_result(bmr);
        //Female radio button is checked
    }




    document.querySelector('.calculate2').style.display = 'none';
    document.querySelector('.result2').style.display = 'flex';
}

document.querySelector('.result2 .recal2').onclick = function () {
    document.querySelector('.result2').style.display = 'none';
    document.querySelector('.calculate2').style.display = 'flex';
}


