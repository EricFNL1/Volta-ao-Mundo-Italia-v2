document.addEventListener("DOMContentLoaded", function() {
  const lerMaisButtons = document.querySelectorAll('.ler-mais');

  lerMaisButtons.forEach(button => {
      button.addEventListener('click', function() {
          const cardBody = this.parentElement;
          const content = cardBody.querySelector('.ler-mais-content');
          content.classList.toggle('show');

          // Atualizar o posicionamento do rodapé sempre que um botão "Ler mais" for clicado
          updateFooterPosition();

          if (content.classList.contains('show')) {
              this.textContent = "Ler menos";
          } else {
              this.textContent = "Ler mais";
          }
      });
  });

  // Função para atualizar o posicionamento do rodapé
  function updateFooterPosition() {
      const footer = document.querySelector('footer');
      const footerHeight = footer.offsetHeight;

      const contentWrapper = document.querySelector('.container.text-center.mx-auto');
      const contentRect = contentWrapper.getBoundingClientRect();
      const contentHeight = contentRect.height;
      const contentBottom = contentRect.bottom;

      const windowHeight = window.innerHeight;

      let paddingBottom = 0;

      // Verificar se a altura do conteúdo é menor que a altura da janela
      if (contentHeight < windowHeight) {
          paddingBottom = windowHeight - contentBottom - footerHeight;
      }

      document.body.style.paddingBottom = Math.max(0, paddingBottom) + 'px';
  }

  // Chamar a função de atualização de posição do rodapé quando a página carregar
  updateFooterPosition();
});
