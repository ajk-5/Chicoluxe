<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="form-container">
  <form id="categoryForm">
    <div class="form-group">
      <label for="selectOption">Select Option:</label>
      <select class="form-control" id="selectOption" name="selected_category">
        <option value="private_jet">Private Jet</option>
        <option value="yacht">Yacht</option>
        <option value="clothing">Clothing</option>
        <option value="accessories">Accessories</option>
        <option value="real_estate">Real Estate</option>
        <option value="collectibles">Collectibles</option>
      </select>
    </div>
    <button type="submit" name="submit_category">Submit</button>
  </form>
</div>