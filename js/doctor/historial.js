let atendido = document.getElementsByClassName('status.atendido');
let NoAtendido = document.getElementsByClassName('status.noatendido');

if('status' == document.getElementsByClassName('status.noatendido')){
    atendido.addEventListener('click',() => 'status.atendido');
}else{
    atendido.addEventListener('click',() => 'status.noatendido');
}

const status = document.querySelector('#satus');
if('#status' == false){
    atendido.addEventListener('click',() => 'status.atendido');
}else{
    atendido.addEventListener('click',() => 'status.noatendido');
}