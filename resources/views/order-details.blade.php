<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>View Order Details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/assets/css/custom.css" rel="stylesheet">

</head>
<body>

	<section>
		<div class="container">
        <div class="row">
                <div class="com-md-12"><br/>
                    <div class="bd-example">
                    <button type="button" class="btn btn-outline-primary" id="customerStatus">Customer Status</button>
                    <button type="button" class="btn btn-outline-success" id="customerList">Customer List</button>
                    <button type="button" class="btn btn-outline-danger" id="OrderDetails">Order Details</button>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-md-12 ">
				    <h1>Order Details</h1>

                    <table class="table table-bordered" id="customerTable">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Customer Name</th>
                                <th>Total Amount</th>
                                <th>Total Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $index => $customer)
                        @if($customer->customerStatusId == 2)
                                <tr class="bg-danger text-white">
                                @elseif(($customer->getcount($customer->customerId) == ''))
                                <tr class="bg-warning text-dark">
                                @elseif(($customer->getcount($customer->customerId) >= 0) && ($customer->totalamnt != 0) && ($customer->datediff > 365) && ($customer->customerStatusId == 1) )
                                <tr class="bg-warning text-dark">
                                @elseif(($customer->getcount($customer->customerId) >=200) && ($customer->datediff > 90) && ($customer->customerStatusId == 1))
                                <tr class="bg-success text-white">
                                @else
                                <tr>
                                @endif
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->getcount($customer->customerId) }}</td>
                                    <td>{{ $customer->customerOrders }}</td>
                                    <td>
                                    <a href="/view-orders/{{ $customer->customerId }}" class="btn btn-outline-light"><i class="fa fa-info"></i></a>
                                </tr>
                                
                           @endforeach        
                        </tbody>
                    </table>	
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#customerTable').DataTable();
        
        $("#customerList").click(function() {
        window.location.href = "/view-customer";
        });

        $("#customerStatus").click(function() {
        window.location.href = "/view-status";
        });

        $("#OrderDetails").click(function() {
        window.location.href = "/order-details";
        });
    });
    </script>


</body>
</html>