const url = 'createMessage.php';
const form =  document.querySelector('form');
const messageContainer = document.querySelector('.messageLink');
const link = document.querySelector('#link');

const appendLink = (messageLink) => {
    form.hidden = true;
    messageContainer.hidden = false;
    link.value = messageLink;
    link.addEventListener('click',e => {e.target.select()});
}

form.addEventListener('submit', e =>{
    e.preventDefault();
    const text = document.querySelector('textarea').value;
    if(text.length === 0) return;
    // console.log(text);
    const formData = new FormData();
    formData.append('text',text);
    // console.log(formData);  
    fetch(url,{
        method: 'POST',
        body: formData
    }).then(response => {
        return response.ok ? response.text() : false;
    }).then(data => {
        appendLink(data);
    })
})