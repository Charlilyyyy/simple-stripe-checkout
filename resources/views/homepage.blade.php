@include('link.bootstrap')
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form name="submit-order" id="submit-order" method="post" action="{{route('orderdata.store')}}">
            @csrf
            <div class="card mt-5">
                <div class="card-header">
                    <h2>PLACE ORDER</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h4>Name:</h4>
                        </div>
                        <div class="col-9">
                            <input type="text" name="name" placeholder="Entern your name"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Age:</h4>
                        </div>
                        <div class="col-9">
                            <input type="text" name="age" placeholder="Entern your age"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Phone num:</h4>
                        </div>
                        <div class="col-9">
                            <input type="text" name="phone" placeholder="Entern your phone number"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Order:</h4>
                        </div>
                        <div class="col-9">
                            <input type="text" name="order" placeholder="Entern one meal"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>