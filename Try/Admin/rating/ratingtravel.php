<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  type="text/css"
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="rateing.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <style>
.stars-outer {
  position: relative;
  display: inline-block;
}

.stars-inner {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}

.stars-outer::before {
  content: "\f005 \f005 \f005 \f005 \f005";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #ccc;
}

.stars-inner::before {
  content: "\f005 \f005 \f005 \f005 \f005";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #f8ce0b;
}


</style>
  <body>
  <div class="container mt-5">
  <div class="form-group">
    <select id="product-select" class="form-control custom-select">
        <option value="0" disabled selected>Select Category </option>
        <option value="food">India Rajasthan </option>
        <option value="tech">Sri Lanka 13e 2015</option>
      </select>
  </div>
  <div class="form-group">
    <input type="number" id="rating-control" class="form-control" step="0.1" max="5" placeholder="Rate 1 - 5" disabled>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Travel</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody>
      <tr class="food">
        <td>India Rajasthan </td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      <tr class="tech">
        <td>Sri Lanka 13e 2015</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>
<script>
 const ratings = {
       food  : 4.7,
        tech: 3.4,
     
    }

    // Total Stars
    const starsTotal = 5;

    // Run getRatings when DOM loads
    document.addEventListener('DOMContentLoaded', getRatings);

    // Form Elements
    const productSelect = document.getElementById('product-select');
    const ratingControl = document.getElementById('rating-control');

    // Init product
    let product;

    // Product select change
    productSelect.addEventListener('change', (e) => {
      product = e.target.value;
      // Enable rating control
      ratingControl.disabled = false;
      ratingControl.value = ratings[product];
    });

    // Rating control change
    ratingControl.addEventListener('blur', (e) => {
      const rating = e.target.value;

      // Make sure 5 or under
      if (rating > 5) {
        alert('Please rate 1 - 5');
        return;
      }

      // Change rating
      ratings[product] = rating;

      getRatings();
    });

    // Get ratings
    function getRatings() {
      for (let rating in ratings) {
        // Get percentage
        const starPercentage = (ratings[rating] / starsTotal) * 100;

        // Round to nearest 10
        const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

        // Set width of stars-inner to percentage
        document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;

        // Add number rating
        document.querySelector(`.${rating} .number-rating`).innerHTML = ratings[rating];
      }
    }
</script>
  </body>
</html>
