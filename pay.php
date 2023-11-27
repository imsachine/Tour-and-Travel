
<DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Money</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />

  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <style>
			:root{
		  --main-bg:#e91e63;
		}

		input:focus, button:focus {
		  border: 1px solid var(--main-bg) !important;
		  box-shadow: none !important;
		}

		.form-check-input:checked {
		  background-color: var(--main-bg) !important;
		  border-color: var(--main-bg) !important;
		}

		.card, .btn, input{
		  border-radius:0 !important;
		}

  </style>
</head>
<body>

 <?php 
	session_start();
 if(!isset($_SESSION['training']) && !isset($_COOKIE['training']))
{
	header('Location: login.php');
  exit();
}
 ?>
<body class="main-bg">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Pay Money</h2>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-4">
               <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-4">
                <label for="amount">Amount :</label>
				<input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
              </div>
              <div class="mb-4">
                 <label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
			   <div class="mb-4">
                 <label for="mob">Mobile No :</label>
				<input type="mob" class="form-control" id="mob" placeholder="Enter Mobile No. " name="mob">
              </div>
              <div class="d-grid">
                <input type="button" value="Pay Now" class="btn btn-danger" name='button' onclick='MakePayment()'>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script>
	function MakePayment(){
		var name=$("#name").val();
		var amount=$("#amount").val();
		var email=$("#email").val();
		var mobile=$("#mob").val();
		
		
		var options = {
    "key": "rzp_test_O6sgDWLrCU5jV9",
    "amount":amount*100,
	"currency": "INR",
    "name": "name",
    "description": "Test Transaction",
    "image": "https://design.firefox.com/photon/visuals/product-identity-assets.html",
    "handler": function (response){
		jQuery.ajax({
			type:"POST",
			url:"payment.php",
			data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name"+name,
			success:function(result){
				window.location.href=`success.php?newamount=${amount}`;
			}
		});
    },
    "prefill": {
        "name":name,
        "email":email,
        "contact":mobile
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
  rzp1.open();

 }
</script>

</html>