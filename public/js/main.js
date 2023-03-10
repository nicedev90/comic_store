// Render the PayPal button into #paypal-button-container
paypal.Buttons({
     // Set up the transaction
     createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                   amount: {
                      value: '1.00'
                   }
               }]
           });
         },
       // Finalize the transaction
       onApprove: function(data, actions) {
           return actions.order.capture().then(function(orderData) {
               // Successful capture! For demo purposes:
               console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
               let transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
            });
         },

         style: {
          color:  'blue',
          shape:  'pill',
          label:  'pay',
          height: 40
      }
}).render('#paypal-button-container');