<body>
    <h1>Timekart | Watch shopping web portal</h1>
    <h2>Problem Statement:</h2>
    <p>Create a full stack web application with (HTML, CSS, JS) & (PHP + MySQL)</p>
    <h2>Description:</h2>
    <p>Timekart is developed to demonstrate the functioning of a shopping website. It allows users to create an account, navigate the products (watches), add them to the cart, and finally make a purchase. The site then sends this purchase request to the admin, where they can view the requested order and also perform other actions to maintain the site.</p>
    <h2>Table of Contents:</h2>
    <ul>
        <li><a href="#installation1">Installation</a></li>
        <li><a href="#usage1">Usage</a>
            <ul>
                <li><a href="#customer1">Customer</a></li>
                <li><a href="#admin1">Admin</a></li>
            </ul>
        </li>
        <li><a href="#license1">License</a></li>
    </ul>
    <h2>Installation:</h2>
    <div id="installation1">
        <h3>1. Download and Install XAMPP:</h3>
        <p>If you don't have XAMPP installed, <a href="https://www.apachefriends.org/download.html">download and install it from the official website</a>.</p>
    </div>
    <div>
        <h3>2. Clone the Repository:</h3>
        <p>Clone this repository to your local machine using the following command:</p>
        <code>git clone https://github.com/devYashraj/Timekart.git</code>
    </div>
    <div>
        <h3>3. Move Files to htdocs:</h3>
        <p>Copy all the project files, including the database folder, and paste them into the htdocs folder of your XAMPP installation. This is typically located in the XAMPP installation directory (e.g. <code>C:\xampp\htdocs\</code> )</p>
    </div>
    <div>
        <h3>4. Import the Database:</h3>
        <ol>
            <li>Open phpMyAdmin by navigating to <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a> in your web browser.</li>
            <li>Create a new database for your project.</li>
            <li>Select the newly created database and choose the "Import" tab.</li>
            <li>Upload the .sql file from the database folder and execute the import.</li>
        </ol>
    </div>
    <div>
        <h3>5. Access the Application:</h3>
        <ol>
            <li>Open your web browser and navigate to <a href="http://localhost/timekart/login.php">http://localhost/timekart/login.php</a>.</li>
            <li>Login Credentials:</li>
            <ul>
                <li><strong>Admin:</strong></li>
                <ul>
                    <li>Username: admin123</li>
                    <li>Password: admin123</li>
                </ul>
                <li><strong>Customer:</strong> Create a new account if required.</li>
            </ul>
        </ol>
    </div>
    <div>
        <h3>6. Start Using the Application:</h3>
        <p>You should now be able to access and use the application.</p>
    </div>
    <h2 id="usage1">Usage:</h2>
    <img src="screenshots/homepage.png" alt="Homepage">
    <p>This is the first page where you can choose whether to login as admin or customer.</p>
    <h3 id="customer1">Customer:</h3>
    <img src="screenshots/userlogin.png" alt="Customer Login">
    <p>This is the customer login page. Enter your credentials or simply create a new account by clicking Create Account.</p>
    <img src="screenshots/userreg.png" alt="User Registration">
    <p>This is the registration form for creating a new account. Follow the rules mentioned as placeholders.</p>
    <img src="screenshots/dashboard.png" alt="Dashboard">
    <p>This is the home page. A carousel occupies the top of the screen displaying the latest offers.</p>

<img src="screenshots/brandlist.png" alt="Brandlist">
    <p>Upon scrolling down, there are various cards displaying a unique brand name. Click on a particular card to view that brand's products.</p>
    <img src="screenshots/prodlist.png" alt="Prodlist">
    <p>Upon clicking on a particular card, you will be directed to the product list of that specific brand. Click "Add to Cart" to add the item to your cart.</p>
    <img src="screenshots/navbar.png" alt="Navbar">
    <p>Navigate to the cart by clicking the button in the top-right corner and selecting "Cart.".</p>
    <img src="screenshots/cart.png" alt="Cart">
    <p>This is your cart. You can change the quantity (min = 1, max = 10) and also remove the item. Click "Place Order" to proceed.</p>
    <img src="screenshots/receipt.png" alt="Receipt">
    <p>This is the final confirmation screen. Click "Confirm & Place Order" to continue. After this, you can download this receipt as a PDF or print it.</p>
   <img src="screenshots/orders.png" alt="orders">
    <p>To view all the placed orders, navigate to "My Orders" using the navbar.</p>
    <h3 id="admin1">Admin:</h3>
    <img src="screenshots/admindash.png" alt="Admin Dashboard">
    <p>This is the admin dashboard. Click on "View Business" to see business activities or click on "Manage Stocks" to manage the stock status of products.</p>
    <img src="screenshots/business.png" alt="Business">
    <p>This is the business management section. Click on "View Business Reports" to view business activities. Click on "View All Orders" to view all received orders.</p>
    <img src="screenshots/businessreports.png" alt="Business Reports">
    <p>This is the overall report generated that summarizes the ongoing activities.</p>
    <img src="screenshots/adminorders.png" alt="Admin Orders">
    <p>This is the "View Orders" section sorted by date and time. Click on "View Details" for more information.</p>
    <img src="screenshots/stockmanage.png" alt="Stock Management">
    <p>This is the stock management section. You can sort products by brand name and toggle the status of a product as 'in-stock' or 'out-of-stock'. A product made out-of-stock cannot be purchased by the customer</p>
    <h2 id="license1">License:</h2>
    <p>This project is licensed under the <a href="https://github.com/devYashraj/Timekart/blob/main/LICENSE">MIT License</a>.</p>
</body>
