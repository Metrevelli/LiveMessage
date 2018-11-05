const url = 'getMessage.php';
let urlParams = new URLSearchParams(location.search);
let paramValue = urlParams.get('mc');
const formData = new FormData();
formData.append('mc',paramValue);

fetch(url,{
    method:'POST',
    body: formData
}).then(response => response.json())

.then(data => {

    if(data.message_music){
        const icon = document.querySelector("svg");
        let audio = document.createElement('audio');
        audio.setAttribute('src',`music/${data.message_music}`);
        // audio.setAttribute('autoplay','true');
        audio.setAttribute('muted','true');
        document.body.appendChild(audio);
        let clicked = 0;
        icon.addEventListener("click",() => {
            clicked++;
            if(clicked === 1){
                audio.play();
                icon.classList.toggle("mute");
                return; 
            };
            icon.classList.toggle("mute");
            audio.muted =  !audio.muted;
        });

    }
    if(data.message_background){
        document.body.style.backgroundImage = `url('background/${data.message_background}')`;
    }
    document.querySelector('h2').innerHTML = data.message_body;
})