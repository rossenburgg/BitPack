
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body >
<style>
    body {
        height: 100vh;
        justify-content: center;
        align-items: center;
        display: flex;
        background-color: #eee
    }
.card {
    height: 400px;
    width: 400px;
}




</style>
    @include('sweetalert::alert')
    <div class="card p-5 shadow p-3 mb-6 bg-white rounded">
    <form id="paymentForm">
        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email-address" required />
        </div>
        <div class="form-group mb3">
            <label for="amount">Amount</label>
            <input type="tel" class="form-control" id="amount" required />
        </div>
        <div class="form-group mb-3">
            <label for="first-name">First Name</label>
            <input type="text" class="form-control" id="first-name" />
        </div>
        <div class="form-group mb3">
            <label for="last-name">Last Name</label>
            <input type="text" class="form-control" id="last-name" />
        </div>

        <div class="form-submit mb-3">
            <button type="submit" class="btn btn-lg btn-primary  text-uppercase fw-bold mt-2" onclick="payWithPaystack(event)"> Pay Now </button>
        </div>
    </form>
</card>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let paymentForm = document.getElementById("paymentForm");
        paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(e) {
            e.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_b4f165fb81d37ec26d6dc0e55fd3fd0f48c95987', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                currency: 'GHS',
                // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    let reference = response.reference;
                    alert('Payment complete! Order Number: ' + reference);
                    // Verify payment at this step
                  $.ajax({
                      type: "GET",
                      url: "{{URL::to('verify-payment')}}/"+reference,

                      success: function (response) {
                          if(response[0].status == true){
                              $("form").prepend('Payment' + " " + response[0].message);
                          }else {
                              $("form").prepend('<h2>Failed or something went wrong</h2>');
                          }
                      }
                  })
                }

            });

            handler.openIframe();
        }
    </script>



</html>

