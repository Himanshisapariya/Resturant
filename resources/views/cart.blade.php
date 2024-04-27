@include('admin.message')

<div class="container">
    <h2>Shopping Cart</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Food Image</th>
          <th>Food Name</th>
          <th>Food Price</th>
          <th>Quantity</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="food1.jpg" alt="Food 1" width="50" height="50"></td>
          <td>Food 1</td>
          <td>$10.00</td>
          <td>2</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <tr>
          <td><img src="food2.jpg" alt="Food 2" width="50" height="50"></td>
          <td>Food 2</td>
          <td>$15.00</td>
          <td>1</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>