//console.log('Funiconando');

var formulario = document.getElementById('formulario');
var paymentForm = document.getElementById('paymentForm');

/*
var datos = new FormData(formulario);
var monto = datos.get('Monto');

$(document).ready(function() {
    KR.button.onClick(onCheckout(monto))                     
                       
});
*/


formulario.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('Evento click')

    var datos = new FormData(formulario);

    console.log(datos)
    console.log(datos.get('Monto'))
    console.log(datos.get('Moneda'))

    var monto = datos.get('Monto');
    onCheckout(monto)
    
    fetch('post.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = 
                `<div>
                    Llena todos los campos
                </div>`
            }else{
                respuesta.innerHTML =
                `<div>
                    ${data} 
                </div>`
            }
        })    
})


    /**
    * Called on 'checkout' click
    */
     function onCheckout(precio)
     {
         // Create the order, based on your cart
         var order = {
             "amount":   precio*100,
             "currency": "PEN",
             "orderId":  "myOrderId-999999",
             "customer": {
                 "email": "sample@example.com"
             }
         };
 
         // Call merchant server to get form token and then display payment form
         getFormToken(order, displayPaymentForm, alert);
     }
 
     /**
     * Get form token from merchant server
     * @param order
     * @param resolve
     * @param reject
     */
     function getFormToken(order, resolve, reject) {
         var request = new XMLHttpRequest();
 
         // Open a new connection, using the POST request on the URL endpoint
         //('https://cors-demo.glitch.me/allow-cors', {mode:'cors'})
         request.open('POST', 'https://server-node-izipay.herokuapp.com/CreatePayment', true);
         request.setRequestHeader('Content-Type', 'application/json');
 
         request.onload = function () {
             if (request.status >= 200 && request.status < 400) {
                 resolve(this.response);
             }
             else
             {
                 reject("Invalid server response. Code " + request.status);
             }
         };
 
         request.onerror = function (error) {
             reject(error);
         };
 
         // Send request
         request.send(JSON.stringify(order));
     }
 
 
     /**
     * Display the payment form with the argument form token
     * @param formToken
     */
     function displayPaymentForm(formToken)
     {
         // Show the payment form
         //document.getElementById('paymentForm').style.display = 'block';
 
         KR.setFormConfig({
             // Set form token
             formToken: formToken,
         }) 
 
         .then(({KR}) =>  
          KR.addForm("#form"))
 
         .then(({KR,result}) =>  
         KR.showForm(result.formId))
             
 
         // Add listener for submit event
         KR.onSubmit(onPaid);
     }
 
     /**
     * Called when payment is finished
     * @param event
     */
     function onPaid(event) {
         
         if (event.clientAnswer.orderStatus === "PAID") {            
             // Remove the payment form
             KR.removeForms();
     
         // Show success message
         document.getElementById("paymentSuccessful").style.display = "block";
         } else {
         // Show error message to the user
         alert("Payment failed !");
         }
     }








