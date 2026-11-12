const form_telefone = document.querySelectorAll('.form-telefone');

form_telefone.forEach(telefone => {
    telefone.addEventListener('input', (e) => {
        let valor = e.target.value.replace(/\D/g, '').slice(0, 11);
        
        if (valor.length > 7) {
            valor = valor.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1)$2-$3');
        } else if (valor.length > 2) {
            valor = valor.replace(/^(\d{2})(\d{0,5})/, '($1)$2');
        } else if (valor.length > 0) {
            valor = valor.replace(/^(\d{0,2})/, '($1');
        }
        
        e.target.value = valor;
    });
});


const form = document.getElementById('formUpload');
const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('fileInput');

dropZone.addEventListener('click', () => fileInput.click());

dropZone.addEventListener('dragover', (e) => {
  e.preventDefault();
  dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', () => {
  dropZone.classList.remove('dragover');
});

// Quando soltar a imagem
dropZone.addEventListener('drop', (e) => {
  e.preventDefault();
  dropZone.classList.remove('dragover');

  const files = e.dataTransfer.files;
  if (files.length > 0) {
    processarEnvio(files);
  }
});

// Quando selecionar clicando
fileInput.addEventListener('change', () => {
  if (fileInput.files.length > 0) {
    processarEnvio(fileInput.files);
  }
});

function processarEnvio(files) {
  const arquivo = files[0];

  // Valida se é imagem antes de enviar
  if (!arquivo.type.startsWith('image/')) {
    alert('Por favor, envie apenas imagens.');
    return;
  }

  // Coloca o arquivo arrastado dentro do <input type="file">
  fileInput.files = files;

  dropZone.textContent = 'Enviando...';
  form.submit(); // Envia o formulário direto para o upload.php
}