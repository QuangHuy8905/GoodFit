function togglePassword() {
  const password = document.getElementById('password');
  const eyeIcon = document.getElementById('eye-icon');

  if (password.type === 'password') {
    password.type = 'text';
    eyeIcon.setAttribute('name', 'eye-off-outline');
  } else {
    password.type = 'password';
    eyeIcon.setAttribute('name', 'eye-outline');
  }
}
