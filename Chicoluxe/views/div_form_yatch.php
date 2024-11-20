<style>
    /* CSS styling for the form */
    .sell-yacht-form {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .sell-yacht-form label {
        font-weight: bold;
    }
    .sell-yacht-form input[type="text"],
    .sell-yacht-form input[type="email"],
    .sell-yacht-form textarea,
    .sell-yacht-form select {
        width: calc(100% - 20px);
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .sell-yacht-form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    .sell-yacht-form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="sell-yacht-form">
    <h2>Yacht Selling Form</h2>
    <form action="/submit_yacht" method="post">
         <label for="title">title:</label>
        <input type="text" id="title" name="title" >
        <label for="price">price:</label>
        <input type="number" id="price" name="price"  required>


        <label for="yacht_model">Yacht Model:</label>
        <input type="text" id="yacht_model" name="yacht_model" required>

        <label for="yacht_year">Year Built:</label>
        <input type="text" id="yacht_year" name="yacht_year" required>

        <label for="yacht_length">Length (ft):</label>
        <input type="text" id="yacht_length" name="yacht_length" >

        <label for="yacht_beam">Beam (ft):</label>
        <input type="text" id="yacht_beam" name="yacht_beam" >

        <label for="yacht_draft">Draft (ft):</label>
        <input type="text" id="yacht_draft" name="yacht_draft" >

        <label for="yacht_displacement">Displacement (tons):</label>
        <input type="number" id="yacht_displacement" name="yacht_displacement" >

        <label for="engine_description">Engine description:</label>
        <textarea id="engine_description" name="engine_description" ></textarea>

        <label for="electrical_system">Electrical System:</label>
        <textarea id="electrical_system" name="electrical_system" ></textarea>

        <label for="plumbing_system">Plumbing System:</label>
        <textarea id="plumbing_system" name="plumbing_system" ></textarea>

        <label for="safety_equipment">Safety Equipment:</label>
        <textarea id="safety_equipment" name="safety_equipment" ></textarea>
        
        <label for="interieur">interieur description:</label>
        <textarea id="interieur" name="interieur" ></textarea>
        
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required>

        <input type="submit" value="Submit">
    </form>
</div>  