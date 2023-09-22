
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.querySelector('.Video_modal');
  const modalTriggerButton = document.querySelector('.js-open-video-modal');
  const closeButton = modal.querySelector('.Video_modal__close');

  modalTriggerButton.addEventListener('click', function () {
    modal.classList.remove('hidden');
  });

  closeButton.addEventListener('click', function () {
    modal.classList.add('hidden');
  });
});
