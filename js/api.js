// API LLAMADA DEL WEBSITE :)




function show(output){
document.getElementById('output').innerHTML += '<p>'+output+'</p>';
document.getElementById('moneda2').innerHTML += '<p>'+output+'</p>';  
}

show(location.href);
