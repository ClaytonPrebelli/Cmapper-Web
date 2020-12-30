let horasis2 = new Date()
var hora2 = horasis2.getHours()

var fundo = document.getElementById('fundo_site2')

if (hora2>=0 && (hora2 <12)) {
    document.body.style.background="#36a3ed"
   
    
} else if (hora2>=12 && hora2<18) {
    document.body.style.background="#b37d61"
    
} else {
    document.body.style.background="#0b2242"
    
}