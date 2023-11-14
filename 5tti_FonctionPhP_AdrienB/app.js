const switchThemeBtn = document.querySelector('.changeTheme')
let  toggleTheme = 0;

switchThemeBtn.addEventListener('click', () => {
    if(toggleTheme === 0) {
        document.documentElement.style.setProperty('--background',  randomizeColor());
        document.documentElement.style.setProperty('--backgroundinv', randomizeColor());
        document.documentElement.style.setProperty('--texte', randomizeColor());
        document.documentElement.style.setProperty('--texte2', randomizeColor());
        document.documentElement.style.setProperty('--inv', 'none');
        toggleTheme++;
    }
    else{
        document.documentElement.style.setProperty('--background', randomizeColor());
        document.documentElement.style.setProperty('--backgroundinv',  randomizeColor());
        document.documentElement.style.setProperty('--texte', randomizeColor());
        document.documentElement.style.setProperty('--texte2', randomizeColor());
        document.documentElement.style.setProperty('--inv', 'inside');
        toggleTheme--;
    }
})

const cursors = ['pointer', 'progress', 'wait', 'default', 'help', 'text', 'alias', 'cell', 'not-allowed'];

function changeCursor() {
  const randomCursor = cursors[Math.floor(Math.random() * cursors.length)];
  document.body.style.cursor = randomCursor;
}

// Changer le curseur toutes les secondes (1000 millisecondes)
setInterval(() => {
  changeCursor();
  if(toggleTheme === 0) {
    document.documentElement.style.setProperty('--background',  randomizeColor());
    document.documentElement.style.setProperty('--backgroundinv', randomizeColor());
    document.documentElement.style.setProperty('--texte', randomizeColor());
    document.documentElement.style.setProperty('--texte2', randomizeColor());
    document.documentElement.style.setProperty('--inv', 'none');
    toggleTheme++;
}
else{
    document.documentElement.style.setProperty('--background', randomizeColor());
    document.documentElement.style.setProperty('--backgroundinv',  randomizeColor());
    document.documentElement.style.setProperty('--texte', randomizeColor());
    document.documentElement.style.setProperty('--texte2', randomizeColor());
    document.documentElement.style.setProperty('--inv', 'inside');
    toggleTheme--;
}
}, 0)

  
function randomizeColor() {
    let color = "#";

    let chars = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"]

    for (let i = 0; i < 6; i++) {
        let random = Math.floor(Math.random() * chars.length);
        
        color += chars[random];
    }

    return color;
}