document.addEventListener("DOMContentLoaded", function() {
    const lerMaisButtons = document.querySelectorAll('.ler-mais');
  
    lerMaisButtons.forEach(button => {
      button.addEventListener('click', function() {
        const cardBody = this.parentElement;
        const content = cardBody.querySelector('.ler-mais-content');
        content.classList.toggle('show');
        if (content.classList.contains('show')) {
          this.textContent = "Ler menos";
        } else {
          this.textContent = "Ler mais";
        }
      });
    });
  });
  