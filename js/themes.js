const html = document.documentElement;

function ativarModoClaro() {
    html.classList.remove('dark');
    html.classList.add('light');
    localStorage.setItem('theme', 'light');
  }
  
  function ativarModoEscuro() {
    html.classList.remove('light');
    html.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  }

function useTheme(){
    const theme = localStorage.getItem('theme');

    if(theme == 'dark'){
        ativarModoEscuro()
    }else{
        ativarModoClaro()
    }
}

useTheme()

const btnTheme = document.getElementById('btn-theme');

btnTheme.addEventListener('click', () => {
    const theme = localStorage.getItem('theme');
    if(theme == 'dark'){
        localStorage.setItem('theme', 'light');
    }else{
        localStorage.setItem('theme', 'dark');
    }

    useTheme()
})