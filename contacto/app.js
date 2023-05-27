const nombre = document.getElementById("name")
const apellido = document.getElementById("lastname")
const email = document.getElementById("email")
const pass = document.getElementById("password")
const ciudad = document.getElementById("city")
const direccion = document.getElementById("address")
const codigo = document.getElementById("zipcode")

const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""

    if(nombre.value.length<6)
    {
        warnings += `El nombre no es válido.`
        entrar = true
    }

    if(apellido.value.length<3)
    {
        warnings += `El apellido no es válido.`
        entrar = true
    }

    if(direccion.value.length<3)
    {
        warnings += `La dirección no es válida.`
        entrar = true
    }
    
    if(ciudad.value.length<3)
    {
        warnings += `La ciudad no es válida.`
        entrar = true
    }
  
    


    if(codigo.value.length<2)
    {
        warnings += `El código postal no es válido.`
        entrar = true
    }


    if(!regexEmail.test(email.value)){
        warnings += `El email no es válido.`
        entrar = true
    }
    if(pass.value.length < 8){
        warnings += `La contraseña no es válida.`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Enviado"
    }
})