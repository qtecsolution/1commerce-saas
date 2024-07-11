<section id="placeAnOrder">
    <section class="OrderConfirmFrom">
        <div class="container">
            <div class="row">
                <h2>তাই আর দেরি না করে আজই অর্ডার করুন </h2>
                <div class="col-lg-7">
                    <div class="OrderConfirmLeft">
                        <h3>Billing details</h3>
                        <div class="CustomeInput"><input type="text" name="" placeholder="আপনার নাম লিখুন *" />
                        </div>
                        <div class="CustomeInput"><input type="text" name=""
                                placeholder="আপনার মোবাইল নাম্বার লিখুন *" /></div>
                        <div class="CustomeInput"><input type="text" name=""
                                placeholder="আপনার সম্পূর্ণ ঠিকানা লিখুন *" /></div>
                        <div class="CustomeInput">
                            {{-- <input type="text" name="" placeholder="আপনার সম্পূর্ *" /> --}}
                            <select class="form-control" name="" id="" style="color: #797775">
                                <option selected>আপনার পেমেন্ট মেথড সিলেক্ট করুন</option>
                                <option value="Bkash">Bkash</option>
                                <option value="Nagad">Nagad</option>
                                <option value="Rocket">Rocket</option>
                                <option value="SSL Commerz">SSL Commerz</option>
                            </select>
                        </div>        
                        <div class="Payment">
                            <h3>Payment</h3>
                            <div class="CustomeInput d_flex"><input type="checkbox" name="" id="CashOn"
                                    checked="" /><label for="CashOn">ক্যাশ অন
                                    ডেলিভারি</label></div>
                            <div class="ArrowBg">
                                <p>Pay with cash on delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="OrderConfirmRight">
                        <h3>Your order</h3>
                        <ul>
                            <li>
                                <h4>Product</h4>
                                <h5>Subtotal</h5>
                            </li>
                            <li>
                                <div class="left d_flex">
                                    <div class="img"><img src="{{ asset('template/media/logo/ak-product.svg') }}"
                                            alt="" /></div>
                                    <p>Flower Of Story Men’s Perfume Set Boss</p>
                                </div>
                                <div class="right d_flex"><input type="number" />
                                    <h5>BDT 1,690.00</h5>
                                </div>
                            </li>
                            <li>
                                <h5>Subtotal</h5>
                                <h5>1,690.00</h5>
                            </li>
                            <li>
                                <h5>Shipping</h5>
                                <h5>
                                    <div class="checkbox d_flex"><input type="radio" id="Inside"
                                            name="checkbox" /><label for="Inside">Inside Dhaka : ৳
                                            00.00</label></div>
                                    <div class="checkbox d_flex"><input type="radio" id="Outside"
                                            name="checkbox" /><label for="Outside">Outside Dhaka: ৳
                                            00.00</label></div>
                                </h5>
                            </li>
                            <li>
                                <h4>Total</h4>
                                <h4>1,690.00</h4>
                            </li>
                        </ul><button> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                    </path>
                                </g>
                            </svg> Place Order BDT 1,690.00</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
