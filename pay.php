<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Hello, world!</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-4 mx-auto list-group-item mt-5">


                <form id="paymentForm" class="mt-5">
                    <input type="hidden" name="account" value="1"/>
                    <input type="hidden" name="amount" id="amount" value="4500"/>
                   <input type="hidden" name="email" id="email" value="customer@email.com"/>
                   <input type="hidden" name="name" id="name" value="customer name"/>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary w-100" onclick="payWithPaystack()"> Checkout </button>
                    </div>
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script>
                          const paymentForm = document.getElementById('paymentForm');
                          paymentForm.addEventListener("submit", payWithPaystack, false);
                          function payWithPaystack(e) {
                              e.preventDefault();

                              let handler = PaystackPop.setup({
                                  key: 'pk_test_cfd6325629ab336f9a3e715cd0ec4f3bf8bb4e55', // Replace with your public key
                                  email: document.getElementById("email").value,
                                  amount: document.getElementById("amount").value * 100,
                                  firstname: document.getElementById("name").value,
                                  ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                  // label: "Optional string that replaces customer email"
                                  onClose: function () {
                                      alert('Window closed.');
                                  },
                                  callback: function (response) {
                                      let message = 'Payment complete! Reference: ' + response.reference;
                                      alert(message);
                                  }
                              });
                              handler.openIframe();
                          }
                </script>
            </div>
        </div>
        
        
        <div class="modal" tabindex="-1" role="dialog" id="rxform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reg message here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        
    
    </body>
</html>







