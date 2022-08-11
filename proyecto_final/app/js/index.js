const navToggle = document.querySelector(".nav__toggle")
const navMenu = document.querySelector(".navbar__lista")
const bodyScroll = document.querySelector(".body")

console.log(navToggle)
console.log(navMenu)

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu_visible");
    bodyScroll.classList.toggle("body_scroll");
})

addEventListener('DOMContentLoaded',() =>{
    const contadores = document.querySelectorAll('.contador_cantidad')
    const velocidad = 100

    const animarContadores = () => {
        for (const contador of contadores) {
            const actualizar_contador = () => {
                let cantidad_maxima = +contador.dataset.cantidadTotal
                let valor_actual = +contador.innerText
                let incremento = cantidad_maxima / velocidad

                if(valor_actual < cantidad_maxima){
                    contador.innerText = Math.ceil(valor_actual + incremento)
                    setTimeout(actualizar_contador, 200)
                }else{
                    contador.innerText = cantidad_maxima
                }
            }
            actualizar_contador()
        }

    }
    animarContadores()

    const mostrarContadores = elementos =>{
        elementos.forEach(elemento => {
            if(elemento.isIntersecting){
                elemento.target.classList.add('animar')
                elemento.target.classList.remove('ocultar')
                setTimeout(animarContadores, 300)
            }
        });
    }

    //INSERSECTION OBSERVER
    const observer = new IntersectionObserver(mostrarContadores, {
        threshold: 0.90 //VALOR DE 0 - 1 
    })

    const elementosHTML = document.querySelectorAll('.contador')
    elementosHTML.forEach(elementoHTML =>{
        observer.observe(elementoHTML)
    })

})