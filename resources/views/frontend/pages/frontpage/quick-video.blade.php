<div class="bg-eae mb-3">
    <div class="container f-page-info py-4">
        <h3 class="font-weight-bold mb-3">
            @if(Request::is('/')) 
                <span class="lightgreen">Quick Order</span> Video
            @else
                Order your <span class="lightblue">Free Video</span> (LinkedIn Promotion)
            @endif
        </h3>
        <form class="order-form">
            <div class="row">
                <div class="col-sm-10"><input type="text" class="form-control w-100" placeholder="Your Email Address"></div>
            </div>
            <div class="row mt-4">
                <div class="col-sm"><input type="text" class="form-control w-100" placeholder="Property Website Listing URL (address) Here"></div>
                <div class="col-sm-2 align-self-center"><button type="submit" class="btn btn-primary b-radius-7 w-100"><b>GO</b></button></div>
            </div>
        </form>
    </div>
</div>