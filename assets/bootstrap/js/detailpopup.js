
// Navigate product images 

const BigImage = document.getElementById('big-image');
const imgSlider = document.getElementById('img-slider');

imgSlider.addEventListener('click', event => {

    if (event.target === Nomos1) {
         BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri5.jpg') ?>");
    }

    else if (event.target === Nomos2) {
        BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri3.jpg') ?>");
    }

    else {
    BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri2.jpg') ?>");
    }
  
});