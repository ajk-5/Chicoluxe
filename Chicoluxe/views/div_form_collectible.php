<style>
    /* CSS styling for the form */
    .collectibles-form {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .collectibles-form label {
        font-weight: bold;
    }
    .collectibles-form input[type="text"],
    .collectibles-form textarea,
    .collectibles-form select {
        width: calc(100% - 20px);
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .collectibles-form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    .collectibles-form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="collectibles-form">
    <h2>Collectibles Form</h2>
    <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

    <form action="submit_collectibles.php" method="post">
        <label for="collectible_type">Type of Collectible:</label><br>
        <select id="collectible_type" name="collectible_type">
            <option value="Stamps">Stamps</option>
            <option value="Coins">Coins</option>
            <option value="Art">Art</option>
            <option value="Antiques">Antiques</option>
            <option value="Vintage Toys">Vintage Toys</option>
            <option value="Comics and Trading Cards">Comics and Trading Cards</option>
            <option value="Books and Manuscripts">Books and Manuscripts</option>
            <option value="Memorabilia">Memorabilia</option>
            <option value="Watches and Timepieces">Watches and Timepieces</option>
            <option value="Musical Instruments">Musical Instruments</option>
            <option value="Jewelry and Gemstones">Jewelry and Gemstones</option>
            <option value="Postcards and Ephemera">Postcards and Ephemera</option>
            <option value="Military and Historical Items">Military and Historical Items</option>
            <option value="Space Memorabilia">Space Memorabilia</option>
        </select><br>

        <label for="condition">Condition:</label><br>
        <select id="condition" name="condition" required>
            <option value="">Select Condition</option>
            <option value="New">New</option>
            <option value="mint condition">mint condition</option>
            <option value="Used - Good">Used - Good</option>
            <option value="Used - Fair">Used - Fair</option>
            <option value="Used - Poor">Used - Poor</option>
        </select><br>



        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</div>
