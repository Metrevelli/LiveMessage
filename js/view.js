const url = 'getMessage.php';

let urlParams = new URLSearchParams(location.search);
let paramValue = urlParams.get('mc');
const formData = new FormData();
formData.append('mc',paramValue);

fetch(url,{
    method:'POST',
    body: formData
}).then(response => response.text())
.then(data => {
    document.body.innerHTML = data;
})