const setFont = document.getElementById('select-font').value;
let contentText = document.getElementById('content-area');
const textBold = document.getElementById('text-bold');
const textItalic = document.getElementById('text-italic');
const textUnderline = document.getElementById('text-underline');
const textStrike = document.getElementById('text-strik');

const hiddenText = document.getElementById('hidden-content');
const submitBtn = document.getElementById('submit-btn');

submitBtn.addEventListener('click',function(){
    hiddenText.value = contentText.innerHTML;
})


const initial = (control,textSymbol) => {
    control.addEventListener('click',function(e){
        control.classList.toggle('symbol-active');
        document.execCommand(textSymbol,false,contentText);  
    })
}

initial(textBold,'bold');
initial(textItalic,'italic');
initial(textUnderline, 'underline');
initial(textStrike, 'strikeThrough');

