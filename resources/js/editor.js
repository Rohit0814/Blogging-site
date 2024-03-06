const setFont = document.getElementById('select-font');
let contentText = document.getElementById('content-area');
const fontSizeId = document.getElementById('font-size');
const textBold = document.getElementById('text-bold');
const textItalic = document.getElementById('text-italic');
const textUnderline = document.getElementById('text-underline');
const textStrike = document.getElementById('text-strik');

const hiddenText = document.getElementById('hidden-content');
const submitBtn = document.getElementById('submit-btn');


const theamFontSelect = document.getElementById("theme-font-select");
const allFontSelect = document.getElementById('all-font-select');

const theamFont = ['calibri', 'calibri Light'];
const allFont = ["Arial",
"Helvetica",
"Times New Roman",
"Times",
"Courier New",
"Courier",
"Verdana",
"Georgia",
"Palatino",
"Garamond",
"Bookman",
"Comic Sans MS",
"Trebuchet MS",
"Arial Black",
"Impact",
"Lucida Sans Unicode",
"Tahoma",
"Geneva",
"Verdana",
"Century Gothic",
"Candara",
"Franklin Gothic Medium",
"Arial Narrow",
"Cambria",
"Didot",
"Rockwell",
"Futura",
"Bodoni MT",
"MS Serif",
"MS Sans Serif",
"SimSun", 
"Meiryo", 
"Gulim",  
];

const fontSizes = [
    {
        show: "h1",
        value: 7
    },
    {
        show: "h2",
        value: 6
    },
    {
        show: "h3",
        value: 5
    },
    {
        show: "h4",
        value: 4
    },
    {
        show: "h5",
        value: 3
    },
    {
        show: "h6",
        value: 2
    }
];

theamFont.map(data => {
    theamFontSelect.innerHTML+=`<option>${data}</option>`;
})

allFont.map(data => {
    allFontSelect.innerHTML+=`<option>${data}</option>`
})

fontSizes.map(data => {
    fontSizeId.innerHTML+=`<option value=${data.value}>${data.show}</option>`
})

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


setFont.addEventListener('change',function(){
    document.execCommand('fontName',false,setFont.value); 
})

fontSizeId.addEventListener('change',function(){
    // document.execCommand("styleWithCSS", true, null);
    document.execCommand('fontSize',false,fontSizeId.value);
})
