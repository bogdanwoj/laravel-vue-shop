<template>
    <div>
        <div class="container checkoutBox">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Products in your cart</h3>
                        <div class="plan-selection" v-for="item in items" :key="item.id">
                            <div class="plan-data" v-if="item.name">
                                <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question1">{{ item.name }}</label>
                                <p class="plan-text">
                                    Quantity: {{ item.quantity }}</p>
                                <span class="plan-price">Price/Unit: {{ item.sale_price }}$</span>
                            </div>
                        </div>
                        <div>
                            <!--SHIPPING METHOD-->
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h4>Shipping Address</h4><br/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Country:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="country" v-model="country"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-xs-12">
                                            <strong>First Name:</strong>
                                            <input type="text" name="first_name" v-model="firstName" class="form-control" />
                                        </div>
                                        <div class="span1"></div>
                                        <div class="col-md-6 col-xs-12">
                                            <strong>Last Name:</strong>
                                            <input type="text" name="last_name" v-model="lastName" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Address:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="address" v-model="address" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>City:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="city" v-model="city" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>State:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="state" v-model="state" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="zip_code" v-model="zipCode" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Phone Number:</strong></div>
                                        <div class="col-md-12"><input type="text" name="phone_number" v-model="phone" class="form-control" /></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Email Address:</strong></div>
                                        <div class="col-md-12"><input type="text" name="email_address" v-model="email" class="form-control" /></div>
                                    </div>
                                </div>
                            </div>
                            <!--SHIPPING METHOD END-->
                            <hr>
                            <!--CREDIT CART PAYMENT-->
                            <div class="panel panel-info">
                                <h4> Secure Payment </h4><br/>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Card Type:</strong></div>
                                        <div class="col-md-12">
                                            <select id="CreditCardType" name="CreditCardType" v-model="cardType" class="form-control">
                                                <option value="5">Visa</option>
                                                <option value="6">MasterCard</option>
                                                <option value="7">American Express</option>
                                                <option value="8">Discover</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                        <div class="col-md-12"><input type="text" class="form-control" name="car_number" v-model="cardNumber" /></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Card CVV:</strong></div>
                                        <div class="col-md-12"><input type="text" class="form-control" name="car_code" v-model="cvv" /></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <strong>Expiration Date</strong>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="" v-model="expirationMonth">
                                                <option value="">Month</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="" v-model="expirationYear">
                                                <option value="">Year</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <span>Pay secure using your credit card.</span>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="cards">
                                                <li class="visa hand">Visa</li>
                                                <li class="mastercard hand">MasterCard</li>
                                                <li class="amex hand">Amex</li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div>
                                                <hr>
                                                <button class="btn btn-warning" v-on:click.prevent="getUserAddress()"> Place order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--CREDIT CART PAYMENT END-->
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                    <div class="widget">
                        <h4 class="widget-title">Order Summary</h4>
                        <div class="summary-block" v-for="summaryItem in items" :key="summaryItem.id">
                            <div class="summary-content" v-if="summaryItem.name">
                                <div class="summary-head"><h5 class="summary-title">{{ summaryItem.name }}</h5></div>
                                <div class="summary-price">
                                    <p class="summary-small-text pull-right">Total price:  {{ summaryItem.total }} $</p>
                                </div>
                            </div>

                        </div>
                        <div class="text-danger">Total cart price: {{ items.totalAmount }} $</div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            items: [],
            firstName: '',
            lastName: '',
            address: '',
            city: '',
            state: '',
            country: '',
            zipCode: '',
            phone: '',
            email: '',
            cardType: '',
            expirationMonth: '',
            expirationYear: '',
            cvv: '',
            cardNumber: '',
        };
    },

    methods: {
        async getCartItems() {
            try {
                let response = await axios.get('/checkout/get/items');
                this.items = response.data;
                console.log(this.items);
                // Process the received data as needed
            } catch (error) {
                console.error('Error fetching cart items:', error);
            }
        },
        async getUserAddress() {
            try {
                if (this.firstName !== '' && this.address !== '' && this.cardNumber && this.cvv) {

                    let response = await axios.post('/process/user/payment', {
                        'firstName': this.firstName,
                        'lastName': this.lastName,
                        'address': this.address,
                        'city': this.city,
                        'state': this.state,
                        'country': this.country,
                        'zipCode': this.zipCode,
                        'phone': this.phone,
                        'email': this.email,
                        'cardType': this.cardType,
                        'expirationMonth': this.expirationMonth,
                        'expirationYear': this.expirationYear,
                        'cvv': this.cvv,
                        'cardNumber': this.cardNumber,
                    });
                    console.log(response.data);

                } else {
                    console.error('User info incomplete');
                    alert('User info incomplete. Please try again later.');
                }
            } catch (error) {
                console.error('Error processing user address:', error);
                alert('Error processing user address. Please try again later.');
            }
        }

    },

    created() {
        this.getCartItems();
    },
};
</script>
