var inputReal = document.getElementById('valor-reais');
var inputDolar = document.getElementById('valor-dolar');

inputReal.addEventListener('blur', () =>{
    inputDolar.value = (parseFloat(inputReal.value) / parseFloat(valorDolar)).toFixed(2);
    // console.log(parseFloat(inputReal.value));
    // console.log(parseFloat(valorDolar));
});