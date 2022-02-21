<script type="text/javascript">
    
document.getElementById('key-pad').addEventListener('click',
    function (event) {
        const number = event.target.innerText;
        const calcInput = document.getElementById('typed-numbers');

        if (isNaN(number)) {
            if (number == 'C') {
                calcInput.value = '';
                document.getElementById('incomeTaxField').innerText = '';
                document.getElementById('message').innerText = '';
            }
            else if(number == 'CE'){
                let output = calcInput.value;
                if(output){
                   output = output.substr(0,output.length-1); 
                   calcInput.value = output;
                } 
                document.getElementById('incomeTaxField').innerText = '';
                document.getElementById('message').innerText = ''; 
            }
        }
        else {
            const previousNumber = calcInput.value;
            const newNumber = previousNumber + number;
            calcInput.value = newNumber;
        }
    });

function calculateIncomeTax(){
    
    const failError=document.getElementById('notify-fail');
    failError.style.display='none';
    document.getElementById('incomeTaxField').innerHTML = ''; 

    const type = document.querySelector('input[name="type"]:checked').value;

    let typeAmount = 0;
    let incomeTax = 0;
    let remainingBalance = 0;

    if(type == 'Yearly'){
        typeAmount = 12 * 30000;
    }else{
        typeAmount = 30000; 
    }

    let typedNumbers=document.getElementById('typed-numbers').value;

    
    if(isNaN(typedNumbers) || typedNumbers==''){

       failError.style.display='block';

    }else{

        typedNumbers = parseInt(typedNumbers);

        if(typedNumbers < typeAmount){
            incomeTax = 0;
            remainingBalance = typedNumbers - incomeTax; 
            document.getElementById('message').innerHTML = 'Under '+ '' + typeAmount +  ' BDT you are not eligible for Tax.<br/>So your balance : ' + remainingBalance + ' BDT'; 

        }else{

            incomeTax = (5/100) * typedNumbers;
            incomeTax = Math.round(incomeTax);
            remainingBalance = typedNumbers - incomeTax;

            document.getElementById('message').innerHTML = typeAmount + ' BDT or above '+ typeAmount + ' BDT you are eligible for 5% Tax.<br/>So your remaining balance : ' + remainingBalance + ' BDT'; 
        }

        document.getElementById('incomeTaxField').innerHTML = incomeTax + ' BDT'; 
    }
}
</script>