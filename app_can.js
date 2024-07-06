
const form=document.querySelector('#form');
const id=document.querySelector('#candidate_id');
const fieldval=document.querySelector('#field');
const oldval=document.querySelector('#old');
const newval=document.querySelector('#new');
const proofval=document.querySelector('#proof');

form.addEventListener('submit', (event) => {
    if (!validateInputs()) {
        event.preventDefault(); // Change 'e' to 'event'
    }
});

function validateInputs(){
    function validateInputs() {
        const candidateid = id.value.trim();
        const fieldinp = fieldval.value.trim();
        const oldinp = oldval.value.trim();
        const newinp = newval.value.trim();
        const proofinp = proofval.value.trim();
    
        console.log('Candidate ID:', candidateid);
        console.log('Field:', fieldinp);
        console.log('Old Value:', oldinp);
        console.log('New Value:', newinp);
        console.log('Proof:', proofinp);
    
        // ... rest of the function
    }
    
    var isValid = true;

    if( candidateid===''){
        isValid = false;

        setError(id,'Voter ID is required');
    }

   
    else{
        setSuccess(id)
    }


    if(fieldinp===''){
        isValid = false;

        setError(fieldval,'Field name is required');
    }

   
    else{
        setSuccess(fieldval)
    }
    if(oldinp===''){
        isValid = false;

        setError(oldval,'Old value is required');
    }
    else{
        setSuccess(oldval);
    }
    if(newinp===''){
        isValid = false;

        setError(newval,'New value is required');
    }
    

    else{
        setSuccess(newval)
    }
    if(proofinp===''){
        isValid = false;

        setError(proofval,'Proof is required');
    }
    else{
        setSuccess(proofval)
    }
    if (!isValid) {
        event.preventDefault();
    }

}
function setError(element,message){
    const inputGroup=element.parentElement;
    const errorElement=inputGroup.querySelector('.error');
    errorElement.innerText=message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');
}
function setSuccess(element){
    const inputGroup=element.parentElement;
    const errorElement=inputGroup.querySelector('.error');
    errorElement.innerText='';
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error');
}