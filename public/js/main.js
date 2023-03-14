const btnAcor = document.querySelector('#btn-acordion')


const bodyAcor = document.querySelector('#acordion')

const footerChevron = document.querySelector('#footer-chevron')
console.log(footerChevron)

btnAcor.addEventListener('click', () => {
  
  bodyAcor.classList.toggle('hidden')
  // footerChevron.classList.toggle('fa-chevron-down')
  footerChevron.classList.toggle('fa-chevron-up')
  footerChevron.classList.toggle('fa-chevron-down')
})


// menu mobile
const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

btn.addEventListener('click', () => {
  btn.classList.toggle('open');
  nav.classList.toggle('flex');
  nav.classList.toggle('hidden');
})



const userNombre = document.querySelector('#user_nombre')
const nombre = userNombre.value

console.log(nombre)

const btnCompra = document.querySelector('#btn_compra')

const checkout = document.querySelector('#paypal-button-container')
btnCompra.addEventListener('click', () => {
  if (nombre == 1) {
    console.log('ir al carrito')
    checkout.classList.remove('hidden')
    // window.location.href = 'http://192.168.8.100/comic_store/usuarios/carrito'
  } else {
    console.log('no hay user logueado')
    document.querySelector('#response').classList.toggle('hidden')
    setTimeout( () => {
      document.querySelector('#response').classList.toggle('hidden')
    },15000)
  }
})



// Render the PayPal button into #paypal-button-container
paypal.Buttons({

 // onInit: (data,actions) => {
 //    // Disable the buttons
 //    actions.disable()
 //    // Listen for changes to the checkbox
 //    document.querySelector('#check').addEventListener('change', (event) => {
 //      // Enable or disable the button when it is checked or unchecked
 //      if (event.target.checked)  {
 //        actions.enable()
 //      } else  {
 //        actions.disable()
 //      }
 //    })
 //  },

 //      // onClick is called when the button is clicked
 //  onClick: () => {
 //    // Show a validation error if the checkbox is not checked
 //    if (!document.querySelector('#check').checked) {
 //      document.querySelector('#error').classList.remove('hidden')
 //    }
 //  },

  // fundingSource: paypal.FUNDING.CARD, // solo aceptar pagos desde tarjetas (Funding  source = fuente de fondos)
  // Set up the transaction
  createOrder: (data, actions) => {
    return actions.order.create({
      // no agregar shipping address en factura 
      application_context: {
        shipping_preference: "NO_SHIPPING"
      },
      // payer: {
      //   email_address: '{{ $email }}',
      //   name: {
      //     given_name: '{{ $firstName }}',
      //     surname: '{{ $lastName }}'
      //   },
      //   address: {
      //     country_code: "{{ $country->code }}"
      //   }
      // },
      purchase_units: [{
        amount: {
          value: '14.00'
        }
      }]
    })
  },
  onApprove: (data,actions) => {
    return actions.order.capture()
    .then( (orderData) => {
                     // Successful capture! For demo purposes:
               console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
               let transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
      console.log('data', data)
      console.log('actions', actions)


      // window.location.href = 'aprobado.php'



    //Aqui van las instrucciones que deseamos realize una vez procese el pago
    //En mi caso solo muestra el mensaje: Pago realizado por: <nombreDeCuenta>
        // alert('Pago realizado por:' + details.payer.name.given_name);
        // // Instrucciones para el servidor:
        // return fetch('/paypal-transaction-complete', {
        //   method: 'post',
        //   headers: {
        //     'content-type': 'application/json'
        //   },
        //   body: JSON.stringify({
        //     orderID: data.orderID
        //   })
        // });
  //fin de instruciones para el servidor




// <script>
//   paypal.Buttons({
//     createOrder() {
//        return fetch("/my-server/create-paypal-order", {
//         method: "POST",
//         headers: {
//           "Content-Type": "application/json",
//         },
//         body: JSON.stringify({
//           cart: [
//             {
//               sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
//               quantity: "YOUR_PRODUCT_QUANTITY"
//             }
//           ]
//         })
//     })
//     }
//   }).render('#paypal-button-container');
// </script>





       //          return fetch(`"/my-server/capture-paypal-order`, {
       //              method: "post",
       //              body: JSON.stringify({
       //                  orderID: data.orderID
       //              })
       //          })
       //              .then((response) => response.json())
       //              .then((orderData) => {
      
       // // Successful capture! For dev/demo purposes:
       //                  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
       //                  const transaction = orderData.purchase_units[0].payments.captures[0];
       //                  console.log('Transaction Status:', transaction.status);
       //                  console.log('Transaction ID:', transaction.id);
                        // When ready to go live, remove the alert and show a success message within this page. For example:
                        // const element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL:  window.location.href = 'thank_you.html';

    })
  },
  onCancel: (data, actions) => {
    console.log(`Order Canceled - ID: ${data.orderID}`);
  },
  onError: (err) => {
    console.log('algo salio mal', err)
  },
  style: {
    color: 'gold',
    shape: 'pill',
    label: 'pay',
    height: 50
  }


}).render('#paypal-button-container')






 // paypal.Marks({
 //            fundingSource: paypal.FUNDING.BANCONTACT
 //        }).render('#bancontact-mark')

 //        paypal.PaymentFields({
 //            fundingSource: paypal.FUNDING.BANCONTACT,
 //            style: {
 //                // style object (optional)
 //            },
 //            fields: {
 //                // fields prefil info (optional)
 //                name: {
 //                    value: "John Doe",
 //                },
 //            }
 //        }).render("#bancontact-container");

 //        paypal.Buttons({
 //            fundingSource: paypal.FUNDING.BANCONTACT,
 //            style: {
 //                label: "pay",
 //            },
 //            createOrder() {
 //                return fetch("/my-server/create-paypal-order", {
 //                    method: "post",
 //                    // use the "body" param to optionally pass additional order information
 //                    // like product skus and quantities
 //                    body: JSON.stringify({
 //                        cart: [
 //                            {
 //                                sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
 //                                quantity: "YOUR_PRODUCT_QUANTITY",
 //                            },
 //                        ],
 //                    }),
 //                })
 //                    .then((response) => response.json())
 //                    .then((order) => order.id);
 //            },
 //            onApprove(data) {
 //                return fetch(`"/my-server/capture-paypal-order`, {
 //                    method: "post",
 //                    body: JSON.stringify({
 //                        orderID: data.orderID
 //                    })
 //                })
 //                    .then((response) => response.json())
 //                    .then((orderData) => {
 //                        // Successful capture! For dev/demo purposes:
 //                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
 //                        const transaction = orderData.purchase_units[0].payments.captures[0];
 //                        console.log('Transaction Status:', transaction.status);
 //                        console.log('Transaction ID:', transaction.id);
 //                        // When ready to go live, remove the alert and show a success message within this page. For example:
 //                        // const element = document.getElementById('paypal-button-container');
 //                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
 //                        // Or go to another URL:  window.location.href = 'thank_you.html';
 //                    });
 //            },
 //            onCancel(data, actions) {
 //                console.log(`Order Canceled - ID: ${data.orderID}`);
 //            },
 //            onError(err) {
 //                console.error(err);
 //            }
 //        })
 //            .render("#bancontact-btn");