function toggleMais(){
   const containerMais = document.querySelector('.container-mais');
   const containerFormAdicionar = document.querySelector('.container-form-adicionar');
   // console.log(containerMais);
   containerMais.addEventListener('click',()=>{
    containerFormAdicionar.classList.toggle('ativo');
   });
}
toggleMais();

function trocaCor(){
   const inputColor = document.querySelectorAll('.container-color input');
   const containerForm = document.querySelector('.container-form-adicionar');
   console.log(inputColor);
   inputColor.forEach(input => {
      input.addEventListener('click',()=>{
         console.log(input);
         if(input.id == 'laranja'){
            containerForm.style.backgroundColor = "#FAF382";
         }if(input.id == 'azul'){
            containerForm.style.backgroundColor = "#5CA3F8";
         }if(input.id == 'verde'){
            containerForm.style.backgroundColor = "#ACD801";
         }

      });
   });
}
trocaCor();