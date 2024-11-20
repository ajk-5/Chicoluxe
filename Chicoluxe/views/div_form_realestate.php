<h2>Sell Your Apartment</h2>
<form action="/submit_apartment" method="post">
    <label for="apartment_address">Apartment Address:</label><br>
    <input type="text" id="apartment_address" name="apartment_address" required><br>

    <label for="apartment_size">Apartment Size (sqft):</label><br>
    <input type="text" id="apartment_size" name="apartment_size" required><br>

    <label for="apartment_price">Asking Price:</label><br>
    <input type="text" id="apartment_price" name="apartment_price" required><br>

    <label for="bedrooms">Number of Bedrooms:</label><br>
    <input type="text" id="bedrooms" name="bedrooms" required><br>

    <label for="bathrooms">Number of Bathrooms:</label><br>
    <input type="text" id="bathrooms" name="bathrooms" required><br>
    
    <label for="photo">Photo:</label>
    <input type="file" name="photo" id="photo" accept="image/*" required>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>

    <input type="submit" value="Submit">
</form>

<h2>Sell Your House</h2>
<form action="/submit_house" method="post">
    <label for="house_address">House Address:</label><br>
    <input type="text" id="house_address" name="house_address" required><br>

    <label for="house_size">House Size (sqft):</label><br>
    <input type="text" id="house_size" name="house_size" required><br>

    <label for="house_price">Asking Price:</label><br>
    <input type="text" id="house_price" name="house_price" required><br>

    <label for="bedrooms">Number of Bedrooms:</label><br>
    <input type="text" id="bedrooms" name="bedrooms" required><br>

    <label for="bathrooms">Number of Bathrooms:</label><br>
    <input type="text" id="bathrooms" name="bathrooms" required><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>
    
    <label for="photo">Photo:</label>
    <input type="file" name="photo" id="photo" accept="image/*" required>
   
    <input type="submit" value="Submit">
</form>



