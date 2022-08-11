'use strict'

const li        = document.querySelectorAll('.li-services')
const bloque    = document.querySelectorAll('.bloque-services')

// CLICK en li
    // TODOS .li quitar la clase activo
    // TODOS .bloque quitar la clase activo
    // .li con la posicion se añadimos la clase activo
    // .bloque con la posicion se añadimos la clase activo

// Recorriendo todos los LI
li.forEach( ( cadaLi , i )=>{
    // Asignando un CLICK a CADALI
    li[i].addEventListener('click',()=>{

        // Recorrer TODOS los .li
        li.forEach( ( cadaLi , i )=>{
            // Quitando la clase activo de cada li
            li[i].classList.remove('li-activo')
            // Quitando la clase activo de cada bloque
            bloque[i].classList.remove('bloque-activo')
        })

        // En el li que hemos click le añadimos la clase activo
        li[i].classList.add('li-activo')
        // En el bloque con la misma posición le añadimos la clase activo
        bloque[i].classList.add('bloque-activo')

    })
})