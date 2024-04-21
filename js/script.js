/* Progess bar */
const progress = document.querySelector('.progress');
const orderCompleted = document.getElementById('order-completed');
const returnBtn = document.getElementById('return-btn');

let currentStep = 0;
const totalSteps = 8; // Total number of steps

// Function to update progress
function updateProgress(step) {
    const percent = (step / totalSteps) * 100;
    progress.style.width = percent + '%';
    if (step === totalSteps) {
        setTimeout(() => {
            orderCompleted.style.display = 'block';
        }, 500);
    }
}

// Function to handle next step button click
function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        updateProgress(currentStep);
    }
}

// Automatically progress (seconds)
const intervalId = setInterval(() => {
    nextStep();
    if (currentStep === totalSteps) {
        clearInterval(intervalId);
    }
}, 2000);

// Handle return to home button click
returnBtn.addEventListener('click', () => {
    // Replace this with the URL of your home page
    window.location.href = 'index.html';
});

/* Product */
// Products Array
var products = [
  'SDP-1 Portable Digital Piano',
  'Yamaha PSR EW310',
  'DP-12 Compact Digital Piano',
  'DP-12 Compact Digital Piano',
  'Yamaha CLP 725 Digital Piano',
  'GDP-200 Digital Grand Piano',
  'Tanglewood TWIDN',
  'LA II Select Bass Guitar',
  'Squier Bullet Stratocaster',
  'New Jersey Select Electric Guitar',
  'Hartwood Libretto Double Top Acoustic Guitar',
  'RedSub Coliseum Fanned Fret 6-String Bass',
  'Student Full Size Violin',
  'Hidersine Inizio Violin',
  'Stentor Student 1 Violin',
  'Stagg S-Shaped Electric Violin',
  'Hidersine Piacenza Finetune Violin',
  'Conrad Goetz Menuett-Heritage 98 Violin',
  '15 Key Colourful Xylophone',
  'Soprano Xylophone',
  'Alto Xylophone',
  'Percussion Plus Tenor Alto Chromatic Xylophone',
  'Percussion Plus Tenor Xylophone',
  'Stagg Xylophone 37 Pro',
];

// Functions to save product in session storage when user press Enquire button
function saveData(e) {
  sessionStorage.setItem(
    'item_id',
    e.target.parentElement.firstElementChild.innerHTML
  );
  window.location.replace('enquiry.html');
}

// Function to get product from session storage and display it in the Subject field on enquirt form
function displayData() {
  document.getElementById('subject').value =
    sessionStorage.getItem('item_id') == null
      ? ''
      : 'RE: Enquiry on ' + sessionStorage.getItem('item_id').trim();
}

// This function will load products from products array in the dropdown list on the enquiry form
function loadProducts() {
  var select = document.getElementById('services');
  for (var i = 0; i < products.length; i++) {
    var option = document.createElement('option');
    option.textContent = products[i];
    option.value = products[i];
    select.appendChild(option);
  }
}

// This function will constantly change the value in subject field whenever user sleects a product from the dropdown list and then store it in the session storage
function change() {
  var product = document.getElementById('services').value;
  sessionStorage.product = product;
  document.getElementById('subject').value =
    'RE: Enquiry on ' + sessionStorage.product;
}

// when page is loaded, displayData function and loadProducts function will be executed
window.onload = function () {
  displayData();
  loadProducts();
};

// This function will validate the enquiry form, check all the fields are filled and then submit the form data to session storage
var form = document.getElementById('form');
form.addEventListener('submit', function (e) {
  e.preventDefault();

  var errors = [];
  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var subject = document.getElementById('subject').value;
  var staddress = document.getElementById('staddress').value;
  var city = document.getElementById('city').value;
  var postcode = document.getElementById('postcode').value;
  var state = document.getElementById('state').value;
  var product = document.getElementById('services');
  var comment = document.getElementById('comment').value;

  if (fname == '') {
    errors.push('First Name is required');
  } else {
    if (!/^[a-zA-Z]+$/.test(fname)) {
      errors.push('First Name must be alphabets');
    }
  }

  if (lname == '') {
    errors.push('Last Name is required');
  } else {
    if (!/^[a-zA-Z]+$/.test(lname)) {
      errors.push('Last Name must be alphabets');
    }
  }

  if (email == '') {
    errors.push('Email is required');
  } else {
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
      errors.push('Email is not valid');
    }
  }

  if (phone == '') {
    errors.push('Phone is required');
  } else {
    if (!/^[0-9]{10}$/.test(phone)) {
      errors.push('Phone must be 10 digits');
    }
  }

  if (subject == '') {
    errors.push('Subject is required');
  }

  if (staddress == '') {
    errors.push('Street Address is required');
  } else {
    if (staddress.length > 40) {
      errors.push('Street Address must be less than 40 characters');
    }
  }

  if (city == '') {
    errors.push('City is required');
  } else {
    if (city.length > 20) {
      errors.push('City must be less than 20 characters');
    }
  }

  if (postcode == '') {
    errors.push('Postcode is required');
  } else {
    if (!/^[0-9]{6}$/.test(postcode)) {
      errors.push('Postcode must be 6 digits');
    }
  }

  if (errors.length > 0) {
    var error_msg = '';
    for (var i = 0; i < errors.length; i++) {
      error_msg += errors[i] + '\n';
    }
    alert(error_msg);
  } else {
    // save data as an object to sessionStorage
    var data = {
      fname: fname,
      lname: lname,
      email: email,
      phone: phone,
      staddress: staddress,
      city: city,
      postcode: postcode,
      state: state,
      product: product.value,
      subject: subject,
      comment: comment,
    };
    sessionStorage.setItem('data', JSON.stringify(data));
    alert('Thank you for your enquiry. We will get back to you soon!');
    window.location.href =
      'mailto:101231306@students.swinburne.edu.my?subject=' +
      subject +
      '&body=' +
      'First Name: ' +
      fname +
      '%0D%0A' +
      'Last Name: ' +
      lname +
      '%0D%0A' +
      'Email: ' +
      email +
      '%0D%0A' +
      'Phone: ' +
      phone +
      '%0D%0A' +
      'Street Address: ' +
      staddress +
      '%0D%0A' +
      'City: ' +
      city +
      '%0D%0A' +
      'Postcode: ' +
      postcode +
      '%0D%0A' +
      'State: ' +
      state +
      '%0D%0A' +
      'Product: ' +
      product.value +
      '%0D%0A' +
      'Comment: ' +
      comment;
  }
});
