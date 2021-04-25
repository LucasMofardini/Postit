function toggleMais(){
   const containerMais = document.querySelector('.container-mais');
   const containerFormAdicionar = document.querySelector('.container-form-adicionar');
   console.log(containerMais);
   containerMais.addEventListener('click',()=>{
    containerFormAdicionar.classList.toggle('ativo');
   });
}
toggleMais();