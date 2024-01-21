// Get Elements

const previewImg = document.querySelectorAll('.img-wrapper img');

const modalImg = document.querySelector('.modal-img img');

const modal = document.querySelector('.modal');

const highresSrc = "1920"


previewImg.forEach((images) => {

  images.addEventListener('click', () => {

    modal.classList.add('open');

    let imgSrc = images.src.slice(0,-3) + highresSrc;

    modalImg.src = imgSrc;

    console.log(modalImg.src);

  });

});


modal.addEventListener('click', e => {

  if (e.target.classList.contains('modal')) {

    modal.classList.remove('open');

  }

});



