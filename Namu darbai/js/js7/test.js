function ismestiViena(pilnasSarasas, ismesti){
  for(var i=0; i<pilnasSarasas.length; i++){

    if(pilnasSarasas[i] == ismesti){
      pilnasSarasas.splice(i,1);
    }

  }
  return pilnasSarasas;
}
