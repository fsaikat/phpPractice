var addition=document.getElementById('add');
addition.onclick=function () {
    var firstNumber=Number(document.getElementById('first_number').value);
    var secondNumber=Number(document.getElementById('second_number').value);
    var result = firstNumber+secondNumber;
    document.getElementById('result').value=result;
}

var subtraction=document.getElementById('sub');
subtraction.onclick=function () {
    var firstNumber=Number(document.getElementById('first_number').value);
    var secondNumber=Number(document.getElementById('second_number').value);
    var result = firstNumber-secondNumber;
    document.getElementById('result').value=result;
}

var multiplication=document.getElementById('mul');
multiplication.onclick=function () {
    var firstNumber=Number(document.getElementById('first_number').value);
    var secondNumber=Number(document.getElementById('second_number').value);
    var result = firstNumber*secondNumber;
    document.getElementById('result').value=result;
}

var division=document.getElementById('div');
division.onclick=function () {
    var firstNumber=Number(document.getElementById('first_number').value);
    var secondNumber=Number(document.getElementById('second_number').value);
    var result = firstNumber/secondNumber;
    document.getElementById('result').value=result;
}

var remainder=document.getElementById('rem');
remainder.onclick=function () {
    var firstNumber=Number(document.getElementById('first_number').value);
    var secondNumber=Number(document.getElementById('second_number').value);
    var result = firstNumber%secondNumber;
    document.getElementById('result').value=result;
}