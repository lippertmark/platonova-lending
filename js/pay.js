var ipay = new IPAY({api_token : "evns19d7d70383lnsm8n9jv467"});

function successCallback_covid(order){
    document.getElementsByClassName('popup_covid')[0].style= "opacity: 1; visibility: visible";
    //window.location.href = 'https://yadi.sk/i/2P4ae70lJkGxZg';
}
function successCallback_pitanie(order){
    document.getElementsByClassName('popup_pitanie')[0].style= "opacity: 1; visibility: visible";
    //window.location.href = 'https://yadi.sk/i/oFg4go0yYwaT9A';
}
function success(){
    document.getElementsByClassName('popup_free')[0].style= "opacity: 1; visibility: visible";
    //window.location.href = 'https://yadi.sk/i/oFg4go0yYwaT9A';
}
function failureCallback(data){
    console.log("Хмм, что-то не сработало");
}

function close_popup(){
    document.getElementsByClassName('popup_covid')[0].style= "opacity: 0; visibility: hidden";
    document.getElementsByClassName('popup_pitanie')[0].style= "opacity: 0; visibility: hidden";
    document.getElementsByClassName('popup_free')[0].style= "opacity: 0; visibility: hidden";

}