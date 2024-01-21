// Get Elements

const previewImg = document.querySelectorAll('.img-wrapper img');

const modalImg = document.querySelector('.modal-img img');

const modalImgDownload = document.querySelector('.modal-img-download');

const modal = document.querySelector('.modal');

const highresSrc = "1920"

previewImg.forEach((images) => {

  images.addEventListener('click', () => {

    modal.classList.add('open');

    let imgSrc = images.src.slice(0,-3) + highresSrc;

    modalImg.src = imgSrc;

    modalImgDownload.href = imgSrc;

    console.log(modalImg.src);

    console.log(modalImgDownload.href);

  });

});


modal.addEventListener('click', e => {

  if (e.target.classList.contains('modal')) {

    modal.classList.remove('open');

  }

   if (e.target.classList.contains('closebutton')) {

    modal.classList.remove('open');

  }

});


function downloadFile() {         window.open("https://imagedelivery.net/UM7D0Nco8iEpdCrVzQrsNg/38be9902-daf6-4214-98e2-f3334b2d2900/width=1920")

      };



