const setFont = document.getElementById('select-font').value;
let contentText = document.getElementById('content-area');
const textBold = document.getElementById('text-bold');
const textItalic = document.getElementById('text-italic');
const textUnderline = document.getElementById('text-underline');
const textStrike = document.getElementById('text-strik');



const initial = (control) => {
    control.addEventListener('click',function(e){
        e.preventDefault();
        if(control.classList[0]==='symbol-active'){
            control.classList.remove('symbol-active');
        }
        else{
            control.classList.add('symbol-active');
        }
    })
}

initial(textBold);
initial(textItalic);
initial(textUnderline);
initial(textStrike);
