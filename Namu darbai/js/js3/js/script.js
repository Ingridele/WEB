
var amzius = prompt("Kiek jums metų?" , "0");
var atsakymas = amziausCenzas(amzius);
function amziausCenzas (amzius){
  if (amzius >=18){
  alert("Galite užeiti į svetainę");
  }
  else{
  alert("Į svetainę užeiti negalite");
  }
}
