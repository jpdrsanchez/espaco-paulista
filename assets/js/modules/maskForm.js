import VMasker from 'vanilla-masker';

const inputHandler = (masks, max, event) => {
  var c = event.target;
  var v = c.value.replace(/\D/g, '');
  var m = c.value.length > max ? 1 : 0;
  VMasker(c).unMask();
  VMasker(c).maskPattern(masks[m]);
  c.value = VMasker.toPattern(v, masks[m]);
};

const initMasker = () => {
  const phoneInput = document.querySelector('[data-phone]');
  const numberInput = document.querySelector('[data-number]');

  const telMask = ['(99) 9999-9999', '(99) 99999-9999'];

  if (phoneInput && numberInput) {
    VMasker(numberInput).maskNumber();
    VMasker(phoneInput).maskPattern(telMask[0]);
    phoneInput.addEventListener(
      'input',
      inputHandler.bind(undefined, telMask, 14),
      false,
    );
  }
};

export default initMasker;
