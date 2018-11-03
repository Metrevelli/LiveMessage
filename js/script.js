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
    const file = document.querySelector('[type=file]').files;
    if(text.length === 0) return;
    // console.log(text);
    const formData = new FormData();
    formData.append('text',text);
    formData.append('file',file[0]);
    for (var pair of formData.entries()) {
        console.log(pair[0]+ ', ' + pair[1]['name']); 
    }
    fetch(url,{
        method: 'POST',
        body: formData
    }).then(response => response.ok ? response.text() : false)
    .then(data => {
        appendLink(data);
    })
})