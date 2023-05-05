$(window).ready(()=>{
    for(let i=1;i<=15;i++){
        let id = "cont-"+i 
        let contador = document.getElementById(id);
        let valorInicial=0
        let incremento=1
        let valorFinal=contador.getAttribute('data-cant')
        setInterval(function() {
            valorInicial += incremento;
            
            if (valorInicial <= valorFinal) {
                contador.innerHTML = Math.round(valorInicial);
                clearInterval(intervalo);
            }
        }, 50);
    } 
})