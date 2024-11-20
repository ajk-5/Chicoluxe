<div class="form_private_jet"><form action="/submit_listing" method="post">
  <label for="jet_make_model">Jet Make & Model:</label><br>
  <input type="text" id="jet_make_model" name="jet_make_model" required><br>
  <label for="year_manufactured">Year Manufactured:</label><br>
  <input type="number" id="year_manufactured" name="year_manufactured" required><br>
  <label for="total_flight_hours">Total Flight Hours:</label><br>
  <input type="number" id="total_flight_hours" name="total_flight_hours" required><br>
  <label for="seating_capacity">Seating Capacity:</label><br>
  <input type="number" id="seating_capacity" name="seating_capacity" required><br>
  <label for="engine_type">Engine Type:</label><br>
  <input type="text" id="engine_type" name="engine_type" required><br>
  <label for="interior_description">Interior Description:</label><br>
  <textarea id="interior_description" name="interior_description" ></textarea><br>
  <label for="exterior_description">Exterior Description:</label><br>
  <textarea id="exterior_description" name="exterior_description" ></textarea><br>
  <label for="price">Price (USD):</label><br>
  <input type="number" id="price" name="price" ><br>
  <label for="photo">Photo:</label>
  <input type="file" name="photo" id="photo" accept="image/*" required>
  <input type="submit" value="Submit Listing">
</form>
</div>  