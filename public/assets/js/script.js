function pg(order_code){
    console.log(order_code);
    var Order_code=order_code;
    var selectedValue = document.querySelector('input[name="op1"]:checked').value;
    if(selectedValue == "online"){
    var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = ()=>{

                                if(xhttp.readyState == 4 && xhttp.status == 200){
                                    alert(xhttp.responseText);
                                    var obj = JSON.parse(xhttp.responseText);

                                    // Payment completed. It can be a successful failure.

                                        payhere.onCompleted = function onCompleted(orderId) {
                                            console.log("Payment completed. OrderID:" + orderId);
                                            // Note: validate the payment and show success or failure page to the customer
                                        };

                            // Payment window closed
                                        payhere.onDismissed = function onDismissed() {
                                            // Note: Prompt user to pay again or show an error page
                                            console.log("Payment dismissed");
                                        };

                            // Error occurred
                                        payhere.onError = function onError(error) {
                                            // Note: show an error page
                                            console.log("Error:"  + error);
                                        };

                            // Put the payment variables here
                                    var payment = {
                                        "sandbox": true,
                                        "merchant_id": "1222939",    // Replace your Merchant ID
                                        "return_url": "http://localhost/cropfello/public/feed/checkout2",     // Important
                                        "cancel_url": "http://localhost/cropfello/public/feed/checkout2",     // Important
                                        "notify_url": "",
                                        "order_id": obj["order_id"],
                                        "items": obj["items"],
                                        "amount": obj["amount"],
                                        "currency": obj["currency"],
                                        "hash": obj["hash"], // *Replace with generated hash retrieved from backend
                                        "first_name": obj["first_name"],
                                        "last_name": obj["last_name"],
                                        "email": obj["email"],
                                        "phone": obj["phone"],
                                        "address": obj["address"],
                                        "city": obj["city"],
                                        "country": "Sri Lanka",
                                        "delivery_address": "No. 46, Galle road, Kalutara South",
                                        "delivery_city": "Kalutara",
                                        "delivery_country": "Sri Lanka",
                                        "custom_1": "",
                                        "custom_2": ""
                                    };

                                    payhere.startPayment(payment);
                                }
                }
    xhttp.open("POST","http://localhost/cropfello/public/payment?order_code="+order_code,true);
    xhttp.send();
    
}

else{

   window.location.href = "http://localhost/Cropfello/public/feed/final?order_code="+order_code;
}
}