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
            decir(document.getElementById('quiz_description').textContent);
            break;
        case ' ':
            decir(document.getElementById(v_label[pblur].id).textContent);
            break;
        case '0':
            decir("0");
            break;
        case '1':
            decir("1");
            break;
        case '2':
            decir("2");
            break;
        case '3':
            decir("3");
            break;
        case '4':
            decir("4");
            break;
        case '5':
            decir("5");
            break;
        case '6':
            decir("6");
            break;
        case '7':
            decir("7");
            break;
        case '8':
            decir("8");
            break;
        case '9':
            decir("9");
            break;
        case 'Enter':
            if(tam<0.2){
                decir("Pulsa espacio para escuchar la pregunta");
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
        default:
            decir("Escriba solo números");
    }
}
function decir(texto) {
    speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
    /*utterance = new SpeechSynthesisUtterance();
    utterance.voice = speechSynthesis.getVoices()[2];
    utterance.text = texto;
    speechSynthesis.speak(utterance);
     */

}
