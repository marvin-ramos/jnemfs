<!DOCTYPE html>
<html>
<head>
    <title>J&EMFS - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>
                <span class="fa fa-briefcase" aria-hidden="true"></span> <span class="navbar-title">J&EMFS</span>
            </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <span class="fas fa-home"></span> 
                        <span class="nav-title"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-user-tag"></span> 
                        <span class="nav-title"> Customer</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-motorcycle"></span> 
                        <span class="nav-title"> Units</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="far fa-credit-card"></span> 
                        <span class="nav-title"> Loan Type</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-user-astronaut"></span> 
                        <span class="nav-title"> Payors</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-briefcase" aria-hidden="true"></span> 
                        <span class="nav-title"> Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-cart-plus"></span> 
                        <span class="nav-title"> Order</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-boxes"></span> 
                        <span class="nav-title"> Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-user-lock"></span> 
                        <span class="nav-title"> User Account</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-area"></span> 
                        <span class="nav-title"> Reports</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-table"></span> 
                        <span class="nav-title"> History</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fas fa-bars"></span>
                </label>
                DASHBOARD
            </h2>

            <div class="user-wrapper">
                <img src="{{ asset('images/profile.svg') }}" width="40px" height="40px" alt="">
                <div>
                    <h4>Marvin M. Ramos</h4>
                    <small>Administrator</small>
                </div>

            </div>
        </header>

        <main>
            <div class="cards">

                <!-- for customer -->
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fas fa-user-tag"></span>
                    </div>
                </div>

                <!-- for units -->
                <div class="card-single">
                    <div>
                        <h1>154</h1>
                        <span>units</span>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>

                <!-- for Payors -->
                <div class="card-single">
                    <div>
                        <h1>74</h1>
                        <span>Payors</span>
                    </div>
                    <div>
                        <span class="fas fa-user-astronaut"></span>
                    </div>
                </div>

                <!-- for Sale -->
                <div class="card-single">
                    <div>
                        <h1>1454</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="fas fa-cart-plus"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h2>Recent Sale Inventory</h2>
                            <button>See all <span class="fas fa-arrow-down"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Customer Name</td>
                                            <td>Unit Type</td>
                                            <td>Unit Price</td>
                                            <td>Total Payment</td>
                                            <td>Balance</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Marvin M. Ramos</td>
                                            <td>Honda Beat</td>
                                            <td>80, 000</td>
                                            <td>40, 000</td>
                                            <td>40, 000</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Marvin M. Ramos</td>
                                            <td>Honda Beat</td>
                                            <td>80, 000</td>
                                            <td>40, 000</td>
                                            <td>40, 000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sales">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customer</h3>
                            <button>See all <span class="fas fa-arrow-down"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="{{ asset('images/profile.svg') }}" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Marvin M.Ramos</h4>
                                        <small>Administrator</small>
                                    </div>
                                </div>
                                <div class="contact">
                                   <span class="fas fa-map-marked-alt"></span>
                                   <span class="fas fa-sms"></span>
                                   <span class="fas fa-phone-square-alt"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="{{ asset('images/profile.svg') }}" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Marvin M.Ramos</h4>
                                        <small>Administrator</small>
                                    </div>
                                </div>
                                <div class="contact">
                                   <span class="fas fa-map-marked-alt"></span>
                                   <span class="fas fa-sms"></span>
                                   <span class="fas fa-phone-square-alt"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>
