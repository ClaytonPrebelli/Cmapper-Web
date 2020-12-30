let horasis = new Date()
var hora = horasis.getHours()
var img = document.getElementById('foto_hr')
var msg = document.getElementById('msg')

if (hora>=0 && hora <12) {
    //Bom dia
    img.src = 'images/manha.png'
    document.body.style.background="#36a3ed"
    msg.innerText = 'Bom Dia!'
    
} else if (hora>=12 && hora<18) {
    //Boa tarde
    img.src = 'images/tarde.png'
    document.body.style.background="#b37d61"
    msg.innerText='Boa tarde'
} else {
    //Boa noite
    img.src = 'images/noite.png'
    document.body.style.background="#0b2242"
    msg.innerText='Boa Noite!'
}