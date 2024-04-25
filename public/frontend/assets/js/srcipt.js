function loadingIcon() {
    var loader = document.querySelector('.loading-screen');
    window.addEventListener('load', function() {
       loader.classList.add('d-none');
    });
}


function sidebarToggle() {
    var toggle = document.querySelector('.sidebar-toggle');
    const mainContainer = document.querySelector('.main-container');
    const headerContainer = document.querySelector('.header-container');

    toggle.addEventListener('click', function() {
        var addDn = document.querySelectorAll('.add-dn');
        if (mainContainer.classList.contains('sidebar-closed')) {
            // open sidebar
            mainContainer.classList.remove('sidebar-closed');
            headerContainer.classList.remove('sidebar-closed');
            setTimeout(() => { 
                addDn.forEach(element => {
                    element.classList.remove('d-none');
                });
            }, 350);
            toggle.style.transform  = "rotate(0)";
        } else {
            // close sidebar
            mainContainer.classList.add('sidebar-closed');         
            headerContainer.classList.add('sidebar-closed');         
            addDn.forEach(element => {
                element.classList.add('d-none');
            });
            toggle.style.transform  = "rotate(180deg)";
            toggle.style.transition = "all .35s linear";
        }
    });
}

function getProductCategory() {
    var product = document.querySelectorAll('.product-category');
    product.forEach(element => {
        if(element.textContent == 'hoodie') {
            element.classList.add('hoodie');
        } else if(element.textContent == 'sandal') {
            element.classList.add('sandal');
        } else if(element.textContent == 'shirt') {
            element.classList.add('shirt');
        } else if(element.textContent == 'shoes') {
            element.classList.add('shoes');
        }
    });
}

function getUserPosition() {
    var selectElement = document.querySelector('#role');

    selectElement.addEventListener('change', function() {
        var positionElement = document.querySelector('#position');

        if (selectElement.value <= 3) {
            positionElement.classList.remove('disabled-input');
            positionElement.readOnly = false;
        } else {
            positionElement.classList.add('disabled-input');
            positionElement.readOnly = true;
        }
    });
}

function getPaymentStatus() {
    var status = document.querySelectorAll('span.status');
    status.forEach(element => {
        if (element.textContent.trim() == 'paid') {
            element.classList.add('badge', 'badge-light-success');
        } else if (element.textContent.trim() == 'unpaid') {
            element.classList.add('badge', 'badge-light-error');
        }
    });
}

function supportTabs() {
    const tabs = document.querySelectorAll('.tab-item');
    let active = document.querySelector('.tab-item.active');
    
    tabs.forEach(element => {
        element.addEventListener('click', function () {
            active.classList.remove('active');
            this.classList.add('active');
            active = this;

            const index = Array.from(tabs).indexOf(this);
            const listBoxes = document.querySelectorAll('.list-box');
            
            listBoxes.forEach(box => 
                box.classList.add('d-none')
            );

            listBoxes[index].classList.remove('d-none');
        });
    });
}

function supportToggle() {
    const toggle = document.querySelector(".chat-container .title");
    const chat = document.querySelector("iframe");
    toggle.addEventListener('click', function () {
        if (chat.classList.contains('d-none')) {
            chat.classList.remove('d-none');
            chat.style.height = '60rem';
        } else if (!chat.classList.contains('d-none')){
            chat.classList.add('d-none');
        }
    });
}

// function cart() {
//     var cartButton = document.querySelectorAll(".add-to-cart button.cart");
//     cartButton.forEach(function (button) {
//         button.addEventListener('click', function(e) {
//             e.preventDefault();
//             var form = button.closest('form');
//             form.addEventListener('input', function() {
//                 var id = form.querySelector('input[name="productID"]').value;
//                 var color = form.querySelector('input[name="color"]').value;
//                 var size = form.querySelector('input[name="size"]').value;

//                 var product = {
//                     id: id,
//                     color: color,
//                     size: size,
//                 }
//                 addToCart(product);
//             })



//             Swal.fire({
//                 text: `Thêm vào giỏ hàng thành công`,
//                 showConfirmButton: false,
//                 background: "#2DCB70",
//                 toast: true,
//                 animation: true,
//                 color: "#FFFF",
//                 showCloseButton: true,
//                 timer: 2000,
//                 position: "top-end",
//                 // timerProgressBar: true,
//                 showClass: {
//                     popup: 'animate__animated animate__fadeInRight animate__faster'
//                 },
//                 hideClass: {
//                     popup: 'animate__animated animate__fadeOutRight animate__faster'
//                 },
//                 didOpen: (toast) => {
//                     toast.addEventListener('mouseenter', Swal.stopTimer)
//                     toast.addEventListener('mouseleave', Swal.resumeTimer)
//                     toast.addEventListener('click', ()=> Swal.close())
//                 }
//             });
//         });
//     })
// }

// function addToCart(product) {
//     var cart = JSON.parse(localStorage.getItem('cart')) || [];
//     cart.push(product);

//     // Lưu giỏ hàng vào Local Storage
//     localStorage.setItem('cart', JSON.stringify(cart));
// }

// function colorDetect() {
//     const print = document.querySelector('.color-detect');
//     const inputs = document.querySelectorAll('input[name="color"]');
//     inputs.forEach(function(input) {

//         if (input.checked) {
//             print.textContent = input.value;
//         }

//         input.addEventListener('change', function () {
//             print.textContent = input.value;
//         });
//     });
// }

function quantityDetect() {
    const minus = document.querySelector('.minus');
    const plus = document.querySelector('.plus');
    const input = document.querySelector('#amount');
    const quantityInStock = document.querySelector('.quantity-in-stock span');

    minus.addEventListener('click', function () {
        if (parseInt(input.value) <= 1)  {
            input.value = 1;
        } else {
            input.value--;
        }
    })

    plus.addEventListener('click', function () {
        if (parseInt(input.value) >= parseInt(quantityInStock.textContent)) {
            input.value = quantityInStock.textContent;
        } else {
            input.value++;
        }
    })

    input.addEventListener('input', function() {
        const enteredValue = parseInt(this.value);
        if (enteredValue > parseInt(quantityInStock.textContent)) {
            this.value = quantityInStock.textContent;
        } else if (enteredValue < 0) {
            this.value = 1;
        }
    });
}

function buyNow() {
    // const  document.querySelector('')
}

function toastMessage(type,message) {
    var background;
    var colorText;
    switch (type) {
        case "success":
            background = '#2DCB70';
            colorText = "#FFF";
            break;
        
        case "alert":
            background = '#FFC107';
            colorText = "##212529";
            break;

        case "error":
            background = '#DC3545';
            colorText = "#FFF";
            break;

        default:
            break;
    }
    Swal.fire({
        text: message,
        showConfirmButton: false,
        background: background,
        toast: true,
        animation: true,
        color: colorText,
        showCloseButton: true,
        timer: 2500,
        position: "top-end",
        timerProgressBar: true,
        showClass: {
            popup: 'animate__animated animate__fadeInRight animate__faster'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutRight animate__faster'
        },
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            toast.addEventListener('click', ()=> Swal.close())
        }
    });
}