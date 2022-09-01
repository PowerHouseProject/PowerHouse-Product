let gender2 = 'male';
height = 50;

document.querySelector('.calculate3 .gender3 .male3').onclick = function () {
    gender2 = 'male3';
    this.classList.add('active');
    document.querySelector('.calculate3 . gender3 .female3').className = 'female3';
}

document.querySelector('.calculate3 .gender3 .male3').onclick = function () {
    gender2 = 'female3';
    this.classList.add('active');
    document.querySelector('.calculate3 . gender3 .male3').className = 'male3';
}

document.querySelector('.calculate3 .age3 input').onchange = function () {
    age = parseInt(this.value);
    document.querySelector('.calculate3 .age3 .val3 span').innerText = age;
}

document.querySelector('.calculate3 .age3 .val3 i.add3').onclick = function () {
    age += 1;
    age = (age > 70) ? 70 : age;
    document.querySelector('.calculate3 .age3 .val3 span').innerText = age;
    document.querySelector('.calculate3 .age3 input').value = age;
}

document.querySelector('.calculate3 .age3 .val3 i.sub3').onclick = function () {
    age -= 1;
    age = (age < 10) ? 10 : age;
    document.querySelector('.calculate3 .age3 .val3 span').innerText = age;
    document.querySelector('.calculate3 .age3 input').value = age;
}


document.querySelector('.calculate3 .height3 input').onchange = function () {
    height = parseInt(this.value);
    document.querySelector('.calculate3 .height3 .val3 span').innerText = height;
}

document.querySelector('.calculate3 .height3 .val3 i.add3').onclick = function () {
    height += 1;
    height = (height > 220) ? 220 : height;
    document.querySelector('.calculate3 .height3 .val3 span').innerText = height;
    document.querySelector('.calculate3 .height3 input').value = height;
}

document.querySelector('.calculate3 .height3 .val3 i.sub3').onclick = function () {
    height -= 1;
    height = (height < 50) ? 50 : height;
    document.querySelector('.calculate3 .height3 .val3 span').innerText = height;
    document.querySelector('.calculate3 .height3 input').value = height;
}

document.querySelector('.calculate3 .weight3 input').onchange = function () {
    weight = parseInt(this.value);
    document.querySelector('.calculate3 .weight3 .val3 span').innerText = weight;
}

document.querySelector('.calculate3 .weight3 .val3 i.add3').onclick = function () {
    weight += 1;
    weight = (weight > 180) ? 180 : weight;
    document.querySelector('.calculate3 .weight3 .val3 span').innerText = weight;
    document.querySelector('.calculate3 .weight3 input').value = weight;
}

document.querySelector('.calculate3 .weight3 .val3 i.sub3').onclick = function () {
    weight -= 1;
    weight = (weight < 10) ? 10 : weight;
    document.querySelector('.calculate3 .weight3 .val3 span').innerText = weight;
    document.querySelector('.calculate3 .weight3 input').value = weight;
}

document.querySelector('.calculate3 .calc3').onclick = function () {

    if (document.getElementById('male3').checked) {


        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) + 5).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate3 .weight3 input').value = weight;
        document.querySelector('.calculate3 .weight3 .val3 span').innerText = weight;
        document.querySelector('.calculate3 .height3 input').value = height;
        document.querySelector('.calculate3 .height3 .val3 span').innerText = height;
        document.querySelector('.calculate3 .age3 input').value = age;
        document.querySelector('.calculate3 .age3 .val3 span').innerText = age;

        document.querySelector('.result3 .bmi3 .val3').innerText = bmr;

        //Male radio button is checked

    }
    else if (document.getElementById('female3').checked) {


        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) - 161).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate3 .weight3 input').value = weight;
        document.querySelector('.calculate3 .weight3 .val3 span').innerText = weight;
        document.querySelector('.calculate3 .height3 input').value = height;
        document.querySelector('.calculate3 .height3 .val3 span').innerText = height;
        document.querySelector('.calculate3 .age3 input').value = age;
        document.querySelector('.calculate3 .age3 .val3 span').innerText = age;



        document.querySelector('.result3 .bmi3 .val3').innerText = bmr;
        //Female radio button is checked
    }




    document.querySelector('.calculate3').style.display = 'none';
    document.querySelector('.result3').style.display = 'flex';
}

document.querySelector('.result3 .recal3').onclick = function () {
    document.querySelector('.result3').style.display = 'none';
    document.querySelector('.calculate3').style.display = 'flex';
}


