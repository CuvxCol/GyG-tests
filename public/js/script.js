const slidePage = document.querySelector('.slidepage');
//Vector con los elementos de etiqueta input
const v_inputs = document.getElementsByTagName("input");
const v_label = document.getElementsByTagName("label");
const progressText =document.querySelectorAll('.step p');
const progressCheck =document.querySelectorAll('.step .check');
const bullet =document.querySelectorAll('.step .bullet');

let max = 4;
let current = 1;

function onKeyDown(event,tam, numpage,pblur) {
    const key = event.key; // "A", "1", "Enter", "ArrowRight"...
    //console.log("Presionada: " + key);    
    switch(key){
        case 'r':
            decir("Recuerda que:");
            decir("presiona 0 para indicar que no lo molesta.");
            decir("1 si es levemente o no molesta mucho.");
            decir("2 para cuando es muy desagradable pero lo puede soportar.");
            decir("3 si es severo o casi no puede soportarlo.");
            decir("Y recuerda que pulsando la tecla Enter se mandará tu respuesta");
            break;
        case ' ':
            decir(document.getElementById(v_label[pblur].id).textContent);
            break;
        case '0':
            decir("0, No lo molesta nada en lo absoluto");
            break;
        case '1':
            decir("1, Levemente, no molesta mucho");
            break;
        case '2':
            decir("2, Desagradable pero puedo soportarlo");
            break;
        case '3':
            decir("3, Severamente, casi no puedo soportarlo");
            break;
        case 'Enter':
            if(tam<0.21){
                decir("Por favor pulsa espacio para escuchar la pregunta");
                tam2="-"+tam+"%";
                slidePage.style.marginLeft=tam2;
                document.getElementById(v_inputs[pblur].id).blur();
                //alert("se supone este debe perde enfoq "+v_inputs[pblur].id);
                //intento hacer barra progreso
                switch(tam){
                    case 0.05:
                        bullet[current-1].classList.add("active");
                        progressText[current-1].classList.add("active");
                        progressCheck[current-1].classList.add("active");
                        current += 1;
                        break;
                    case 0.1:
                        bullet[current-1].classList.add("active");
                        progressText[current-1].classList.add("active");
                        progressCheck[current-1].classList.add("active");
                        current += 1;
                        break;
                    case 0.15:
                        bullet[current-1].classList.add("active");
                        progressText[current-1].classList.add("active");
                        progressCheck[current-1].classList.add("active");
                        current += 1;
                        break;
                    case 0.2:
                        bullet[current-1].classList.add("active");
                        progressText[current-1].classList.add("active");
                        progressCheck[current-1].classList.add("active");
                        current += 1;
                        break;
                }
                document.getElementById(v_inputs[numpage].id).focus();
            }else{
                decir("Gracias por realizar esta encuesta");
                document.getElementById("formulario_ansiedad").submit();
            }
            break;
    }
}
function decir(texto) {
    speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
}