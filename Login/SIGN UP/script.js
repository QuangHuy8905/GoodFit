function togglePassword(inputId, toggleIcon) {
  const input = document.getElementById(inputId);
  const icon = toggleIcon.querySelector('ion-icon');

  if (input.type === 'password') {
    input.type = 'text';
    icon.setAttribute('name', 'eye-off-outline');
  } else {
    input.type = 'password';
    icon.setAttribute('name', 'eye-outline');
  }
}
