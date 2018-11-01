const url = 'createMessage.php';
const form =  document.querySelector('form');

form.addEventListener('submit', e =>{
    e.preventDefault();
    const text = document.querySelector('textarea').value;
    if(text.length === 0) return;
    console.log(text);
    const formData = new FormData();
    formData.append('text',text);
    console.log(formData);  
    fetch(url,{
        method: 'POST',
        body: formData
    }).then(response => {})
})