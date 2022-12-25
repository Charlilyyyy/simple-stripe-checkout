{{$order_data}}
@include('link.bootstrap')
<div class="row">
    <div class="col-6">
        <div class="card mt-5 mx-5">
            <div class="card-header">
                <h1>Your Order</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <h4>Name: </h4>
                    </div>
                    <div class="col-9">
                        <h4>{{$order_data->name}}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4>Age: </h4>
                    </div>
                    <div class="col-9">
                        <h4>{{$order_data->age}}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4>Phone: </h4>
                    </div>
                    <div class="col-9">
                        <h4>{{$order_data->phone}}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4>Order: </h4>
                    </div>
                    <div class="col-9">
                        <h4>{{$order_data->order}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card mt-5 mx-5">
            <div class="card-header">
                <h1>Payment Details</h1>
            </div>
        </div>
    </div>
</div>