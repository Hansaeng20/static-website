document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.hover-button');

  buttons.forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.classList.add('hovered');
      // Optional: show tooltip
      const tooltip = button.querySelector('.tooltip');
      if (tooltip) tooltip.style.display = 'block';
    });

    button.addEventListener('mouseleave', () => {
      button.classList.remove('hovered');
      // Hide tooltip
      const tooltip = button.querySelector('.tooltip');
      if (tooltip) tooltip.style.display = 'none';
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const copilot = document.getElementById('copilot-link');
  if (copilot) {
    copilot.style.cursor = 'pointer';  // show pointer cursor
    copilot.addEventListener('click', () => {
      window.location.href = 'products.html';
    });
  }
});
document.addEventListener('DOMContentLoaded', () => {
  const copilot = document.getElementById('support-link');
  if (copilot) {
    copilot.style.cursor = 'pointer';  // show pointer cursor
    copilot.addEventListener('click', () => {
      window.location.href = 'support.html';
    });
  }
});


